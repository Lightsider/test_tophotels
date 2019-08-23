<?php

namespace app\models;

use Yii;

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
     *  Функция отправки сообщения на почту
     */
    public function sendEmailNotification()
    {
        Yii::$app->mailer->compose('order_mail', [
            'order' => $this,
            'receiver' => Yii::$app->params['receiverEmail'],
        ])
            ->setTo(Yii::$app->params['receiverEmail'])
            ->setFrom(Yii::$app->params['senderEmail'])
            ->setSubject(Yii::$app->params['senderEmailSubject'])
            ->send();
    }
}
