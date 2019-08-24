<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $created_at
 * @property string $direction
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $text
 * @property string $departure_date_numbers_of_nights
 * @property string $peoples_count
 * @property string $budget
 * @property string $tourist_city
 * @property Consultants $consultant
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'required'],
            [['text'], 'string'],
            [
                [
                    'name',
                    'phone',
                    'email',
                    'direction',
                    'departure_date_numbers_of_nights',
                    "peoples_count",
                    "budget",
                    "tourist_city"
                ],
                'string',
                'max' => 255
            ],
            [["consultant"], "integer"]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID заявки',
            'created_at' => "Дата и время добавления",
            'direction' => "Направление",
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Email',
            'text' => 'Доп. пожелание',
            'departure_date_numbers_of_nights' => 'Дата выезда\\Количество ночей',
            'peoples_count' => 'Количество человек',
            'budget' => 'Бюджет',
            'tourist_city' => 'Город туриста',
            'consultant' => 'Консультант'
        ];
    }

    /**
     * {@inheritdoc}
     * @return OrdersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrdersQuery(get_called_class());
    }

    /**
     * @return array|\yii\db\ActiveRecord
     */
    public function getConsultant()
    {
        return $this->hasOne(Consultants::class, ['id' => 'consultant'])->one();
    }

    /**
     *  Функция отправки сообщения на почту
     */
    public function sendEmailNotification($email = "default")
    {
        if ($email == "default") {
            $email = Yii::$app->params['receiverEmail'];
        }
        Yii::$app->mailer->compose('order_mail', [
            'order' => $this,
            'receiver' => $email,
        ])
            ->setTo($email)
            ->setFrom(Yii::$app->params['senderEmail'])
            ->setSubject(Yii::$app->params['senderEmailSubject'])
            ->send();
    }

    /**
     *  Функция назначения консультанта
     * @param HardOrderFormOneStep $oneStepForm
     */
    public function appointConsultant(HardOrderFormOneStep $oneStepForm)
    {
        $query = new Query();
        $consultant = null;

        if ($oneStepForm->type == 1) {

            if (empty($oneStepForm->directions)) {
                $this->consultant = null; // не указано направление
            } else {
                $city = trim(mb_strtolower($oneStepForm->directions[0]["ct"]));
                $country = trim(mb_strtolower($oneStepForm->directions[0]["cu"]));
                $stars = trim(mb_strtolower(str_replace("*", "", $oneStepForm->directions[0]["hotel"]["stars"]))) ?? "";
                if ($stars == "любая категория") {
                    $stars = null;
                } else {
                    $stars = explode(" ", $stars);
                }


                if ($country == "не важно") {
                    $this->consultant = null; //не указана страна
                } else {
                    $where = "dir_country like :country and dir_hotel='' ";
                    $where_params = [
                        ":country" => "%" . $country . "%",
                    ];

                    if ($city != "не важно") {
                        $where .= " and ( dir_city like :city or dir_city = '' )";
                        $where_params[":city"] = "%" . $city . "%";
                    }

                    if (!empty($stars)) {
                        $where .= "and ((";
                        foreach ($stars as $index => $star) {
                            $where .= "dir_stars like :star" . $index;
                            $where_params[":star" . $index] = "%" . $star . "%";

                            if ($index != count($stars) - 1) {
                                $where .= " or ";
                            }
                        }
                        $where .= ") or dir_stars='') ";
                    }

                    $consultant = $query
                        ->from("consultants")
                        ->where($where, $where_params)
                        ->orWhere("dir_country=''")
                        ->one();
                }
            }

        } else {
            $place_arr = explode(" ", trim(mb_strtolower($oneStepForm->ht[0]["hp"])));
            $hotel_arr = explode(" ", trim(mb_strtolower($oneStepForm->ht[0]["hn"])));

            if (count($place_arr) > 1) {
                $country = $place_arr[0];
                $city = $place_arr[1] ?? "";
            } else {
                $country = "";
                $city = $place_arr[0];
            }

            $star = $hotel_arr[count($hotel_arr) - 1];
            if (strpos($star, "*") !== false) {
                $star = str_replace("*", "", $star);
            } else {
                $star = null;
            }

            unset($hotel_arr[count($hotel_arr) - 1]);
            $hotel = implode(" ", $hotel_arr);

            $where = "";
            $where_params = [];
            if (!empty($country)) {
                $where .= "dir_country like :country ";
                $where_params[":country"] = "%" . $country . "%";
            }
            if (!empty($city)) {
                if ($where != "") {
                    $where .= " and ";
                }
                $where .= "dir_city like :city ";
                $where_params[":city"] = "%" . $city . "%";
            }
            if (!empty($hotel)) {
                if ($where != "") {
                    $where .= " and ";
                }
                $where .= "dir_hotel like :hotel ";
                $where_params[":hotel"] = "%" . $hotel . "%";
            }

            if ($where != "") {
                $consultant = $query
                    ->from("consultants")
                    ->where($where, $where_params)
                    ->orWhere("dir_country=''")
                    ->one();
            } else {
                $consultant = $query
                    ->from("consultants")
                    ->where("dir_country=''")
                    ->one();
            }
        }

        if (!empty($consultant)) {
            $this->consultant = $consultant["id"];
        } else {
            $this->consultant = null;
        }
    }
}


