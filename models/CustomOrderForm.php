<?php

namespace app\models;

use Faker\Provider\DateTime;
use Yii;
use yii\base\Model;

/**
 * Обработка формы нестандартного заказа
 *
 * Class CustomOrderForm
 * @package app\models
 */
class CustomOrderForm extends Model
{
    public $name;
    public $phone;
    public $email;
    public $text;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'trim'],
            ['name', 'required', 'message'=>'Имя не может быть пустым'],
            ['name', 'string','max' => 255],
            ['phone', 'trim'],
            ['phone', 'required', 'message'=>'Номер не может быть пустым'],
            ['phone', 'string','max' => 255],
            ['email', 'trim'],
            ['email', 'string','max' => 255],
            ['text', 'trim'],
        ];
    }

    /**
     * Функция сохранения формы нестандартного заказа
     *
     * @return Orders|boolean
     */
    public function saveOrder()
    {
        if (!$this->validate()) {
            return false;
        }
        $order = new Orders();

        $order->created_at = date("Y-m-d H:i:s");
        $order->name = $this->name;
        $order->phone = $this->phone;
        $order->email = $this->email;
        $order->text = $this->text;

        $order->save();

        return $order;
    }
}