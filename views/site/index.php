<?php

/* @var $this yii\web\View */
/* @var $countries \app\models\DictCountry */
/* @var $city \app\models\DictCity */

use yii\helpers\Url;

$this->title = 'TopHotels';
?>
<div class="tour-selection-box">
    <div class="tabs-block">
        <div class="tabs-bar   tabs-bar--responsive js-768-tabs">
            <div id="step1" class="tab active">Подобрать тур</div>
            <div id="form" class="tab">Нестандартный запрос</div>
            <div class="line" style="width: 117.812px"></div>
        </div>
        <?= $this->render('../forms/custom_form'); ?>
        <?= $this->render('../forms/hard_form', [
            'countries' => $countries,
            'cities' => $cities
        ]); ?>
        <div class="panel" id="success_message" style="display: none">
            <div class="bth__cnt fz18 bold">
                Спасибо, Ваша заявка отправлена и будет обработана в ближайшее время.
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div id="leftbar" class="leftbar">

        <div id="leftbar" class="leftbar">


            <div class="left-menu-1023">
                <div class="left-menu-1023__top">
                    <div class="relative"> Навигация проекта
                        <i class="left-menu-1023__top-close"></i>
                    </div>
                </div>
                <div class="left-menu-1023__item js-observe-scroll">
                    <div class="side-nav">
                        <ul class="side-nav-ul">
                            <li class="side-nav-li pt10">
                                <div class="side-nav-li-a side-nav-li-a--del-arr disabled">Главная</div>
                            </li>
                            <li class="side-nav-li">
                                <a href="#my-profile"
                                   class="side-nav-li-a  side-nav-li-a--del-arr js-left-menu-1023-anchor disabled">Мой
                                    профиль</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#catalog"
                                   class="side-nav-li-a side-nav-li-a--del-arr js-left-menu-1023-anchor  disabled">Каталог
                                    отелей</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#club-tx"
                                   class="side-nav-li-a  side-nav-li-a--del-arr  js-left-menu-1023-anchor disabled">Клуб
                                    ТопХотелс</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#help-selection"
                                   class="side-nav-li-a  side-nav-li-a--del-arr js-left-menu-1023-anchor disabled">Помощь
                                    в
                                    подборе</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#add-review"
                                   class="side-nav-li-a  side-nav-li-a--del-arr  js-left-menu-1023-anchor disabled">Добавить
                                    отзыв</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#features"
                                   class="side-nav-li-a  side-nav-li-a--del-arr  js-left-menu-1023-anchor disabled">О
                                    проекте</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="left-menu-1023__item">
                    <a id="my-profile" class="left-menu-1023__ttl disabled">Мой профиль</a>

                    <div class="side-nav">

                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl disabled">Моё участие</li>
                            <li class="side-nav-li">
                                <div class="side-nav-li-a disabled">Визитка</div>

                                <ul class="side-nav-li__tabs-list">
                                    <li class="side-nav-li__tabs-li">
                                        <a href="#" class="disabled">Визитка</a>
                                    </li>

                                    <li class="side-nav-li__tabs-li ">
                                        <a href="#" class="disabled"> Подборки и предложения</a>
                                    </li>
                                    <li class="side-nav-li__tabs-li">
                                        <a href="#" class="disabled"> Меня рекомендуют</a>
                                    </li>
                                    <li class="side-nav-li__tabs-li">
                                        <a href="#" class="disabled">Сертификаты</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Профиль</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Лента моих действий</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Мои путешествия</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Достижения</a>

                            </li>
                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl disabled">Коммуникации</li>
                            <li class="side-nav-li disabled">
                                <a href="#" class="side-nav-li-a disabled">Лог всех сообщений</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Мои подписки на
                                    отели</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Лента общения</a>

                            </li>
                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl disabled">Настройка интересов</li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Персональные данные</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Мои предпочтения</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Мои контакты</a>

                            </li>
                        </ul>
                    </div>

                </div>

                <div class="left-menu-1023__item">
                    <a id="catalog" class="left-menu-1023__ttl disabled">Каталог отелей</a>

                    <div class="side-nav">

                        <ul class="side-nav-ul">
                            <li class="side-nav-li pt10">
                                <a href="#"
                                   class="side-nav-li-a  side-nav-li-a--del-arr disabled">Фильтр</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#"
                                   class="side-nav-li-a  side-nav-li-a--del-arr disabled">
                                    Поиск отеля</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#"
                                   class="side-nav-li-a   side-nav-li-a--del-arr disabled">
                                    Мои интересы</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#"
                                   class="side-nav-li-a   side-nav-li-a--del-arr disabled">
                                    Сети отелей</a>

                            </li>


                        </ul>
                    </div>
                </div>


                <div class="left-menu-1023__item">
                    <a id="club-tx" class="left-menu-1023__ttl disabled">Клуб ТопХотелс</a>

                    <div class="side-nav">

                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl disabled">Сообщество</li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a grey disabled">Лента клуба</a>
                            </li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Форум по отелям </a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Спецакции отелей</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Опросы</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a grey disabled">Конкурсы и игры</a>

                            </li>
                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl disabled">Рейтинги</li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Номинации отелей</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Рейтинг номеров</a>
                            </li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">ТОП участников </a>

                            </li>
                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Участники</li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Кто Где Когда</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Путешественники</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">ПРО Турагенты</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a grey disabled">Индивидуальные гиды</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a grey disabled">Отельеры</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Сообщества отелей</a>

                            </li>
                        </ul>


                    </div>

                </div>

                <div class="left-menu-1023__item">
                    <a id="help-selection" class="left-menu-1023__ttl">Помощь в подборе</a>

                    <div class="side-nav">

                        <ul class="side-nav-ul">
                            <li class="side-nav-li pt10">
                                <a href="#"
                                   class="side-nav-li-a  side-nav-li-a--del-arr disabled">Параметры
                                    тура</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a  side-nav-li-a--del-arr disabled">
                                    Простая
                                    форма</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#"
                                   class="side-nav-li-a  side-nav-li-a--del-arr disabled">Рега</a>

                            </li>


                        </ul>
                    </div>
                </div>
                <div class="left-menu-1023__item">
                    <a id="add-review" class="left-menu-1023__ttl">
                        Добавить отзыв</a>

                    <div class="side-nav">

                        <ul class="side-nav-ul">
                            <li class="side-nav-li pt10">
                                <a href="#" class="side-nav-li-a   side-nav-li-a--del-arr disabled">Добавление
                                    отзыва</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a  side-nav-li-a--del-arr disabled">Черновики
                                    (14)</a>

                            </li>

                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a  side-nav-li-a--del-arr disabled">Нет
                                    отеля на
                                    ТопХотелс</a>

                            </li>

                        </ul>
                    </div>
                </div>

                <div class="left-menu-1023__item">
                    <a id="features" class="left-menu-1023__ttl">О проекте</a>

                    <div class="side-nav">
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Путешественникам</li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Отдых с ТопХотелс</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Полезные фишки</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a disabled">Все возможности</a>

                            </li>


                        </ul>

                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Для бизнеса</li>

                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">API сервисы</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Продвижение отеля</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Профиль турагента</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Медийная реклама</a>

                            </li>

                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Информация</li>

                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">О проекте</a>

                            </li>

                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Правила пользования</a>

                            </li>

                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Работа и карьера </a>

                            </li>

                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a disabled">Обратная связь</a>

                            </li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <?= $this->render('../parts/agreement_and_legal_info'); ?>
</div>