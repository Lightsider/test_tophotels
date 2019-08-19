<?php

namespace app\models;

use Faker\Provider\DateTime;
use Yii;
use yii\base\Model;

/**
 * Обработка сложной формы, шаг 1
 *
 * Class HardOrderFormOneStep
 * @package app\models
 */
class HardOrderFormOneStep extends Model
{
    //Количество взрослых
    public $ad;
    //Количество детей
    public $ch;
    // Возраст 1
    public $ch1;
    // Возраст 2
    public $ch2;
    // Возраст 3
    public $ch3;
    //??
    public $cur;
    //Дата начала
    public $df;
    //Направления
    public $directions;
    //Дата конца
    public $dt;
    //Ночи от
    public $nf;
    // Ночи до
    public $nt;
    // Цена от
    public $pc;
    // ???
    public $pf;
    // Цена до
    public $pt;
    // Пожелания
    public $wh;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['ad', 'trim'],
            ['ch', 'trim'],
            ['ch1', 'trim'],
            ['ch2', 'trim'],
            ['ch3', 'trim'],
            ['cur', 'trim'],
            ['df', 'trim'],
            ['directions', 'trim'],
            ['dt', 'trim'],
            ['nf', 'trim'],
            ['nt', 'trim'],
            ['pc', 'trim'],
            ['pf', 'trim'],
            ['pt', 'trim'],
            ['wh', 'trim'],
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
        $order = new Orders();

        $order->created_at = date("Y-m-d H:i:s");
        $order->name = "test";
        $order->phone = "test";
        $order->email = "test";


        if(!empty($this->directions)) {
            $order->direction = $this->directions[0]["cu"] . "\\город отеля\\отель";
            $order->text = implode(PHP_EOL, [
                $this->wh,
                //доп пожелания
                $this->directions[0]["cd"],
                // город вылета
                $this->directions[1] ? $this->directions[1]["cu"] . "\\" . $this->directions[1]["ct"] . "\\" . $this->directions[1]["cd"] : "",
                // инфа второго направления
                $this->directions[2] ? $this->directions[2]["cu"] . "\\" . $this->directions[2]["ct"] . "\\" . $this->directions[2]["cd"] : "",
                // инфа третьего направления
            ]);
        }
        else
        {
            $order->direction = "Не важно";
            $order->text = $this->wh;
        }

        $order->save();

        return $order;
    }
}