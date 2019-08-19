<?php

namespace app\models;

use Faker\Provider\DateTime;
use Yii;
use yii\base\Model;

/**
 * Обработка сложной формы, шаг 2
 *
 * Class HardOrderFormTwoStep
 * @package app\models
 */
class HardOrderFormTwoStep extends Model
{
    public $id_order;
    public $name;
    public $phone;
    public $email;
    public $city;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['id_order', 'trim'],
            ['id_order', 'number', 'integerOnly' => TRUE, 'min' => '1'],
            ['name', 'trim'],
            ['name', 'required', 'message'=>'Имя не может быть пустым'],
            ['name', 'string','max' => 255],
            ['phone', 'trim'],
            ['phone', 'required', 'message'=>'Номер не может быть пустым'],
            ['phone', 'string','max' => 255],
            ['email', 'trim'],
            ['email', 'string','max' => 255],
            ['city', 'trim'],
            ['city', 'required', 'message'=>'Город не может быть пустым'],
            ['city', 'string','max' => 255],
        ];
    }

    /**
     * Функция сохранения сложной формы
     *
     * @return Orders|boolean
     */
    public function saveOrder()
    {
        if (!$this->validate()) {
            return false;
        }
        $order = Orders::find($this->id_order)->where('id = :id', [':id' => $this->id_order])->one();
        $order->name = $this->name;
        $order->phone = $this->phone;
        $order->email = $this->email;
        $order->text .= "Город пользователя: ".$this->city.PHP_EOL;

        $order->save();

        return $order;
    }
}