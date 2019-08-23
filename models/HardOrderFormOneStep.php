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
                $order->direction = $this->directions[0]["cu"] . "\\" . $this->directions[0]["ct"] . "\\любой";
                $order->text = implode(PHP_EOL, [
                    //доп пожелания
                    "Пожелания: " . $this->wh,
                    // город вылета
                    "Город вылета: " . $this->directions[0]["cd"] . PHP_EOL,
                ]);

                $order->text .= "Отель: Категория - " . $this->directions[0]["hotel"]["stars"] . ";" .
                    "Рейтинг - " . $this->directions[0]["hotel"]["rate"] . ";" .
                    "Питание - " . $this->directions[0]["hotel"]["nutrition"] . ";" .
                    "Расположение - " . $this->directions[0]["hotel"]["place_type"] . ";" .
                    "Дети - " . $this->directions[0]["hotel"]["kids"] . ";" .
                    "Прочее - " . $this->directions[0]["hotel"]["other"] . ";" . PHP_EOL;

                // инфа доп направлений
                if (!empty($this->directions[1])) {
                    $order->text .= "Направление 2: "
                        . $this->directions[1]["cu"] . "\\" . $this->directions[1]["ct"] . "\\" . $this->directions[1]["cd"] . PHP_EOL;
                    $order->text .= "Отель: Категория - " . $this->directions[1]["hotel"]["stars"] . ";" .
                        "Рейтинг - " . $this->directions[1]["hotel"]["rate"] . ";" .
                        "Питание - " . $this->directions[1]["hotel"]["nutrition"] . ";" .
                        "Расположение - " . $this->directions[1]["hotel"]["place_type"] . ";" .
                        "Дети - " . $this->directions[1]["hotel"]["kids"] . ";" .
                        "Прочее - " . $this->directions[1]["hotel"]["other"] . ";" . PHP_EOL;

                }
                if (!empty($this->directions[2])) {
                    $order->text .= "Направление 3: " . $this->directions[2]["cu"] . "\\" . $this->directions[2]["ct"] . "\\" . $this->directions[2]["cd"] . PHP_EOL;
                    $order->text .= "Отель: Категория - " . $this->directions[2]["hotel"]["stars"] . ";" .
                        "Рейтинг - " . $this->directions[2]["hotel"]["rate"] . ";" .
                        "Питание - " . $this->directions[2]["hotel"]["nutrition"] . ";" .
                        "Расположение - " . $this->directions[2]["hotel"]["place_type"] . ";" .
                        "Дети - " . $this->directions[2]["hotel"]["kids"] . ";" .
                        "Прочее - " . $this->directions[2]["hotel"]["other"] . ";" . PHP_EOL;
                }
            } else {
                $order->direction = "Любое";
                $order->text = "Пожелания: " . $this->wh . PHP_EOL;
            }

            if (!empty($this->dt)) {
                $order->departure_date_numbers_of_nights = "Даты вылета: C " . $this->df . " до " . $this->dt . ";";
            } else {
                $order->departure_date_numbers_of_nights = "Дата вылета: " . $this->df . ";";
            }

            if (!empty($this->nt) && $this->nt != $this->nf) {
                $order->departure_date_numbers_of_nights .= "Количество ночей: " . $this->nf . "-" . $this->nt;
            } else {
                $order->departure_date_numbers_of_nights .= "Количество ночей: " . $this->nf;
            }

            if (!empty($this->pc)) {
                $order->budget = "Комфорт: " . $this->pc . "; ";
            }

            if ($this->pt != 0) {
                $order->budget .= "Максимум: " . $this->pt;
            } else {
                $order->budget .= "Максимум: не ограничен";
            }


            $order->peoples_count = "Взрослых людей:" . $this->ad;

            if ($this->ch != 0) {
                $order->peoples_count .= "; Детей: " . $this->ch . ": ";
                if (!empty($this->ch1)) {
                    $order->peoples_count .= "Возраст 1 - " . $this->ch1 . ";";
                }
                if (!empty($this->ch2)) {
                    $order->peoples_count .= "Возраст 2 - " . $this->ch2 . ";";
                }
                if (!empty($this->ch3)) {
                    $order->peoples_count .= "Возраст 3 - " . $this->ch3 . ";";
                }
            }

        }


        $order->save();

        return $order;
    }
}