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
            [['name', 'phone','created_at'], 'required'],
            [['text'], 'string'],
            [['name', 'phone', 'email','direction'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID заявки',
            'created_at'=>"Дата и время добавления",
            'direction'=>"Направление",
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Email',
            'text' => 'Доп. пожелание',
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
