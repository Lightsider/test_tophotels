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

    public $pf;
    // Цена до
    public $pt;
    // Пожелания
    public $wh;
    //Тип
    public $type;
    // Питание
    public $nc;
    // Отель
    public $ht;
    // Город вылета
    public $dc;


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
            ['type', 'trim'],
            ['nc', 'trim'],
            ['ht', 'trim'],
            ['dc', 'trim'],
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

        if ($this->type == 2) {
            $places = explode(" ", $this->ht[0]["hp"]);
            $places[1] = $places[1] ?? 'Любой';
            $order->direction = $places[0] . "\\" . $places[1] . "\\" . $this->ht[0]["hn"];

            $order->text = "";
            if (!empty($this->wh)) {
                $order->text = "Пожелания: " . $this->wh . PHP_EOL;
            }
            if (!empty($this->ht[1])) {
                $places = explode(" ", $this->ht[1]["hp"]);
                $places[1] = $places[1] ?? 'Любой';
                $order->text .= "Направление 2: " . $places[0] . "\\" . $places[1] . "\\" . $this->ht[1]["hn"] . PHP_EOL;
            }
            if (!empty($this->ht[2])) {
                $places = explode(" ", $this->ht[2]["hp"]);
                $places[1] = $places[1] ?? 'Любой';
                $order->text .= "Направление 3: " . $places[0] . "\\" . $places[1] . "\\" . $this->ht[2]["hn"] . PHP_EOL;
            }

            if (!empty($this->dc)) {
                $order->text .= "Город вылета: " . $this->dc . PHP_EOL;
            }
            if (!empty($this->nc)) {
                $order->text .= "Питание: " . $this->nc . PHP_EOL;
            }

        } else {
            if (!empty($this->directions)) {
                $order->direction = $this->directions[0]["cu"] . "\\город отеля\\отель";
                $order->text = implode(PHP_EOL, [
                    //доп пожелания
                    "Пожелания: " . $this->wh,
                    // город вылета
                    "Город вылета: " . $this->directions[0]["cd"],
                ]);

                // инфа доп направлений
                if (!empty($this->directions[1])) {
                    $order->text .= "Направление 2: " . $this->directions[1]["cu"] . "\\" . $this->directions[1]["ct"] . "\\" . $this->directions[1]["cd"] . PHP_EOL;
                }
                if (!empty($this->directions[2])) {
                    $order->text .= "Направление 3: " . $this->directions[2]["cu"] . "\\" . $this->directions[2]["ct"] . "\\" . $this->directions[2]["cd"] . PHP_EOL;
                }
            } else {
                $order->direction = "Любое";
                $order->text = $this->wh;
            }

            $order->text .= "Период дат вылета: с " . $this->df . " до " . $this->dt.PHP_EOL.
                    "Количество ночей: " . $this->nf . "-" . (string)$this->nt.PHP_EOL.
                    "Цена: " . $this->pc . " - комфортно, " . (string)$this->pt . " - максимум".PHP_EOL.
                    "Взрослых людей:" . $this->ad . PHP_EOL;

            if ($this->ch != 0) {
                $order->text .= "Детей: " . $this->ch . PHP_EOL;
                if (!empty($this->ch1)) {
                    $order->text .= "Возраст 1 - " . $this->ch1 . PHP_EOL;
                }
                if (!empty($this->ch2)) {
                    $order->text .= "Возраст 2 - " . $this->ch2 . PHP_EOL;
                }
                if (!empty($this->ch3)) {
                    $order->text .= "Возраст 3 - " . $this->ch3 . PHP_EOL;
                }
            }


        }


        $order->save();

        return $order;
    }
}