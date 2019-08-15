<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'TopHotels';
?>
<div class="tour-selection-box">
    <div class="tabs-block">
        <div class="tabs-bar   tabs-bar--responsive js-768-tabs">
            <div id="step1" class="tab active">Подобрать тур</div>
            <div id="form" class="tab active">Нестандартный запрос</div>
            <div class="line" style="width: 117.812px"></div>
        </div>
        <div class="panel" id="step1Panel">
            <div class="bth__cnt uppercase">Пожалуйста, укажите параметры вашей поездки</div>
            <div class="tour-selection-wrap">
                <div class="tour-selection-wrap-in tour-selection-wrap-flex">
                    <?= \LibUiTourFilter\widgets\WDate::widget([
                        'name' => 'date',
                        'templateId' => '_',
                        'cssClass' => 'tour-selection-field tour-selection-field--25p',
                        'jsReqObject' => 'lsfw.ui.main.request',
                        'jsFormObject' => '_myPageFormDate',
                        'dateFrom' => null,
                        'dateTo' => null,
                    ]); ?>

                    <?= \LibUiTourFilter\widgets\WNights::widget([
                        'name' => 'duration',
                        'templateId' => '_',
                        'cssClass' => 'tour-selection-field tour-selection-field--25p',
                        'jsReqObject' => 'lsfw.ui.main.request',
                        'jsFormObject' => '_myPageFormDuration',
                        'nightFrom' => null,
                        'nightTo' => null,
                    ]); ?>

                    <?= \LibUiTourFilter\widgets\WGuest::widget([
                        'name' => 'guest',
                        'templateId' => '_',
                        'cssClass' => 'tour-selection-field tour-selection-field--25p',
                        'jsReqObject' => 'lsfw.ui.main.request',
                        'jsFormObject' => '_myPageFormGuest',
                        'adults' => null,
                        'children' => null,
                    ]); ?>

                    <?= \LibUiTourFilter\widgets\WPrice::widget([
                        'name' => 'prix',
                        'templateId' => '_',
                        'cssClass' => 'tour-selection-field tour-selection-field--25p',
                        'jsReqObject' => 'lsfw.ui.main.request',
                        'jsFormObject' => '_myPageFormPrice',
                        'priceFrom' => 0,
                        'priceTo' => 1000000,
                    ]); ?>

                </div>
                <div class="tour-selection-wrap-in">

                    <div class="rbt-block mt0 mb0 ">
                        <input type="radio" name="types" class="rbt " id="type1" checked="">
                        <label class=" js-type1 label-rbt" for="type1">
                            <span class="rbt-cnt uppercase">Турпакет</span>
                        </label>
                    </div>
                    <div class="rbt-block   mt0 mb0">
                        <input type="radio" name="types" class="rbt " id="type2">
                        <label class="js-type2 label-rbt" for="type2">
                            <span class="rbt-cnt uppercase">Конкретный отель</span>
                        </label>
                    </div>
                </div>
                <div class=" js-types-search-tours-blocks">
                    <div class="tour-selection-wrap-in tour-selection-wrap-flex">
                        <div class="tour-selection-field tour-selection-field--250 ">
                            <div class="bth__inp-block">
                                <span class="bth__inp-lbl ">Страна поездки</span>
                                <div class="bth__inp tour-selection__country  js-show-formDirections">
                                </div>
                                <div class="formDirections w100p" style="display: none;">
                                    <div class="formDirections__wrap w100p">
                                        <div class="formDirections__top  formDirections__top-line">
                                            <i class="formDirections__bottom-close"></i>
                                            <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                        </div>
                                        <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                            <div class="SumoSelect open" tabindex="0"><select id="sumo-direction" class="SumoUnder" tabindex="-1">


                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>

                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>

                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>

                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>


                                                </select><p class="CaptionCont SelectBox search" title=" Россия"><span> Россия</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li><li class="opt" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li><li class="opt" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li><li class="opt" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li></ul><p class="no-match"></p></div></div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections">

                                <span class="bth__inp-lbl ">Города</span>
                                <span class="bth__inp  uppercase "></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">

                                        <div class="SumoSelect open" tabindex="0"><select id="sumo-direction-city" class="SumoUnder" tabindex="-1">


                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>
                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>
                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>
                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>


                                            </select><p class="CaptionCont SelectBox search" title=" Анапа"><span> Анапа</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li><li class="opt" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li><li class="opt" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li><li class="opt" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li></ul><p class="no-match"></p></div></div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--200">
                            <div class="bth__inp-block js-show-formDirections ">
                                <span class="bth__inp-lbl ">Город вылета</span>
                                <span class="bth__inp uppercase"></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                        <div class="SumoSelect open" tabindex="0"><select id="sumo-department" class="SumoUnder" tabindex="-1">

                                                <option value="Москва">Москва</option>
                                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Москва">Москва</option>
                                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>

                                            </select><p class="CaptionCont SelectBox search" title=" Москва"><span> Москва</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li></ul><p class="no-match"></p></div></div>
                                    </div>

                                </div>
                            </div>


                        </div>


                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                <span class="bth__inp-lbl ">Параметры отеля</span>
                                <span class="bth__inp"></span>
                            </div>

                            <div class="formDirections   formDirections--big-mobile formDirections--char" style="display: none;">

                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey">Параметры отеля</div>
                                </div>


                                <div class="formDirections__wrap formDirections__row">

                                    <div class="formDirections__wrap-flex">
                                        <div class="formDirections__top  formDirections__top-line">


                                            <div class="formDirections__top-tab active js-act-stars">
                                                Категория
                                            </div>

                                            <div class="formDirections__top-tab js-act-rating">

                                                Рейтинг
                                            </div>
                                            <div class="formDirections__top-tab js-act-hotels">

                                                Питание
                                            </div>
                                            <div class="formDirections__top-tab js-act-country">

                                                Расположение
                                            </div>
                                            <div class="formDirections__top-tab js-act-kid">

                                                Для детей
                                            </div>
                                            <div class="formDirections__top-tab js-act-other">

                                                Прочее
                                            </div>

                                        </div>
                                        <div class="formDirections__wrap-flex-right">
                                            <div class="formDirections__bottom js-search-country" style="display: none">

                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="catalog-positionckd" checked="">
                                                            <label class="label-cbx" for="catalog-positionckd">
                                                                <span class="cbx-cnt">Любой тип</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Пляжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="catalog-position1">
                                                            <label class="label-cbx" for="catalog-position1">
                                                                <span class="cbx-cnt">1-я линия от моря</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16   ">
                                                            <input type="checkbox" class="cbx" id="catalog-position2">
                                                            <label class="label-cbx" for="catalog-position2">
                                                                <span class="cbx-cnt">2-я линия от моря </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position3">
                                                            <label class="label-cbx" for="catalog-position3">
                                                                <span class="cbx-cnt"> 3-я линия от моря</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position4">
                                                            <label class="label-cbx" for="catalog-position4">
                                                                <span class="cbx-cnt">Через дорогу </span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Горнолыжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position5">
                                                            <label class="label-cbx" for="catalog-position5">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position6">
                                                            <label class="label-cbx" for="catalog-position6">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position7">
                                                            <label class="label-cbx" for="catalog-position7">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Загородный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="catalog-position8">
                                                            <label class="label-cbx" for="catalog-position8">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position9">
                                                            <label class="label-cbx" for="catalog-position9">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position10">
                                                            <label class="label-cbx" for="catalog-position10">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Городской</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="catalog-position11">
                                                            <label class="label-cbx" for="catalog-position11">
                                                                <span class="cbx-cnt">Близко к центру</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position12">
                                                            <label class="label-cbx" for="catalog-position12">
                                                                <span class="cbx-cnt">Окраина </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="catalog-position13">
                                                            <label class="label-cbx" for="catalog-position13">
                                                                <span class="cbx-cnt"> Центр</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="formDirections__bottom js-search-hotels" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333eat2-typeckd" checked="">
                                                            <label class="label-cbx" for="333eat2-typeckd">
                                                                <span class="cbx-cnt">Любое питание</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333eat2-type1">
                                                            <label class="label-cbx" for="333eat2-type1">
                                                                <span class="cbx-cnt">AI Все включено</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333eat2-type2">
                                                            <label class="label-cbx" for="333eat2-type2">
                                                                <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333eat2-type3">
                                                            <label class="label-cbx" for="333eat2-type3">
                                                                <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block     cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="333eat2-type4">
                                                            <label class="label-cbx" for="333eat2-type4">
                                                                <span class="cbx-cnt"> BB Завтрак</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333eat2-type5">
                                                            <label class="label-cbx" for="333eat2-type5">
                                                                <span class="cbx-cnt">RO Без питания</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-stars">

                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333stars-ckd" checked="">
                                                            <label class="label-cbx " for="333stars-ckd">
                                                                <span class="cbx-cnt">Любая категория</span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333stars-5">
                                                            <label class="label-cbx " for="333stars-5">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="333stars-4">
                                                            <label class="label-cbx " for="333stars-4">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-3">
                                                            <label class="label-cbx " for="333stars-3">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-2">
                                                            <label class="label-cbx " for="333stars-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-1">
                                                            <label class="label-cbx " for="333stars-1">
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-hv1">
                                                            <label class="label-cbx" for="333stars-hv1">
                                                                <span class="cbx-cnt">HV1</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333stars-hv2">
                                                            <label class="label-cbx" for="333stars-hv2">
                                                                <span class="cbx-cnt">HV2</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="no-stars">
                                                            <label class="label-cbx" for="no-stars">
                                                                <span class="cbx-cnt">Без категории</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formDirections__bottom-blocks js-search-rating" style="display: none">


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt " id="333ratingckd" checked="">
                                                        <label class="label-rbt" for="333ratingckd">
                                                            <span class="rbt-cnt  uppercase">Любой рейтинг</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt " id="333rating1">
                                                        <label class="label-rbt" for="333rating1">
                                                            <span class="rbt-cnt  uppercase">Не важно</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt " id="333rating3">
                                                        <label class="label-rbt" for="333rating3">
                                                            <span class="rbt-cnt  uppercase"> Не ниже 4,75</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt " id="333rating4">
                                                        <label class="label-rbt" for="333rating4">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,5</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt " id="333rating5">
                                                        <label class="label-rbt" for="333rating5">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt " id="333rating6">
                                                        <label class="label-rbt" for="333rating6">
                                                            <span class="rbt-cnt  uppercase">Не ниже 4,0</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt " id="333rating7">
                                                        <label class="label-rbt" for="333rating7">
                                                            <span class="rbt-cnt  uppercase">Не ниже 3,75</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt " id="333rating8">
                                                        <label class="label-rbt" for="333rating8">
                                                            <span class="rbt-cnt  uppercase">     Не ниже 3,5</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="333rating" class="rbt " id="333rating9">
                                                        <label class="label-rbt" for="333rating9">
                                                            <span class="rbt-cnt  uppercase">       Не ниже 3,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="formDirections__bottom js-search-kid" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333kid1">
                                                            <label class="label-cbx" for="333kid1">
                                                                <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333kid2">
                                                            <label class="label-cbx" for="333kid2">
                                                                <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333kid3">
                                                            <label class="label-cbx" for="333kid3">
                                                                <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333kid4">
                                                            <label class="label-cbx" for="333kid4">
                                                                <span class="cbx-cnt">AНИМАЦИЯ</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-other" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="333other1">
                                                            <label class="label-cbx" for="333other1">
                                                                <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="333other2">
                                                            <label class="label-cbx" for="333other2">
                                                                <span class="cbx-cnt">  ТУСОВКИ РЯДОМ С ОТЕЛЕМ </span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="formDirections__btn-orange js-close-formDirections">Применить</div>
                            </div>


                        </div>
                        <span class=" tour-selection-plus  hide-1023 js-add-field">
                            <i class="fas fa-plus"></i>
                        </span>
                    </div>
                    <div class="tour-selection-wrap-in tour-selection-wrap-flex js-show-added-field" style="display: none">
                        <div class="tour-selection-field tour-selection-field--250 ">
                            <div class="bth__inp-block">
                                <span class="bth__inp-lbl ">Страна поездки</span>
                                <div class="bth__inp tour-selection__country  js-show-formDirections">
                                </div>


                                <div class="formDirections w100p" style="display: none;">
                                    <div class="formDirections__wrap w100p">

                                        <div class="formDirections__top  formDirections__top-line">

                                            <i class="formDirections__bottom-close"></i>
                                            <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                        </div>

                                        <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">

                                            <div class="SumoSelect open" tabindex="0"><select id="sumo-direction" class="SumoUnder" tabindex="-1">


                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>

                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>

                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>

                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>


                                                </select><p class="CaptionCont SelectBox search" title=" Россия"><span> Россия</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li><li class="opt" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li><li class="opt" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li><li class="opt" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li></ul><p class="no-match"></p></div></div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections">

                                <span class="bth__inp-lbl ">Города</span>
                                <span class="bth__inp  uppercase "></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">

                                        <div class="SumoSelect open" tabindex="0"><select id="sumo-direction-city" class="SumoUnder" tabindex="-1">


                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>
                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>
                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>
                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>


                                            </select><p class="CaptionCont SelectBox search" title=" Анапа"><span> Анапа</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li><li class="opt" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li><li class="opt" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li><li class="opt" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li></ul><p class="no-match"></p></div></div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--200">
                            <div class="bth__inp-block js-show-formDirections ">
                                <span class="bth__inp-lbl ">Город вылета</span>
                                <span class="bth__inp uppercase"></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                        <div class="SumoSelect open" tabindex="0"><select id="sumo-department" class="SumoUnder" tabindex="-1">

                                                <option value="Москва">Москва</option>
                                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Москва">Москва</option>
                                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>

                                            </select><p class="CaptionCont SelectBox search" title=" Москва"><span> Москва</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li></ul><p class="no-match"></p></div></div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                <span class="bth__inp-lbl ">Параметры отеля</span>
                                <span class="bth__inp"></span>
                            </div>

                            <div class="formDirections   formDirections--big-mobile formDirections--char" style="display: none;">

                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey">Параметры отеля</div>
                                </div>


                                <div class="formDirections__wrap formDirections__row">

                                    <div class="formDirections__wrap-flex">
                                        <div class="formDirections__top  formDirections__top-line">


                                            <div class="formDirections__top-tab active js-act-stars">
                                                Категория
                                            </div>

                                            <div class="formDirections__top-tab js-act-rating">

                                                Рейтинг
                                            </div>
                                            <div class="formDirections__top-tab js-act-hotels">

                                                Питание
                                            </div>
                                            <div class="formDirections__top-tab js-act-country">

                                                Расположение
                                            </div>
                                            <div class="formDirections__top-tab js-act-kid">

                                                Для детей
                                            </div>
                                            <div class="formDirections__top-tab js-act-other">

                                                Прочее
                                            </div>

                                        </div>
                                        <div class="formDirections__wrap-flex-right">
                                            <div class="formDirections__bottom js-search-country" style="display: none">

                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-positionckd" checked="">
                                                            <label class="label-cbx" for="added-catalog-positionckd">
                                                                <span class="cbx-cnt">Любой тип</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Пляжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position1">
                                                            <label class="label-cbx" for="added-catalog-position1">
                                                                <span class="cbx-cnt">1-я линия от моря</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16   ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position2">
                                                            <label class="label-cbx" for="added-catalog-position2">
                                                                <span class="cbx-cnt">2-я линия от моря </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position3">
                                                            <label class="label-cbx" for="added-catalog-position3">
                                                                <span class="cbx-cnt"> 3-я линия от моря</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position4">
                                                            <label class="label-cbx" for="added-catalog-position4">
                                                                <span class="cbx-cnt">Через дорогу </span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Горнолыжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position5">
                                                            <label class="label-cbx" for="added-catalog-position5">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position6">
                                                            <label class="label-cbx" for="added-catalog-position6">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position7">
                                                            <label class="label-cbx" for="added-catalog-position7">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Загородный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position8">
                                                            <label class="label-cbx" for="added-catalog-position8">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position9">
                                                            <label class="label-cbx" for="added-catalog-position9">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position10">
                                                            <label class="label-cbx" for="added-catalog-position10">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Городской</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position11">
                                                            <label class="label-cbx" for="added-catalog-position11">
                                                                <span class="cbx-cnt">Близко к центру</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position12">
                                                            <label class="label-cbx" for="added-catalog-position12">
                                                                <span class="cbx-cnt">Окраина </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position13">
                                                            <label class="label-cbx" for="added-catalog-position13">
                                                                <span class="cbx-cnt"> Центр</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="formDirections__bottom js-search-hotels" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-typeckd" checked="">
                                                            <label class="label-cbx" for="added-food-typeckd">
                                                                <span class="cbx-cnt">Любое питание</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-type1">
                                                            <label class="label-cbx" for="added-food-type1">
                                                                <span class="cbx-cnt">AI Все включено</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-food-type2">
                                                            <label class="label-cbx" for="added-food-type2">
                                                                <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-type3">
                                                            <label class="label-cbx" for="added-food-type3">
                                                                <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block     cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="added-food-type4">
                                                            <label class="label-cbx" for="added-food-type4">
                                                                <span class="cbx-cnt"> BB Завтрак</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-type5">
                                                            <label class="label-cbx" for="added-food-type5">
                                                                <span class="cbx-cnt">RO Без питания</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-stars">

                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-stars-ckd" checked="">
                                                            <label class="label-cbx " for="added-stars-ckd">
                                                                <span class="cbx-cnt">Любая категория</span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-stars-5">
                                                            <label class="label-cbx " for="added-stars-5">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="added-stars-4">
                                                            <label class="label-cbx " for="added-stars-4">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-3">
                                                            <label class="label-cbx " for="added-stars-3">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-2">
                                                            <label class="label-cbx " for="added-stars-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-1">
                                                            <label class="label-cbx " for="added-stars-1">
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-hv1">
                                                            <label class="label-cbx" for="added-stars-hv1">
                                                                <span class="cbx-cnt">HV1</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-hv2">
                                                            <label class="label-cbx" for="added-stars-hv2">
                                                                <span class="cbx-cnt">HV2</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="no-stars">
                                                            <label class="label-cbx" for="no-stars">
                                                                <span class="cbx-cnt">Без категории</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formDirections__bottom-blocks js-search-rating" style="display: none">


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333ratingckd" checked="">
                                                        <label class="label-rbt" for="added-333ratingckd">
                                                            <span class="rbt-cnt  uppercase">Любой рейтинг</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating1">
                                                        <label class="label-rbt" for="added-333rating1">
                                                            <span class="rbt-cnt  uppercase">Не важно</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating3">
                                                        <label class="label-rbt" for="added-333rating3">
                                                            <span class="rbt-cnt  uppercase"> Не ниже 4,75</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating4">
                                                        <label class="label-rbt" for="added-333rating4">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,5</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating5">
                                                        <label class="label-rbt" for="added-333rating5">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating6">
                                                        <label class="label-rbt" for="added-333rating6">
                                                            <span class="rbt-cnt  uppercase">Не ниже 4,0</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating7">
                                                        <label class="label-rbt" for="added-333rating7">
                                                            <span class="rbt-cnt  uppercase">Не ниже 3,75</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating8">
                                                        <label class="label-rbt" for="added-333rating8">
                                                            <span class="rbt-cnt  uppercase">     Не ниже 3,5</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating9">
                                                        <label class="label-rbt" for="added-333rating9">
                                                            <span class="rbt-cnt  uppercase">       Не ниже 3,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formDirections__bottom js-search-kid" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-chl1">
                                                            <label class="label-cbx" for="added-chl1">
                                                                <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-chl2">
                                                            <label class="label-cbx" for="added-chl2">
                                                                <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-chl3">
                                                            <label class="label-cbx" for="added-chl3">
                                                                <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-chl4">
                                                            <label class="label-cbx" for="added-chl4">
                                                                <span class="cbx-cnt">AНИМАЦИЯ</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-other" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-other1">
                                                            <label class="label-cbx" for="added-other1">
                                                                <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-other2">
                                                            <label class="label-cbx" for="added-other2">
                                                                <span class="cbx-cnt">  ТУСОВКИ РЯДОМ С ОТЕЛЕМ </span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="formDirections__btn-orange js-close-formDirections">Применить</div>
                            </div>


                        </div>
                        <span class=" tour-selection-plus js-del-field"><i class="fas fa-minus"></i></span>
                    </div>
                    <div class="tour-selection-wrap-in tour-selection-wrap-flex js-show-added-field" style="display: none">
                        <div class="tour-selection-field tour-selection-field--250 ">
                            <div class="bth__inp-block">
                                <span class="bth__inp-lbl ">Страна поездки</span>
                                <div class="bth__inp tour-selection__country  js-show-formDirections">
                                </div>


                                <div class="formDirections w100p" style="display: none;">
                                    <div class="formDirections__wrap w100p">

                                        <div class="formDirections__top  formDirections__top-line">

                                            <i class="formDirections__bottom-close"></i>
                                            <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                        </div>

                                        <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">

                                            <div class="SumoSelect open" tabindex="0"><select id="sumo-direction" class="SumoUnder" tabindex="-1">


                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>

                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>

                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>

                                                    <option value="Россия">Россия</option>
                                                    <option value="Украина">Украина</option>
                                                    <option value="Беларуссия">Беларуссия</option>
                                                    <option value="Казахстан">Казахстан</option>
                                                    <option value="Доминикана">Доминикана</option>
                                                    <option value="Турция">Турция</option>
                                                    <option value="Египет">Египет</option>


                                                </select><p class="CaptionCont SelectBox search" title=" Россия"><span> Россия</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li><li class="opt" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li><li class="opt" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li><li class="opt" data-val="undefined"><label>Россия</label></li><li class="opt" data-val="undefined"><label>Украина</label></li><li class="opt" data-val="undefined"><label>Беларуссия</label></li><li class="opt" data-val="undefined"><label>Казахстан</label></li><li class="opt" data-val="undefined"><label>Доминикана</label></li><li class="opt" data-val="undefined"><label>Турция</label></li><li class="opt" data-val="undefined"><label>Египет</label></li></ul><p class="no-match"></p></div></div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections">

                                <span class="bth__inp-lbl ">Города</span>
                                <span class="bth__inp  uppercase "></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">

                                        <div class="SumoSelect open" tabindex="0"><select id="sumo-direction-city" class="SumoUnder" tabindex="-1">


                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>
                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>
                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>
                                                <option value="Анапа">Анапа</option>
                                                <option value="Билек">Билек</option>
                                                <option value="Сиде">Сиде</option>
                                                <option value="Сочи">Сочи</option>
                                                <option value="Севастополь">Севастополь</option>
                                                <option value="Симферополь">Симферополь</option>


                                            </select><p class="CaptionCont SelectBox search" title=" Анапа"><span> Анапа</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li><li class="opt" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li><li class="opt" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li><li class="opt" data-val="undefined"><label>Анапа</label></li><li class="opt" data-val="undefined"><label>Билек</label></li><li class="opt" data-val="undefined"><label>Сиде</label></li><li class="opt" data-val="undefined"><label>Сочи</label></li><li class="opt" data-val="undefined"><label>Севастополь</label></li><li class="opt" data-val="undefined"><label>Симферополь</label></li></ul><p class="no-match"></p></div></div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--200">
                            <div class="bth__inp-block js-show-formDirections ">
                                <span class="bth__inp-lbl ">Город вылета</span>
                                <span class="bth__inp uppercase"></span>
                            </div>


                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                        <div class="SumoSelect open" tabindex="0"><select id="sumo-department" class="SumoUnder" tabindex="-1">

                                                <option value="Москва">Москва</option>
                                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Москва">Москва</option>
                                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>

                                            </select><p class="CaptionCont SelectBox search" title=" Москва"><span> Москва</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li></ul><p class="no-match"></p></div></div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="tour-selection-field tour-selection-field--180">
                            <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                                <span class="bth__inp-lbl ">Параметры отеля</span>
                                <span class="bth__inp"></span>
                            </div>

                            <div class="formDirections   formDirections--big-mobile formDirections--char" style="display: none;">

                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey">Параметры отеля</div>
                                </div>


                                <div class="formDirections__wrap formDirections__row">

                                    <div class="formDirections__wrap-flex">
                                        <div class="formDirections__top  formDirections__top-line">


                                            <div class="formDirections__top-tab active js-act-stars">
                                                Категория
                                            </div>

                                            <div class="formDirections__top-tab js-act-rating">

                                                Рейтинг
                                            </div>
                                            <div class="formDirections__top-tab js-act-hotels">

                                                Питание
                                            </div>
                                            <div class="formDirections__top-tab js-act-country">

                                                Расположение
                                            </div>
                                            <div class="formDirections__top-tab js-act-kid">

                                                Для детей
                                            </div>
                                            <div class="formDirections__top-tab js-act-other">

                                                Прочее
                                            </div>

                                        </div>
                                        <div class="formDirections__wrap-flex-right">
                                            <div class="formDirections__bottom js-search-country" style="display: none">

                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-positionckd" checked="">
                                                            <label class="label-cbx" for="added-catalog-positionckd">
                                                                <span class="cbx-cnt">Любой тип</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Пляжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position1">
                                                            <label class="label-cbx" for="added-catalog-position1">
                                                                <span class="cbx-cnt">1-я линия от моря</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16   ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position2">
                                                            <label class="label-cbx" for="added-catalog-position2">
                                                                <span class="cbx-cnt">2-я линия от моря </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position3">
                                                            <label class="label-cbx" for="added-catalog-position3">
                                                                <span class="cbx-cnt"> 3-я линия от моря</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position4">
                                                            <label class="label-cbx" for="added-catalog-position4">
                                                                <span class="cbx-cnt">Через дорогу </span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Горнолыжный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position5">
                                                            <label class="label-cbx" for="added-catalog-position5">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position6">
                                                            <label class="label-cbx" for="added-catalog-position6">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position7">
                                                            <label class="label-cbx" for="added-catalog-position7">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Загородный</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position8">
                                                            <label class="label-cbx" for="added-catalog-position8">
                                                                <span class="cbx-cnt">Близко</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position9">
                                                            <label class="label-cbx" for="added-catalog-position9">
                                                                <span class="cbx-cnt">Далеко </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position10">
                                                            <label class="label-cbx" for="added-catalog-position10">
                                                                <span class="cbx-cnt"> Рядом</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="formDirections__cbx-ttl">Городской</div>
                                                    <div class=" formDirections__left-30 ">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position11">
                                                            <label class="label-cbx" for="added-catalog-position11">
                                                                <span class="cbx-cnt">Близко к центру</span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position12">
                                                            <label class="label-cbx" for="added-catalog-position12">
                                                                <span class="cbx-cnt">Окраина </span>
                                                            </label>

                                                        </div>
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-catalog-position13">
                                                            <label class="label-cbx" for="added-catalog-position13">
                                                                <span class="cbx-cnt"> Центр</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="formDirections__bottom js-search-hotels" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-typeckd" checked="">
                                                            <label class="label-cbx" for="added-food-typeckd">
                                                                <span class="cbx-cnt">Любое питание</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-type1">
                                                            <label class="label-cbx" for="added-food-type1">
                                                                <span class="cbx-cnt">AI Все включено</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-food-type2">
                                                            <label class="label-cbx" for="added-food-type2">
                                                                <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-type3">
                                                            <label class="label-cbx" for="added-food-type3">
                                                                <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block     cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="added-food-type4">
                                                            <label class="label-cbx" for="added-food-type4">
                                                                <span class="cbx-cnt"> BB Завтрак</span>
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-food-type5">
                                                            <label class="label-cbx" for="added-food-type5">
                                                                <span class="cbx-cnt">RO Без питания</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-stars">

                                                <div class="formDirections__bottom-blocks">
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-stars-ckd" checked="">
                                                            <label class="label-cbx " for="added-stars-ckd">
                                                                <span class="cbx-cnt">Любая категория</span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block  cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-stars-5">
                                                            <label class="label-cbx " for="added-stars-5">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="added-stars-4">
                                                            <label class="label-cbx " for="added-stars-4">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-3">
                                                            <label class="label-cbx " for="added-stars-3">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-2">
                                                            <label class="label-cbx " for="added-stars-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-1">
                                                            <label class="label-cbx " for="added-stars-1">
                                                                <i class="fa fa-star"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-hv1">
                                                            <label class="label-cbx" for="added-stars-hv1">
                                                                <span class="cbx-cnt">HV1</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block   cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-stars-hv2">
                                                            <label class="label-cbx" for="added-stars-hv2">
                                                                <span class="cbx-cnt">HV2</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-dropdown-stars__item">
                                                        <div class="cbx-block    cbx-block--16">
                                                            <input type="checkbox" class="cbx" id="no-stars">
                                                            <label class="label-cbx" for="no-stars">
                                                                <span class="cbx-cnt">Без категории</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formDirections__bottom-blocks js-search-rating" style="display: none">


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333ratingckd" checked="">
                                                        <label class="label-rbt" for="added-333ratingckd">
                                                            <span class="rbt-cnt  uppercase">Любой рейтинг</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating1">
                                                        <label class="label-rbt" for="added-333rating1">
                                                            <span class="rbt-cnt  uppercase">Не важно</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating3">
                                                        <label class="label-rbt" for="added-333rating3">
                                                            <span class="rbt-cnt  uppercase"> Не ниже 4,75</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating4">
                                                        <label class="label-rbt" for="added-333rating4">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,5</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating5">
                                                        <label class="label-rbt" for="added-333rating5">
                                                            <span class="rbt-cnt  uppercase">  Не ниже 4,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating6">
                                                        <label class="label-rbt" for="added-333rating6">
                                                            <span class="rbt-cnt  uppercase">Не ниже 4,0</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating7">
                                                        <label class="label-rbt" for="added-333rating7">
                                                            <span class="rbt-cnt  uppercase">Не ниже 3,75</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating8">
                                                        <label class="label-rbt" for="added-333rating8">
                                                            <span class="rbt-cnt  uppercase">     Не ниже 3,5</span>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-dropdown-stars__item ">
                                                    <div class="rbt-block  ">
                                                        <input type="radio" name="added-333rating" class="rbt " id="added-333rating9">
                                                        <label class="label-rbt" for="added-333rating9">
                                                            <span class="rbt-cnt  uppercase">       Не ниже 3,25</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formDirections__bottom js-search-kid" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-chl1">
                                                            <label class="label-cbx" for="added-chl1">
                                                                <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-chl2">
                                                            <label class="label-cbx" for="added-chl2">
                                                                <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-chl3">
                                                            <label class="label-cbx" for="added-chl3">
                                                                <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-chl4">
                                                            <label class="label-cbx" for="added-chl4">
                                                                <span class="cbx-cnt">AНИМАЦИЯ</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="formDirections__bottom js-search-other" style="display: none">

                                                <div class="formDirections__bottom-blocks">

                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block   cbx-block--16  ">
                                                            <input type="checkbox" class="cbx" id="added-other1">
                                                            <label class="label-cbx" for="added-other1">
                                                                <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                    <div class="form-dropdown-stars__item ">
                                                        <div class="cbx-block    cbx-block--16 ">
                                                            <input type="checkbox" class="cbx" id="added-other2">
                                                            <label class="label-cbx" for="added-other2">
                                                                <span class="cbx-cnt">  ТУСОВКИ РЯДОМ С ОТЕЛЕМ </span>
                                                            </label>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="formDirections__btn-orange js-close-formDirections">Применить</div>
                            </div>


                        </div>
                        <span class=" tour-selection-plus js-del-field"><i class="fas fa-minus"></i></span>
                    </div>
                </div>


                <div class=" js-types-search-hotel-blocks" style="display: none">
                    <div class="tour-selection-wrap-in tour-selection-wrap-flex ">
                        <div class="tour-selection-field tour-selection-field--250">
                            <div class="bth__inp-block js-show-formDirections">
                                <span class="bth__inp-lbl ">Город вылета</span>
                                <span class="bth__inp">
                                </span>
                            </div>

                            <div class="formDirections w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">

                                    <div class="formDirections__top  formDirections__top-line">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey ">Город вылета</div>
                                    </div>

                                    <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                        <div class="SumoSelect open" tabindex="0"><select id="sumo-department" class="SumoUnder" tabindex="-1">

                                                <option value="Москва">Москва</option>
                                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Москва">Москва</option>
                                                <option value="Санкт-Петербург">Санкт-Петербург</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>
                                                <option value="Абакан">Абакан</option>
                                                <option value="Агзу">Агзу</option>

                                            </select><p class="CaptionCont SelectBox search" title=" Москва"><span> Москва</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li><li class="opt" data-val="undefined"><label>Абакан</label></li><li class="opt" data-val="undefined"><label>Агзу</label></li></ul><p class="no-match"></p></div></div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="tour-selection-field tour-selection-field--250">
                            <div class="bth__inp-block js-show-formDirections">

                                <span class="bth__inp-lbl ">Питание</span>
                                <span class="bth__inp">
                                </span>
                            </div>
                            <div class="formDirections" style="display: none;">

                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey">
                                        Питание
                                    </div>
                                </div>


                                <div class="formDirections__wrap">

                                    <div class="formDirections__bottom ">

                                        <div class="formDirections__bottom-blocks">

                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="8eat2-type1">
                                                    <label class="label-cbx" for="8eat2-type1">
                                                        <span class="cbx-cnt">AI Все включено</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16">
                                                    <input type="checkbox" class="cbx" id="8eat2-type2">
                                                    <label class="label-cbx" for="8eat2-type2">
                                                        <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="8eat2-type3">
                                                    <label class="label-cbx" for="8eat2-type3">
                                                        <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="8eat2-type4">
                                                    <label class="label-cbx" for="8eat2-type4">
                                                        <span class="cbx-cnt"> BB Завтрак</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="8eat2-type5">
                                                    <label class="label-cbx" for="8eat2-type5">
                                                        <span class="cbx-cnt">RO Без питания</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="formDirections__static-btn js-close-formDirections">Применить
                                            </div>


                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tour-selection-wrap-in tour-selection-wrap-flex ">
                        <div class="tour-selection-field tour-selection-field--740">
                            <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">

                                <span class="bth__inp-lbl ">Добавить отель</span>
                                <span class="bth__inp"></span>
                            </div>

                            <div class="formDirections formDirections--big-mobile w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">
                                    <div class="formDirections__top formDirections__top--white">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey">
                                            Добавить отель
                                        </div>
                                    </div>


                                    <div class="formDirections__bottom">

                                        <div class="formDirections__search">
                                            <input class="bth__inp" type="text" placeholder="Поиск отеля">
                                        </div>
                                        <div class="formDirections__wrap  formDirections__bottom-blocks-cut">

                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Mriya Resort &amp; Spa (Мрия Резорт энд Спа) </span>5*
                                                </div>
                                                <span class="formDirections__count">Агитос Антониос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa</span> 5*
                                                </div>
                                                <span class="formDirections__count">Кампос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya </span>5*
                                                </div>
                                                <span class="formDirections__count">Каравостаси</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>

                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya</span> 5*

                                                </div>
                                                <span class="formDirections__count">Никитари</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Mriya Resort &amp; Spa (Мрия Резорт энд Спа) </span>5*
                                                </div>
                                                <span class="formDirections__count">Агитос Антониос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa</span> 5*
                                                </div>
                                                <span class="formDirections__count">Кампос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya </span>5*
                                                </div>
                                                <span class="formDirections__count">Каравостаси</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>

                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya</span> 5*

                                                </div>
                                                <span class="formDirections__count">Никитари</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <span class="tour-selection-plus hide-1023 js-add-hotel"><i class="fas fa-plus"></i></span>
                    </div>

                    <div class="tour-selection-wrap-in tour-selection-wrap-flex js-show-add-hotel " style="display: none">
                        <div class="tour-selection-field tour-selection-field--740">
                            <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">

                                <span class="bth__inp-lbl ">Добавить отель</span>
                                <span class="bth__inp"></span>
                            </div>
                            <div class="formDirections formDirections--big-mobile w100p" style="display: none;">
                                <div class="formDirections__wrap w100p">
                                    <div class="formDirections__top formDirections__top--white">

                                        <i class="formDirections__bottom-close"></i>
                                        <div class="formDirections__top-tab super-grey">
                                            Добавить отель
                                        </div>
                                    </div>


                                    <div class="formDirections__bottom">

                                        <div class="formDirections__search">
                                            <input class="bth__inp" type="text" placeholder="Поиск отеля">
                                        </div>
                                        <div class="formDirections__wrap  formDirections__bottom-blocks-cut">

                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Mriya Resort &amp; Spa (Мрия Резорт энд Спа) </span>5*
                                                </div>
                                                <span class="formDirections__count">Агитос Антониос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa</span> 5*
                                                </div>
                                                <span class="formDirections__count">Кампос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya </span>5*
                                                </div>
                                                <span class="formDirections__count">Каравостаси</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>

                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya</span> 5*

                                                </div>
                                                <span class="formDirections__count">Никитари</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Mriya Resort &amp; Spa (Мрия Резорт энд Спа) </span>5*
                                                </div>
                                                <span class="formDirections__count">Агитос Антониос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa</span> 5*
                                                </div>
                                                <span class="formDirections__count">Кампос</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>
                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya </span>5*
                                                </div>
                                                <span class="formDirections__count">Каравостаси</span>
                                            </div>
                                            <div class="formDirections__bottom-item">
                                                <div class="formDirections__city">
                                                    <div class=" lsfw-flag lsfw-flag--30w lsfw-flag-1">
                                                        <div class="hint">Россия</div>
                                                    </div>

                                                    <span class="formDirections__cut"> Resort &amp; Spa Mriya</span> 5*

                                                </div>
                                                <span class="formDirections__count">Никитари</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <span class=" tour-selection-plus  js-del-hotel"><i class="fas fa-minus"></i></span>
                    </div>


                </div>


                <div class="tour-selection-wrap-in">
                    <div class="bth__ta-resizable-wrap">
                        <div class="bth__ta-resizable" contenteditable=""></div>

                        <span class="bth__ta-resizable-hint">Дополнительные пожелания</span>

                    </div>
                </div>
                <div class="tour-selection-wrap-in">
                    <div class=" bth__btn  bth__btn--fill bth__loader" id="js_to_step2">
                        Сформировать заявку
                        <div class=" bth__loader-spin">
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div class="panel" id="formPanel" style="display: none">
            <div class="bth__cnt uppercase">Пожалуйста, укажите параметры вашей поездки</div>
            <div class="tour-selection-wrap">
                <div class="tour-selection-wrap-in">
                    <div class="bth__inp-block long">
                        <textarea type="text" class="bth__inp  bold js-stop-label" id="parametrs" name="text"></textarea>
                        <label for="parametrs" class="bth__inp-lbl">
                            <span class="block  mb5">- укажите страну, курорт или отель</span>
                            <span class="block  mb5">- количество человек</span>
                            <span class="block  mb5">- ваши предпочтения по отелю</span>
                            <span class="block mb5">- ваш бюджет</span>
                            <span class="block">- другие пожелания</span>
                        </label>
                    </div>
                </div>
                <div class="tour-selection-wrap-in tour-selection-wrap-flex">

                    <div class="tour-selection-field tour-selection-field--30p">
                        <div class="js-add-error bth__inp-block  ">
                            <input type="text" class="bth__inp js-label" id="name1">
                            <label for="name1" class="bth__inp-lbl">Ваше имя</label>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-selection-field tour-selection-field--30p">

                        <div class="js-add-error bth__inp-block ">
                            <input type="text" class="bth__inp js-label" id="phone1" placeholder="">
                            <label for="phone1" class="bth__inp-lbl">Телефон</label>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-selection-field tour-selection-field--30p">

                        <div class="js-add-error bth__inp-block  ">
                            <input type="text" class="bth__inp js-label " id="mail3">
                            <label for="mail3" class="bth__inp-lbl">Email (не обязательно)</label>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Введите правильный email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-selection-wrap-in">
                    <div class=" bth__btn  bth__btn--fill bth__loader" id="send_custom_form">
                        Отправить заявку*
                        <div class=" bth__loader-spin">
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <div class="tour-selection-wrap__abs-txt  bth__cnt bth__cnt--sm">
                        *Нажимая на кнопку "отправить", я принимаю
                        <a href="#p-agreement-pp" class="p-agreement-pp agree">
                            Соглашение об обработке личных данных</a> и
                        <a href="#p-agreement-pp" class="p-agreement-pp site-role">Правила сайта</a>
                    </div>
                </div>
            </div>
            <div id="formpanel_success_message" class="bth__cnt fz18 bold" style="display:none;">
                Спасибо, Ваша заявка отправлена и будет обработана в ближайшее время.
            </div>
        </div>
        <div class="panel" id="step2Panel" style="display: none">

            <div class="tour-selection-wrap">

                <div class="tour-selection-wrap-in mt0 tour-selection-wrap-flex">

                    <div class="tour-selection-field tour-selection-field--270">
                        <div class="js-add-error bth__inp-block  ">
                            <input type="text" value="Саша" class="bth__inp js-label" id="name3">
                            <label for="name3" class="bth__inp-lbl active">Ваше имя</label>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tour-selection-field tour-selection-field--270">

                        <div class="js-add-error bth__inp-block ">
                            <input value="+79532453351" type="text" class="bth__inp js-label" id="phone3" placeholder="">
                            <label for="phone3" class="bth__inp-lbl active">Телефон</label>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tour-selection-field tour-selection-field--270">

                        <div class="bth__inp-block  ">
                            <input type="text" value="smerekovska1976@gmail.com" class="bth__inp js-label " id="mail2">
                            <label for="mail2" class="bth__inp-lbl active">Email (не обязательно)</label>

                        </div>
                    </div>

                </div>
                <div class="bth__cnt uppercase mt20 ">Уточните удобные координаты для выбора турагенства</div>
                <div class="tour-selection-wrap-in   tour-selection-wrap-flex ">
                    <div class="tour-selection-field tour-selection-field--270 ">
                        <div class="bth__inp-block js-show-formDirections js-add-error">
                            <input type="hidden" name="choose_city" id="choose_city" value="city">
                            <span class="bth__inp-lbl active">Ваш город</span>
                            <span class="bth__inp">
                                <b class="uppercase">Санкт-Петербург</b>
                            </span>
                            <div class="hint-block hint-block--abs">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt">Поле не должно быть пустым</p>
                                </div>
                            </div>
                        </div>
                        <div class="formDirections w100p" style="display: none;">
                            <div class="formDirections__wrap w100p">

                                <div class="formDirections__top  formDirections__top-line">

                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey ">Города</div>
                                </div>

                                <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                    <div class="SumoSelect open" tabindex="0"><select id="sumo-list-city" class="SumoUnder" tabindex="-1">
                                            <option value="Москва">Москва</option>
                                            <option value="Санкт-Петербург">Санкт-Петербург</option>
                                            <option value="Москва">Москва</option>
                                            <option value="Санкт-Петербург">Санкт-Петербург</option>
                                            <option value="Москва">Москва</option>
                                            <option value="Санкт-Петербург">Санкт-Петербург</option>
                                            <option value="Москва">Москва</option>
                                            <option value="Санкт-Петербург">Санкт-Петербург</option>

                                        </select><p class="CaptionCont SelectBox search" title=" Москва"><span> Москва</span><label><i></i></label><input type="text" class="search-txt" value="" placeholder="Искать..."></p><div class="optWrapper" style="top: 0px; position: relative;"><ul class="options"><li class="opt selected" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li><li class="opt" data-val="undefined"><label>Москва</label></li><li class="opt" data-val="undefined"><label>Санкт-Петербург</label></li></ul><p class="no-match"></p></div></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tour-selection-wrap-in ">
                    <a href="#" class="metro-valid-pp bth__btn  bth__btn--fill bth__loader" id="send_hard_form">
                        Отправить запрос*
                        <div class=" bth__loader-spin">
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>
                    <div class="tour-selection-wrap__abs-txt  bth__cnt bth__cnt--sm">
                        *Нажимая на кнопку "отправить", я принимаю
                        <a href="http://html2.tophotels.site/tophotels_site_html/help-selection#p-agreement-pp" class="p-agreement-pp agree">
                            Соглашение об обработке личных данных</a> и
                        <a href="http://html2.tophotels.site/tophotels_site_html/help-selection#p-agreement-pp" class="p-agreement-pp site-role">Правила сайта</a>
                    </div>

                </div>
            </div>

            <div id="step2panel_success_message" class="bth__cnt fz18 bold" style="display:none;">
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
                                <div class="side-nav-li-a side-nav-li-a--del-arr ">Главная</div>
                            </li>
                            <li class="side-nav-li">
                                <a href="#my-profile"
                                   class="side-nav-li-a  side-nav-li-a--del-arr js-left-menu-1023-anchor ">Мой
                                    профиль</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#catalog"
                                   class="side-nav-li-a side-nav-li-a--del-arr js-left-menu-1023-anchor  ">Каталог
                                    отелей</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#club-tx"
                                   class="side-nav-li-a  side-nav-li-a--del-arr  js-left-menu-1023-anchor">Клуб
                                    ТопХотелс</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#help-selection"
                                   class="side-nav-li-a  side-nav-li-a--del-arr js-left-menu-1023-anchor ">Помощь в
                                    подборе</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#add-review"
                                   class="side-nav-li-a  side-nav-li-a--del-arr  js-left-menu-1023-anchor">Добавить
                                    отзыв</a>
                            </li>
                            <li class="side-nav-li">
                                <a href="#features"
                                   class="side-nav-li-a  side-nav-li-a--del-arr  js-left-menu-1023-anchor">О
                                    проекте</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="left-menu-1023__item">
                    <a id="my-profile" class="left-menu-1023__ttl">Мой профиль</a>

                    <div class="side-nav">

                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Моё участие</li>
                            <li class="side-nav-li">
                                <div class="side-nav-li-a ">Визитка</div>

                                <ul class="side-nav-li__tabs-list">
                                    <li class="side-nav-li__tabs-li">
                                        <a href="/tophotels/profile-cutaway#authorization">Визитка</a>
                                    </li>

                                    <li class="side-nav-li__tabs-li">
                                        <a href="/tophotels/profile-cutaway#hotels"> Подборки и предложения</a>
                                    </li>
                                    <li class="side-nav-li__tabs-li">
                                        <a href="/tophotels/profile-cutaway#recomend"> Меня рекомендуют</a>
                                    </li>
                                    <li class="side-nav-li__tabs-li">
                                        <a href="/tophotels/profile-cutaway#sertificate">Сертификаты</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="side-nav-li">
                                <a href="/tophotels/profile" class="side-nav-li-a">Профиль</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/tape-my-actions" class="side-nav-li-a ">Лента моих действий</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/my-travels" class="side-nav-li-a ">Мои путешествия</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/my-progress" class="side-nav-li-a ">Достижения</a>

                            </li>
                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Коммуникации</li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/log-all-messages" class="side-nav-li-a">Лог всех сообщений</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/my-subscription-hotels" class="side-nav-li-a ">Мои подписки на
                                    отели</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/tape-communication" class="side-nav-li-a ">Лента общения</a>

                            </li>
                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Настройка интересов</li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/personal-data" class="side-nav-li-a ">Персональные данные</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/my-preference" class="side-nav-li-a">Мои предпочтения</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/my-connections" class="side-nav-li-a ">Мои контакты</a>

                            </li>
                        </ul>
                    </div>

                </div>

                <div class="left-menu-1023__item">
                    <a id="catalog" class="left-menu-1023__ttl">Каталог отелей</a>

                    <div class="side-nav">

                        <ul class="side-nav-ul">
                            <li class="side-nav-li pt10">
                                <a href="/tophotels/hotels-catalog#hotelFilter"
                                   class="side-nav-li-a  side-nav-li-a--del-arr ">Фильтр</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/hotels-catalog#hotelSearch"
                                   class="side-nav-li-a  side-nav-li-a--del-arr ">
                                    Поиск отеля</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/hotels-catalog#myInterests"
                                   class="side-nav-li-a   side-nav-li-a--del-arr">
                                    Мои интересы</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/hotels-catalog#hotelChains"
                                   class="side-nav-li-a   side-nav-li-a--del-arr">
                                    Сети отелей</a>

                            </li>


                        </ul>
                    </div>
                </div>


                <div class="left-menu-1023__item">
                    <a id="club-tx" class="left-menu-1023__ttl">Клуб ТопХотелс</a>

                    <div class="side-nav">

                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Сообщество</li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a grey">Лента клуба</a>
                            </li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/forum" class="side-nav-li-a">Форум по отелям </a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/hotline" class="side-nav-li-a ">Спецакции отелей</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/club-vote" class="side-nav-li-a ">Опросы</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a grey">Конкурсы и игры</a>

                            </li>
                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Рейтинги</li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/ratings-nominations" class="side-nav-li-a ">Номинации отелей</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="#" class="side-nav-li-a ">Рейтинг номеров</a>
                            </li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/top-users" class="side-nav-li-a ">ТОП участников </a>

                            </li>
                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Участники</li>
                            <li class="side-nav-li">
                                <a href="/tophotels/who-where-when" class="side-nav-li-a ">Кто Где Когда</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/club-traveler-list" class="side-nav-li-a ">Путешественники</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/club-touragent-list" class="side-nav-li-a ">ПРО Турагенты</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a grey">Индивидуальные гиды</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a grey">Отельеры</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/hotels-communities" class="side-nav-li-a ">Сообщества отелей</a>

                            </li>
                        </ul>


                    </div>

                </div>

                <div class="left-menu-1023__item">
                    <a id="help-selection" class="left-menu-1023__ttl">Помощь в подборе</a>

                    <div class="side-nav">

                        <ul class="side-nav-ul">
                            <li class="side-nav-li pt10">
                                <a href="/tophotels/help-selection#step1"
                                   class="side-nav-li-a  side-nav-li-a--del-arr ">Параметры
                                    тура</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/help-selection#form" class="side-nav-li-a  side-nav-li-a--del-arr">
                                    Простая
                                    форма</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/help-selection#formStep2"
                                   class="side-nav-li-a  side-nav-li-a--del-arr ">Рега</a>

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
                                <a href="/tophotels/review#search" class="side-nav-li-a   side-nav-li-a--del-arr">Добавление
                                    отзыва</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="/tophotels/review#older" class="side-nav-li-a  side-nav-li-a--del-arr">Черновики
                                    (14)</a>

                            </li>

                            <li class="side-nav-li">
                                <a href="/tophotels/review#no-hotel" class="side-nav-li-a  side-nav-li-a--del-arr">Нет
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
                                <a href="#" class="side-nav-li-a ">Отдых с ТопХотелс</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a ">Полезные фишки</a>

                            </li>
                            <li class="side-nav-li">
                                <a href="#" class="side-nav-li-a ">Все возможности</a>

                            </li>


                        </ul>

                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Для бизнеса</li>

                            <li class="side-nav-li ">
                                <a href="/tophotels/api-services" class="side-nav-li-a ">API сервисы</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/promotion-hotel" class="side-nav-li-a ">Продвижение отеля</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/touragent-profile" class="side-nav-li-a ">Профиль турагента</a>

                            </li>
                            <li class="side-nav-li ">
                                <a href="/tophotels/media-ad" class="side-nav-li-a ">Медийная реклама</a>

                            </li>

                        </ul>
                        <ul class="side-nav-ul">
                            <li class="side-nav-li side-nav-li-ttl">Информация</li>

                            <li class="side-nav-li ">
                                <a href="/tophotels/about-project" class="side-nav-li-a ">О проекте</a>

                            </li>

                            <li class="side-nav-li ">
                                <a href="/tophotels/terms-use" class="side-nav-li-a ">Правила пользования</a>

                            </li>

                            <li class="side-nav-li ">
                                <a href="/tophotels/job-and-career" class="side-nav-li-a ">Работа и карьера </a>

                            </li>

                            <li class="side-nav-li ">
                                <a href="/tophotels/feedback" class="side-nav-li-a">Обратная связь</a>

                            </li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <div id="p-agreement-pp" class="agreement-pp mfp-hide">


        <div class="agreement-pp__mdl">
            <div class="agreement-pp__section">

                <div class="tabs-block">
                    <div class="tabs-bar">
                        <div id="agreement" class="agreement-pp__tab active"> Соглашение об обработке личных данных
                        </div>
                        <div id="siteRole" class="agreement-pp__tab"> Правила сайта</div>
                        <div class="agreement-pp__line" style="width: 304px;"></div>

                        <div class="js-modal-close agreement-pp__close"></div>
                    </div>
                    <div class="panel" id="agreementPanel">
                        <div class="agreement-pp__cols ">

                            <div class="agreement-pp__right">
                                <div class="agreement-pp__white-field">
                                    <div class="mb5 bold fz13">Текст соглашения</div>
                                    <p>Настоящим я предоставляю согласие на обработку ООО «Медиа Трэвел эдвертайзинг»
                                        (ИНН
                                        7705523242, ОГРН 1127747058450, юридический адрес: 115093, г. Москва, 1-ый
                                        Щипковский пер., д. 1) моих персональных данных и подтверждаю, что давая такое
                                        согласие, я действую своей волей и в своем интересе. В соответствии с ФЗ от
                                        27.07.2006 г. № 152-ФЗ «О персональных данных» я согласен предоставить
                                        информацию,
                                        относящуюся к моей личности: мои фамилия, имя, отчество, адрес проживания,
                                        должность, контактный телефон, электронный адрес. Либо, если я являюсь законным
                                        представителем юридического лица, я согласен предоставить информацию,
                                        относящуюся к
                                        реквизитам юридического лица: наименование, юридический адрес, виды
                                        деятельности,
                                        наименование и ФИО исполнительного органа. В случае предоставления персональных
                                        данных третьих лиц, я подтверждаю, что мною получено согласие третьих лиц, в
                                        интересах которых я действую, на обработку их персональных данных, в том числе:
                                        сбор, систематизация, накопление, хранение, уточнение (обновление или
                                        изменение),
                                        использование, распространение (в том числе, передача), обезличивание,
                                        блокирование,
                                        уничтожение, а также осуществление любых иных действий с персональными данными в
                                        соответствии с действующим законодательством.</p>
                                    <p> Согласие на обработку персональных данных дается мною в целях получения услуг,
                                        оказываемых ООО «Медиа Трэвел эдвертайзинг».</p>
                                    <p> Я выражаю свое согласие на осуществление со всеми указанными персональными
                                        данными
                                        следующих действий: сбор, систематизация, накопление, хранение, уточнение
                                        (обновление или изменение), использование, распространение (в том числе,
                                        передача),
                                        обезличивание, блокирование, уничтожение, а также осуществление любых иных
                                        действий
                                        с персональными данными в соответствии с действующим законодательством.
                                        Обработка
                                        данных может осуществляться с использованием средств автоматизации, так и без их
                                        использования (при неавтоматической обработке).</p>
                                    <p> При обработке персональных данных компания ООО «Медиа Трэвел эдвертайзинг» не
                                        ограничена в применении способов их обработки.</p>
                                    <p> Настоящим я признаю и подтверждаю, что в случае необходимости компания ООО
                                        «Медиа
                                        Трэвел эдвертайзинг» вправе предоставлять мои персональные данные для достижения
                                        указанных выше целей третьему лицу, в том числе и при привлечении третьих лиц к
                                        оказанию услуг в указанных целях. Такие третьи лица имеют право на обработку
                                        персональных данных на основании настоящего согласия и на оповещение меня о
                                        тарифах
                                        услуг, специальных акциях и предложениях сайта. Информирование осуществляется по
                                        средствам телефонной связи и/или по электронной почте. Я осознаю, что
                                        проставление
                                        знака «V» или «X» в поле слева и нажатие кнопки «Продолжить», либо кнопки
                                        «Согласен»
                                        ниже текста настоящего соглашения, означает мое письменное согласие с условиями,
                                        описанными ранее.</p>
                                    <br>
                                    <p>* Авторизованным пользователям согласие на обработку данных необходимо дать
                                        только
                                        один раз.</p>
                                </div>

                                <button class="bth__btn agreement-pp__btn ">Согласен</button>
                            </div>
                            <div class="agreement-pp__left">

                                <h2 class="agreement-pp__h2">Что такое персональные данные</h2>
                                <div class="bth__cnt fz14">
                                    <p>Персональные данные - контактная информация,
                                        а также информация идентифицирующая физическое лицо, оставленная пользователем
                                        на
                                        проекте.</p>
                                    <b> Для чего необходимо согласие на обработку персональных данных?</b>
                                    <p> 152-ФЗ «О персональных данных» в ст.9 п.4 указывает на необходимость получения
                                        «письменного согласия субъекта персональных данных на обработку своих
                                        персональных данных». В том же законе разъясняется, что предоставленная
                                        информация
                                        является
                                        конфиденциальной. Деятельность организаций, осуществляющих регистрацию
                                        пользователей
                                        без получения такого согласия является незаконной.</p>
                                    <a class="fz11" target="_blank"
                                       href="http://kremlin.ru/events/president/news/12097#sel=">Ознакомиться с законом
                                        на
                                        официальном сайте президента РФ</a>

                                </div>

                            </div>


                        </div>


                    </div>


                    <div class="panel" id="siteRolePanel" style="display: none">

                        <div class="agreement-pp__role-site">

                            <div class="content-cnt">
                                <p class="about-project-text"><strong>ПРАВОВАЯ ОГОВОРКА </strong></p>
                                <p class="about-project-text">Используя сервисы, предлагаемые www.tophotels.ru, Вы
                                    выражаете
                                    свое согласие с Условиями пользования ресурса. <br>
                                    Пользуясь сервисами, предлагаемыми www.tophotels.ru, Вы принимаете условия
                                    нижеизложенного <u><strong>Соглашения об условиях пользования ресурса</strong></u>,
                                    вне
                                    зависимости от того, являетесь ли вы «Гостем» (что подразумевает простое
                                    использование
                                    Вами сервиса) или «Зарегистрированным пользователем» (что подразумевает регистрацию
                                    на
                                    интернет-ресурсе www.tophotels.ru), а так же, вне зависимости от цели и субъекта
                                    использования.</p>

                                <p class="about-project-text"><strong>СОГЛАШЕНИЕ ОБ УСЛОВИЯХ ПОЛЬЗОВАНИЯ
                                        РЕСУРСА</strong>
                                </p>
                                <p class="about-project-text"><u>в редакции от 29 декабря 2014г.</u></p>
                                <p class="about-project-text"><strong>1.Термины и определения</strong></p>
                                <p class="about-project-text"><strong>Соглашение</strong> – Соглашение об условиях
                                    пользования ресурса www.tophotels.ru. <br>
                                    <strong>Администратор</strong> – администраторы, модераторы, правообладатели, а
                                    равно
                                    иные законные владельцы ресурса www.tophotels.ru. <br>
                                    <strong>Ресурс (Сервис)</strong> – интернет сайт www.tophotels.ru. <br>
                                    <strong>Материалы</strong> - информация, размещенная на ресурсе: тексты, статьи,
                                    фотоизображения, видеоизображения, иллюстрации.<br>
                                    <strong>Пользователь</strong> - это конкретное лицо, либо организация, которое
                                    посещает
                                    интернет-ресурс www.tophotels.ru.</p>
                                <p class="about-project-text"><strong>В зависимости от цели и субъекта использования
                                        ресурса
                                        различают виды Пользователей:</strong><br>
                                    1.<u>Обычные пользователи </u>- физические лица, чаще всего туристы, а также лица,
                                    планирующие свой отдых, посещающие ресурс в личных целях, не преследуя возможности
                                    извлечения прибыли. <br>
                                    2.<u>Коммерческие пользователи</u> – юридические лица, индивидуальные
                                    предприниматели, а
                                    также их представители или иные лица, действующие в интересах вышеперечисленных
                                    субъектов, посещающие ресурс в связи с их профессиональной деятельностью,
                                    преследующие
                                    коммерческие цели. К коммерческим пользователям в тексте настоящего Соглашения
                                    отнесены
                                    включая, но не ограничиваясь, следующие Пользователи – турагентства, туроператоры,
                                    отели, туристические поисковые и информационные системы и прочие субъекты
                                    туристического
                                    бизнеса, а равно лица, действующие в их интересах.</p>
                                <p class="about-project-text"><strong>2.Общие положения</strong></p>
                                <p class="about-project-text">2.1.Необходимым условием использования сервиса
                                    www.tophotels.ru является согласие Пользователя действовать в полном соответствии со
                                    всеми применяемыми правовыми нормами РФ и нормами международного права, а также в
                                    соответствии с данным Соглашением. <br>
                                    2.2.Администраторы сайта могут менять данное Соглашение в любое время. Любые
                                    изменения
                                    данного Соглашения вступают в силу с момента их публикации на сайте
                                    www.tophotels.ru.
                                    Продолжая использование сервиса www.tophotels.ru после публикации изменений, Вы
                                    соглашаетесь действовать в соответствии с условиями, указанными в модифицированном
                                    Соглашении.<br>
                                    2.3.Администраторы ресурса (в т.ч. отели, сотрудничающие с ресурсом) вправе
                                    направлять
                                    Пользователю полезную, актуальную, интересную и иную информацию путем рассылки по
                                    электронной почте и размещения в личном кабинете. В любой момент Пользователи могут
                                    отказаться от рассылок через личный кабинет.</p>
                                <p class="about-project-text">2.4<strong>Посещение и использование ресурса означает, что
                                        Пользователь принимает все условия настоящего Соглашения в полном объеме без
                                        каких-либо изъятий и ограничений. Использование ресурса на иных условиях не
                                        допускается. </strong><br>
                                    2.5.Виду того, что активная ссылка на Соглашение размещена на главной странице
                                    ресурса и
                                    доступна неопределенному кругу лиц, Соглашение считается заключенным с конкретным
                                    Пользователем с момента посещения ресурса этим Пользователем, даже не смотря на
                                    отсутствие регистрации Пользователя на ресурсе.</p>
                                <p class="about-project-text"><strong>3.Описание ресурса</strong></p>
                                <p class="about-project-text">3.1.www.tophotels.ru является информационным рейтингом
                                    отелей
                                    и гостиниц мира, основанным на мнениях и отзывах профессионалов туристического
                                    бизнеса
                                    (турагентов) и туристов. <br>
                                    3.2.Данный ресурс представляет собой ежедневно пополняемый каталог отелей и гостиниц
                                    мира, в который включены описания отелей, их фотографии и контакты. На нашем ресурсе
                                    каждый человек, побывавший в том или ином отеле, может оставить о нем свой отзыв,
                                    оценить размещение, уровень сервиса и питания в отеле, дополнительно аргументировав
                                    свои
                                    оценки в отзыве, таким образом формируя рейтинг TOP Hotels. <br>
                                    3.3.Кроме общей информации об отелях, пользователи могут найти на www.tophotels.ru
                                    ряд
                                    дополнительных материалов и сервисов, которые могут пригодиться при выборе места
                                    проведения отдыха. К ним относится информация о специальных акциях, новости отелей и
                                    прочая сопутствующая информация.<br>
                                    3.4.<u><strong>www.tophotels.ru, равно как и правообладатель данного ресурса не
                                            является
                                            туристическим агентством и не продает туристические услуги. </strong></u>
                                </p>
                                <p class="about-project-text"><strong>4.Интеллектуальная собственность.
                                        Ограничения использования ресурса</strong></p>
                                <p class="about-project-text"><strong><u>Общие ограничения</u>, вне зависимости от вида
                                        Пользователя</strong><br>
                                    4.1.Все материалы на ресурсе www.tophotels.ru, включая, без ограничений, любую
                                    документацию, текст, наполнение, данные, графические изображения, интерфейсы или
                                    другие
                                    материалы, на которые распространяется действие закона об авторских правах,
                                    охраняются
                                    федеральным и международным законодательством. Материалы сайта могут содержать
                                    торговые
                                    марки, знаки обслуживания и торговые имена (названия). Все права защищены. <br>
                                    4.2.Информация, размещенная Администраторами на ресурсе: тексты, статьи,
                                    фотоизображения, видеоизображения, иллюстрации является собственностью
                                    правообладателя
                                    ресурса или его партнеров, за исключением материалов, авторство которых оговорено
                                    непосредственно в их содержании (статьи, тексты, фотографии и иллюстрации) или
                                    информации загруженной Пользователями.<br>
                                    4.3.Использование информации (текстовой, графической, аудиовизуальной и иной),
                                    размещаемой на Сайте может осуществляться только при условии соблюдения требований
                                    действующего законодательства РФ об авторском праве и интеллектуальной
                                    собственности, а
                                    также настоящего Соглашения. <br>
                                    4.4.Дизайн, структура Сайта, изображение, графика и иные элементы, являющиеся
                                    объектом
                                    охраны по законодательству РФ, <strong>не могут воспроизводиться полностью или
                                        частично
                                        для создания новых информационных объектов</strong>, за исключением случаев
                                    договорных или партнерских отношений с Администраторами ресурса, при этом условия
                                    воспроизведения оговариваются в каждом случае индивидуально.<br>
                                    4.5.Определенные части данного ресурса могут быть защищены паролем и могут требовать
                                    регистрации пользователя, желающего просмотреть их. После процесса регистрации на
                                    нашем
                                    сайте, Пользователю на безвозмездной основе, если иное не оговорено отдельно,
                                    предоставляются учетная запись и пароль, позволяющие получать доступ ко всем услугам
                                    и
                                    сервисам www.tophotels.ru. Пользователь обязуется обеспечивать конфиденциальность
                                    пароля, и несет полную ответственность за любой ущерб и любые обязательства, ставшие
                                    последствием неспособности обеспечивать конфиденциальность пароля. <br>
                                    4.6.<strong>Пользователь соглашается не использовать www.tophotels.ru для: </strong><br>
                                    - загрузки материалов, не соответствующих действующему законодательству, являющихся
                                    вредными, угрожающими, оскорбительными, клеветническими, вульгарными или
                                    неприличными;<br>
                                    - того, чтобы выдавать себя за другое лицо или организацию, включая, но не
                                    ограничиваясь, официальных представителей www.tophotels.ru или поставщиков
                                    туристических
                                    услуг, а также для того, чтобы отражать несуществующую связь между Вами и другими
                                    лицами, или организациями; <br>
                                    - загрузки, рассылки, или любой другой формы публикации материалов, которые Вы не
                                    имеете
                                    права публиковать; <br>
                                    - загрузки, рассылки, или любой другой формы публикации незатребованной или
                                    запрещенной
                                    рекламы, промо-материалов, спама, и любых других материалов рекламного характера;
                                    <br>
                                    - загрузки, рассылки, или любой другой формы публикации материалов, содержащих
                                    компьютерные вирусы или любые другие программные коды, файлы или программы,
                                    созданные с
                                    целью прерывания, ликвидации или ограничения функциональности любого программного
                                    обеспечения или аппаратуры; <br>
                                    - препятствования или прерывания функционирования Сервиса, или серверов и сетей,
                                    связанных с ресурсом. <br>
                                    4.7.<strong>Пользователь ресурса обязуется:</strong><br>
                                    - не переконструировать, не пытаться получить доступ к исходному коду, не
                                    распространять
                                    и не создавать какие-либо производные работы, основанные на использовании Ресурса
                                    или
                                    любой из его частей;<br>
                                    - не входить на Ресурс какими-либо путями, отличными от предоставленного
                                    www.tophotels.ru интерфейса. В дополнение к этому, любое программное обеспечение,
                                    доступ
                                    к которому предоставляется на данном сайте, включая, но не ограничиваясь всеми HTML
                                    кодами и онлайн средствами управления, является собственностью администраторов.
                                    Любое
                                    воспроизведение или распространение данного программного обеспечения строго
                                    запрещено.<br>
                                    4.8.Администратор ресурса может по своему усмотрению и без предварительного
                                    уведомления
                                    запретить/ограничить Пользователю пользование ресурсом. Причины данных мер могут
                                    включать в себя, но не ограничиваются следующим:<br>
                                    - нарушения данных Условий пользования или других договоров с администрацией
                                    www.tophotels.ru;<br>
                                    - соответствующие запросы правоохранительных или других государственных органов;<br>
                                    - возникновение неожиданных технических неполадок или проблем с системой
                                    безопасности;<br>
                                    - участие Пользователя в мошеннических или незаконных операциях, и/или невыплата
                                    каких-либо денежных сумм, взимаемых за предоставление услуг, связанных с Сервисом.
                                    <br>
                                    <br>
                                    <u><strong>Ограничения использования ресурса для Обычного пользователя:</strong></u><br>
                                    4.9.www.tophotels.ru предоставляет бесплатные услуги, предназначенные для личного
                                    некоммерческого использования. Пользователю не разрешается использовать данный сайт
                                    для
                                    получения прибыли, за исключением договорных отношений с Администратором
                                    ресурса;<br>
                                    4.10.Если обратное не указано на сайте, данное Соглашение разрешает Обычному
                                    пользователю просматривать, загружать, кэшировать, копировать и распечатывать
                                    Материалы,
                                    в соответствии со следующими условиями: <br>
                                    - Любая копия Материалов или отдельной их части должна содержать ссылку на страницу
                                    ресурса www.tophotels.ru , содержащую скопированную информацию;<br>
                                    - Обычному пользователю дается ограниченное, неэксклюзивное право создавать
                                    гипертекстовые ссылки на главную и внутренние страницы ресурса, с условием того, что
                                    такая ссылка не ведет к ложному, уничижительному, обманному восприятию сервиса
                                    www.tophotels.ru.<br>
                                    <strong>При этом, www.tophotels.ru оставляет за собой право отменить вышеуказанные
                                        разрешения в любое время, без объяснения причин, вследствие чего любое
                                        использование
                                        Материалов должно быть немедленно прекращено по соответствующему уведомлению
                                        Администратора. </strong> <br>
                                    <strong><u>Ограничения использования ресурса для Коммерческого
                                            пользователя:</u></strong><br>
                                    4.11.Коммерческому пользователю не разрешается загружать, кэшировать, копировать и
                                    распечатывать Материалы с сайта без получения предварительного письменного
                                    соглашения
                                    Администратора сайта <br>
                                    4.12.Коммерческому пользователю разрешается размещать ссылки только на полную версию
                                    Ресурса, главную страницу www.tophotels.ru.<br>
                                    4.13.Коммерческому пользователю не разрешается размещать ссылки на внутренние
                                    страницы
                                    www.tophotels.ru, в том числе спецссылки с окончанием «?_mode —» вне зависимости от
                                    цели
                                    их размещения. <br>
                                    4.14.Коммерческому пользователю не разрешается использовать никакие из торговых
                                    марок,
                                    логотипов или торговых названий с ресурса, равно как и любую другую авторскую
                                    информацию, включая графические изображения, а также любой текст, или
                                    интерфейс/дизайн
                                    любой страницы или любой формы, содержащейся на странице Сайта без получения
                                    предварительного письменного соглашения Администратора сайта.</p>
                                <p class="about-project-text"><strong>5.Материалы, передаваемые (размещаемые)
                                        Пользователем для публикации и/или распространения посредством
                                        www.tophotels.ru</strong></p>
                                <p class="about-project-text">5.1.Пользователь гарантирует, что вся информация,
                                    размещенная
                                    им, является подлинной. Ответственность за указание недостоверной, ложной, ошибочной
                                    информации лежит на Пользователе.<br>
                                    5.2.Пользователь несет ответственность за законность, соответствие реальному
                                    положению
                                    дел, соответствие контексту, оригинальность и авторство любого из размещаемых им
                                    материалов. <br>
                                    5.3.Модератор имеет право вносить корректировки в комментарии и отзывы с ошибками
                                    или
                                    ненормативной лексикой. Комментарии и отзывы, содержащие рекламу или любые другие
                                    предложения коммерческого характера, будут удаляться с сайта. Активные или
                                    неактивные
                                    ссылки, используемые в комментариях, в большинстве случаев будут вырезаны.
                                    Администратор/модератор проекта вправе удалять отзывы/комментарии/фото, загруженные
                                    пользователями без объяснения причин.<br>
                                    5.4.Правообладатель сайта www.tophotels.ru не распространяет свои авторские права на
                                    материалы, доступные на ресурсе (включая фотографии и графические элементы),
                                    публикуемые
                                    Пользователем. Однако, публикуя такие материалы на ресурсе Пользователь передает
                                    www.tophotels.ru международную, неэксклюзивную и безвозмездную лицензию (разрешение)
                                    на
                                    использование, распространение, адаптацию и публикацию данных материалов с целью
                                    описания и рекламы описываемого отеля или услуги. Срок действия разрешения
                                    заканчивается, когда Пользователь, либо администрация www.tophotels.ru убирает
                                    данные
                                    материалы со страниц сайта. <br>
                                    5.5.Администрация ресурса не несёт ответственности за корректность представленной в
                                    отзывах и комментариях информации. www.tophotels.ru не обеспечивает контроль
                                    материалов,
                                    публикуемых Пользователями на ресурсе, и, вследствие этого, не гарантирует точность,
                                    целостность или качество данных материалов. Пользователь самостоятельно должен
                                    оценивать
                                    потенциальный риск и нести полную ответственность за использование любых материалов,
                                    включая уверенность в их точности, полноте и полезности. <br>
                                    5.6.Администраторы могут просматривать, либо не просматривать материалы перед их
                                    публикацией. Представители www.tophotels.ru имеют право (но не обязанность)
                                    отслеживать,
                                    отклонять или переносить любые материалы, доступные с помощью Сервиса. <br>
                                    5.7.Пользователям ЗАПРЕЩЕНО размещать на ресурсе любые материалы, распространение
                                    которых запрещено действующим законодательством Российской Федерации и/или нормами
                                    международного права. Пользователь несет ответственность за несоответствие
                                    содержания
                                    рекламно-информационных материалов, действующему законодательству РФ, в том числе,
                                    нормам федеральных законов «О рекламе», «О средствах массовой информации», «Об
                                    авторском
                                    праве и смежных правах», «О товарных знаках, знаках обслуживания и наименованиях
                                    мест
                                    происхождения товаров». Пользователь гарантирует, что публикуемые им материалы не
                                    являются ненадлежащей рекламой, а также не нарушают неприкосновенность частной
                                    жизни,
                                    личной и семейной тайны, других охраняемых законом прав и интересов третьих лиц.</p>
                                <p class="about-project-text"><strong>6.Ограничение ответственности</strong>
                                </p>
                                <p class="about-project-text">6.1.Администраторы сайта прилагают все надлежащие усилия
                                    по
                                    обеспечению корректности всей информации, размещенной на Сайте. Вместе с тем не
                                    гарантируют абсолютную точность, полноту или достоверность информации, содержащейся
                                    на
                                    Сайте, не отвечают за неточности, возможные ошибки или другие недостатки в
                                    размещаемой
                                    информации. <br>
                                    6.2.Оценка качества размещенной на Сайте информации, ее актуальности, полноты и
                                    применимости - в ведении и компетенции Пользователя. <br>
                                    6.3.www.tophotels.ru не предоставляет никаких гарантий. Информация и услуги,
                                    предлагаемые на сайте, могут быть неточными, так как большинство данной информации
                                    предоставляется непосредственно поставщиками услуг. <br>
                                    6.4.Администраторы не гарантируют, что: <br>
                                    - сервис будет соответствовать вашим требованиям;<br>
                                    - результаты, полученные в процессе пользования сервисом, будут точными или
                                    достоверными; <br>
                                    - качество любых услуг, информации, или других материалов, приобретаемых вами с
                                    помощью
                                    ресурса, будут соответствовать вашим требованиям. <br>
                                    6.5.Рейтинги отелей, отражаемые на данном сайте, могут быть использованы только в
                                    качестве общих рекомендаций.<br>
                                    6.6. Администраторы www.tophotels.ru и/или работающие с ним третьи лица могут
                                    вносить
                                    изменения в информацию на данном сайте в любое время.<br>
                                    6.7.Партнеры www.tophotels.ru, включая, без ограничений, отели, туристические
                                    агентства
                                    и туристических операторов, предоставляющие туристические или какие-либо другие
                                    услуги
                                    посредством сервиса www.tophotels.ru не являются агентами или представителями
                                    www.tophotels.ru.<br>
                                    6.8. www.tophotels.ru не несет ответственность за действия, ошибки, обещания,
                                    гарантии
                                    своих партнеров или третьих лиц, размещающих информацию на ресурсе, а также за
                                    нарушения
                                    или несоблюдения ими договоров, равно как и за любой материальный, моральный прямой
                                    или
                                    косвенный ущерб, или любые другие потери, возникающие вследствие вышеуказанного.
                                    <br>
                                    6.9.Администраторы сайта не могут нести ответственность за любой прямой, косвенный
                                    убыток, связанный с использованием данного сайта, или с задержкой или невозможностью
                                    его
                                    использования, а также за любую информацию, продукты и услуги, приобретенные
                                    посредством
                                    данного сайта, или другим способом полученные с его помощью. <br>
                                    6.10.Данный сайт содержит гиперссылки на Интернет-ресурсы, управляемые лицами, не
                                    связанными с www.tophotels.ru. Эти гиперссылки публикуются исключительно в
                                    информационных и ознакомительных целях. Администратор не контролирует эти
                                    Интернет-ресурсы и не несет ответственности за их содержимое и использование данного
                                    содержимого Пользователями. <br>
                                    6.11.Пользователь несет ответственность по искам и претензиям третьих лиц к
                                    администраторам сайта и лично Пользователю за нарушения, вызванные размещением им
                                    информационных материалов.<br>
                                    6.12.Администраторы ресурса не несут ответственности за временные технические сбои и
                                    перерывы в предоставлении услуг, за временные сбои и перерывы в работе линий связи,
                                    иные
                                    аналогичные сбои, а также за неполадки компьютера, с которого Пользователь
                                    осуществляет
                                    выход в Интернет.</p>
                                <p class="about-project-text"><strong>7.Разрешение споров и применяемая
                                        правовая норма</strong></p>
                                <p class="about-project-text">7.1.В случае публикации материалов, содержащихся на
                                    страницах
                                    сайта, без соблюдения условий изложенных в настоящем Соглашении, администраторы
                                    оставляют за собой право на защиту своих нарушенных прав в соответствии с
                                    действующим
                                    гражданским законодательством и законодательством об авторском праве и смежных
                                    правах.<br>
                                    7.2.При обнаружении фактов нарушения условий настоящего Соглашения Администратор
                                    отправляет «нарушителю» досудебное уведомление с требованием устранить выявленные
                                    нарушения в установленный срок. При неисполнении указанных требований защита
                                    нарушенных
                                    прав и взыскание причиненных убытков производится в судебном порядке по месту
                                    регистрации правообладателя Сайта www.tophotels.ru<br>
                                    7.3.Любые судебные процессы по данному Соглашению будут проводиться в Российской
                                    Федерации в г. Москве, в соответствии с подсудностью судов судебной системы в РФ и
                                    условиями настоящего Соглашения.</p>
                                <p class="about-project-text"><strong>8.Заключительные положения</strong></p>
                                <p class="about-project-text">8.1.Если Вы не согласны с Условиями пользования, или
                                    какой-либо их частью, пожалуйста, воздержитесь от использования ресурса
                                    www.tophotels.ru.&nbsp;<br>
                                    <br>
                                    Администраторы ресурса<br>
                                    www.tophotels.ru<span id="ctrlcopy"><br><br>Читать полностью на&nbsp;<a
                                                href="https://www.tophotels.ru/about/agreement">https://www.tophotels.ru/about/agreement</a></span>
                                </p></div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="legal-information-pp" class="agreement-pp mfp-hide">


        <div class="agreement-pp__mdl">
            <div class="agreement-pp__section">

                <div class="tabs-block">
                    <div class="tabs-bar">
                        <div id="usage-role" class="agreement-pp__tab active"> Правила пользования</div>
                        <div id="confidentiality" class="agreement-pp__tab"> Конфиденциальность</div>
                        <div class="agreement-pp__line" style="width: 174px;"></div>

                        <div class=" js-modal-close  agreement-pp__close"></div>
                    </div>

                    <div class="panel" id="usage-rolePanel">

                        <div class="agreement-pp__role-site">

                            <div class="content-cnt">
                                <p class="about-project-text"><strong>ПРАВОВАЯ ОГОВОРКА </strong></p>
                                <p class="about-project-text">Используя сервисы, предлагаемые www.tophotels.ru, Вы
                                    выражаете
                                    свое согласие с Условиями пользования ресурса. <br>
                                    Пользуясь сервисами, предлагаемыми www.tophotels.ru, Вы принимаете условия
                                    нижеизложенного <u><strong>Соглашения об условиях пользования ресурса</strong></u>,
                                    вне
                                    зависимости от того, являетесь ли вы «Гостем» (что подразумевает простое
                                    использование
                                    Вами сервиса) или «Зарегистрированным пользователем» (что подразумевает регистрацию
                                    на
                                    интернет-ресурсе www.tophotels.ru), а так же, вне зависимости от цели и субъекта
                                    использования.</p>

                                <p class="about-project-text"><strong>СОГЛАШЕНИЕ ОБ УСЛОВИЯХ ПОЛЬЗОВАНИЯ
                                        РЕСУРСА</strong>
                                </p>
                                <p class="about-project-text"><u>в редакции от 29 декабря 2014г.</u></p>
                                <p class="about-project-text"><strong>1.Термины и определения</strong></p>
                                <p class="about-project-text"><strong>Соглашение</strong> – Соглашение об условиях
                                    пользования ресурса www.tophotels.ru. <br>
                                    <strong>Администратор</strong> – администраторы, модераторы, правообладатели, а
                                    равно
                                    иные законные владельцы ресурса www.tophotels.ru. <br>
                                    <strong>Ресурс (Сервис)</strong> – интернет сайт www.tophotels.ru. <br>
                                    <strong>Материалы</strong> - информация, размещенная на ресурсе: тексты, статьи,
                                    фотоизображения, видеоизображения, иллюстрации.<br>
                                    <strong>Пользователь</strong> - это конкретное лицо, либо организация, которое
                                    посещает
                                    интернет-ресурс www.tophotels.ru.</p>
                                <p class="about-project-text"><strong>В зависимости от цели и субъекта использования
                                        ресурса
                                        различают виды Пользователей:</strong><br>
                                    1.<u>Обычные пользователи </u>- физические лица, чаще всего туристы, а также лица,
                                    планирующие свой отдых, посещающие ресурс в личных целях, не преследуя возможности
                                    извлечения прибыли. <br>
                                    2.<u>Коммерческие пользователи</u> – юридические лица, индивидуальные
                                    предприниматели, а
                                    также их представители или иные лица, действующие в интересах вышеперечисленных
                                    субъектов, посещающие ресурс в связи с их профессиональной деятельностью,
                                    преследующие
                                    коммерческие цели. К коммерческим пользователям в тексте настоящего Соглашения
                                    отнесены
                                    включая, но не ограничиваясь, следующие Пользователи – турагентства, туроператоры,
                                    отели, туристические поисковые и информационные системы и прочие субъекты
                                    туристического
                                    бизнеса, а равно лица, действующие в их интересах.</p>
                                <p class="about-project-text"><strong>2.Общие положения</strong></p>
                                <p class="about-project-text">2.1.Необходимым условием использования сервиса
                                    www.tophotels.ru является согласие Пользователя действовать в полном соответствии со
                                    всеми применяемыми правовыми нормами РФ и нормами международного права, а также в
                                    соответствии с данным Соглашением. <br>
                                    2.2.Администраторы сайта могут менять данное Соглашение в любое время. Любые
                                    изменения
                                    данного Соглашения вступают в силу с момента их публикации на сайте
                                    www.tophotels.ru.
                                    Продолжая использование сервиса www.tophotels.ru после публикации изменений, Вы
                                    соглашаетесь действовать в соответствии с условиями, указанными в модифицированном
                                    Соглашении.<br>
                                    2.3.Администраторы ресурса (в т.ч. отели, сотрудничающие с ресурсом) вправе
                                    направлять
                                    Пользователю полезную, актуальную, интересную и иную информацию путем рассылки по
                                    электронной почте и размещения в личном кабинете. В любой момент Пользователи могут
                                    отказаться от рассылок через личный кабинет.</p>
                                <p class="about-project-text">2.4<strong>Посещение и использование ресурса означает, что
                                        Пользователь принимает все условия настоящего Соглашения в полном объеме без
                                        каких-либо изъятий и ограничений. Использование ресурса на иных условиях не
                                        допускается. </strong><br>
                                    2.5.Виду того, что активная ссылка на Соглашение размещена на главной странице
                                    ресурса и
                                    доступна неопределенному кругу лиц, Соглашение считается заключенным с конкретным
                                    Пользователем с момента посещения ресурса этим Пользователем, даже не смотря на
                                    отсутствие регистрации Пользователя на ресурсе.</p>
                                <p class="about-project-text"><strong>3.Описание ресурса</strong></p>
                                <p class="about-project-text">3.1.www.tophotels.ru является информационным рейтингом
                                    отелей
                                    и гостиниц мира, основанным на мнениях и отзывах профессионалов туристического
                                    бизнеса
                                    (турагентов) и туристов. <br>
                                    3.2.Данный ресурс представляет собой ежедневно пополняемый каталог отелей и гостиниц
                                    мира, в который включены описания отелей, их фотографии и контакты. На нашем ресурсе
                                    каждый человек, побывавший в том или ином отеле, может оставить о нем свой отзыв,
                                    оценить размещение, уровень сервиса и питания в отеле, дополнительно аргументировав
                                    свои
                                    оценки в отзыве, таким образом формируя рейтинг TOP Hotels. <br>
                                    3.3.Кроме общей информации об отелях, пользователи могут найти на www.tophotels.ru
                                    ряд
                                    дополнительных материалов и сервисов, которые могут пригодиться при выборе места
                                    проведения отдыха. К ним относится информация о специальных акциях, новости отелей и
                                    прочая сопутствующая информация.<br>
                                    3.4.<u><strong>www.tophotels.ru, равно как и правообладатель данного ресурса не
                                            является
                                            туристическим агентством и не продает туристические услуги. </strong></u>
                                </p>
                                <p class="about-project-text"><strong>4.Интеллектуальная собственность.
                                        Ограничения использования ресурса</strong></p>
                                <p class="about-project-text"><strong><u>Общие ограничения</u>, вне зависимости от вида
                                        Пользователя</strong><br>
                                    4.1.Все материалы на ресурсе www.tophotels.ru, включая, без ограничений, любую
                                    документацию, текст, наполнение, данные, графические изображения, интерфейсы или
                                    другие
                                    материалы, на которые распространяется действие закона об авторских правах,
                                    охраняются
                                    федеральным и международным законодательством. Материалы сайта могут содержать
                                    торговые
                                    марки, знаки обслуживания и торговые имена (названия). Все права защищены. <br>
                                    4.2.Информация, размещенная Администраторами на ресурсе: тексты, статьи,
                                    фотоизображения, видеоизображения, иллюстрации является собственностью
                                    правообладателя
                                    ресурса или его партнеров, за исключением материалов, авторство которых оговорено
                                    непосредственно в их содержании (статьи, тексты, фотографии и иллюстрации) или
                                    информации загруженной Пользователями.<br>
                                    4.3.Использование информации (текстовой, графической, аудиовизуальной и иной),
                                    размещаемой на Сайте может осуществляться только при условии соблюдения требований
                                    действующего законодательства РФ об авторском праве и интеллектуальной
                                    собственности, а
                                    также настоящего Соглашения. <br>
                                    4.4.Дизайн, структура Сайта, изображение, графика и иные элементы, являющиеся
                                    объектом
                                    охраны по законодательству РФ, <strong>не могут воспроизводиться полностью или
                                        частично
                                        для создания новых информационных объектов</strong>, за исключением случаев
                                    договорных или партнерских отношений с Администраторами ресурса, при этом условия
                                    воспроизведения оговариваются в каждом случае индивидуально.<br>
                                    4.5.Определенные части данного ресурса могут быть защищены паролем и могут требовать
                                    регистрации пользователя, желающего просмотреть их. После процесса регистрации на
                                    нашем
                                    сайте, Пользователю на безвозмездной основе, если иное не оговорено отдельно,
                                    предоставляются учетная запись и пароль, позволяющие получать доступ ко всем услугам
                                    и
                                    сервисам www.tophotels.ru. Пользователь обязуется обеспечивать конфиденциальность
                                    пароля, и несет полную ответственность за любой ущерб и любые обязательства, ставшие
                                    последствием неспособности обеспечивать конфиденциальность пароля. <br>
                                    4.6.<strong>Пользователь соглашается не использовать www.tophotels.ru для: </strong><br>
                                    - загрузки материалов, не соответствующих действующему законодательству, являющихся
                                    вредными, угрожающими, оскорбительными, клеветническими, вульгарными или
                                    неприличными;<br>
                                    - того, чтобы выдавать себя за другое лицо или организацию, включая, но не
                                    ограничиваясь, официальных представителей www.tophotels.ru или поставщиков
                                    туристических
                                    услуг, а также для того, чтобы отражать несуществующую связь между Вами и другими
                                    лицами, или организациями; <br>
                                    - загрузки, рассылки, или любой другой формы публикации материалов, которые Вы не
                                    имеете
                                    права публиковать; <br>
                                    - загрузки, рассылки, или любой другой формы публикации незатребованной или
                                    запрещенной
                                    рекламы, промо-материалов, спама, и любых других материалов рекламного характера;
                                    <br>
                                    - загрузки, рассылки, или любой другой формы публикации материалов, содержащих
                                    компьютерные вирусы или любые другие программные коды, файлы или программы,
                                    созданные с
                                    целью прерывания, ликвидации или ограничения функциональности любого программного
                                    обеспечения или аппаратуры; <br>
                                    - препятствования или прерывания функционирования Сервиса, или серверов и сетей,
                                    связанных с ресурсом. <br>
                                    4.7.<strong>Пользователь ресурса обязуется:</strong><br>
                                    - не переконструировать, не пытаться получить доступ к исходному коду, не
                                    распространять
                                    и не создавать какие-либо производные работы, основанные на использовании Ресурса
                                    или
                                    любой из его частей;<br>
                                    - не входить на Ресурс какими-либо путями, отличными от предоставленного
                                    www.tophotels.ru интерфейса. В дополнение к этому, любое программное обеспечение,
                                    доступ
                                    к которому предоставляется на данном сайте, включая, но не ограничиваясь всеми HTML
                                    кодами и онлайн средствами управления, является собственностью администраторов.
                                    Любое
                                    воспроизведение или распространение данного программного обеспечения строго
                                    запрещено.<br>
                                    4.8.Администратор ресурса может по своему усмотрению и без предварительного
                                    уведомления
                                    запретить/ограничить Пользователю пользование ресурсом. Причины данных мер могут
                                    включать в себя, но не ограничиваются следующим:<br>
                                    - нарушения данных Условий пользования или других договоров с администрацией
                                    www.tophotels.ru;<br>
                                    - соответствующие запросы правоохранительных или других государственных органов;<br>
                                    - возникновение неожиданных технических неполадок или проблем с системой
                                    безопасности;<br>
                                    - участие Пользователя в мошеннических или незаконных операциях, и/или невыплата
                                    каких-либо денежных сумм, взимаемых за предоставление услуг, связанных с Сервисом.
                                    <br>
                                    <br>
                                    <u><strong>Ограничения использования ресурса для Обычного пользователя:</strong></u><br>
                                    4.9.www.tophotels.ru предоставляет бесплатные услуги, предназначенные для личного
                                    некоммерческого использования. Пользователю не разрешается использовать данный сайт
                                    для
                                    получения прибыли, за исключением договорных отношений с Администратором
                                    ресурса;<br>
                                    4.10.Если обратное не указано на сайте, данное Соглашение разрешает Обычному
                                    пользователю просматривать, загружать, кэшировать, копировать и распечатывать
                                    Материалы,
                                    в соответствии со следующими условиями: <br>
                                    - Любая копия Материалов или отдельной их части должна содержать ссылку на страницу
                                    ресурса www.tophotels.ru , содержащую скопированную информацию;<br>
                                    - Обычному пользователю дается ограниченное, неэксклюзивное право создавать
                                    гипертекстовые ссылки на главную и внутренние страницы ресурса, с условием того, что
                                    такая ссылка не ведет к ложному, уничижительному, обманному восприятию сервиса
                                    www.tophotels.ru.<br>
                                    <strong>При этом, www.tophotels.ru оставляет за собой право отменить вышеуказанные
                                        разрешения в любое время, без объяснения причин, вследствие чего любое
                                        использование
                                        Материалов должно быть немедленно прекращено по соответствующему уведомлению
                                        Администратора. </strong> <br>
                                    <strong><u>Ограничения использования ресурса для Коммерческого
                                            пользователя:</u></strong><br>
                                    4.11.Коммерческому пользователю не разрешается загружать, кэшировать, копировать и
                                    распечатывать Материалы с сайта без получения предварительного письменного
                                    соглашения
                                    Администратора сайта <br>
                                    4.12.Коммерческому пользователю разрешается размещать ссылки только на полную версию
                                    Ресурса, главную страницу www.tophotels.ru.<br>
                                    4.13.Коммерческому пользователю не разрешается размещать ссылки на внутренние
                                    страницы
                                    www.tophotels.ru, в том числе спецссылки с окончанием «?_mode —» вне зависимости от
                                    цели
                                    их размещения. <br>
                                    4.14.Коммерческому пользователю не разрешается использовать никакие из торговых
                                    марок,
                                    логотипов или торговых названий с ресурса, равно как и любую другую авторскую
                                    информацию, включая графические изображения, а также любой текст, или
                                    интерфейс/дизайн
                                    любой страницы или любой формы, содержащейся на странице Сайта без получения
                                    предварительного письменного соглашения Администратора сайта.</p>
                                <p class="about-project-text"><strong>5.Материалы, передаваемые (размещаемые)
                                        Пользователем для публикации и/или распространения посредством
                                        www.tophotels.ru</strong></p>
                                <p class="about-project-text">5.1.Пользователь гарантирует, что вся информация,
                                    размещенная
                                    им, является подлинной. Ответственность за указание недостоверной, ложной, ошибочной
                                    информации лежит на Пользователе.<br>
                                    5.2.Пользователь несет ответственность за законность, соответствие реальному
                                    положению
                                    дел, соответствие контексту, оригинальность и авторство любого из размещаемых им
                                    материалов. <br>
                                    5.3.Модератор имеет право вносить корректировки в комментарии и отзывы с ошибками
                                    или
                                    ненормативной лексикой. Комментарии и отзывы, содержащие рекламу или любые другие
                                    предложения коммерческого характера, будут удаляться с сайта. Активные или
                                    неактивные
                                    ссылки, используемые в комментариях, в большинстве случаев будут вырезаны.
                                    Администратор/модератор проекта вправе удалять отзывы/комментарии/фото, загруженные
                                    пользователями без объяснения причин.<br>
                                    5.4.Правообладатель сайта www.tophotels.ru не распространяет свои авторские права на
                                    материалы, доступные на ресурсе (включая фотографии и графические элементы),
                                    публикуемые
                                    Пользователем. Однако, публикуя такие материалы на ресурсе Пользователь передает
                                    www.tophotels.ru международную, неэксклюзивную и безвозмездную лицензию (разрешение)
                                    на
                                    использование, распространение, адаптацию и публикацию данных материалов с целью
                                    описания и рекламы описываемого отеля или услуги. Срок действия разрешения
                                    заканчивается, когда Пользователь, либо администрация www.tophotels.ru убирает
                                    данные
                                    материалы со страниц сайта. <br>
                                    5.5.Администрация ресурса не несёт ответственности за корректность представленной в
                                    отзывах и комментариях информации. www.tophotels.ru не обеспечивает контроль
                                    материалов,
                                    публикуемых Пользователями на ресурсе, и, вследствие этого, не гарантирует точность,
                                    целостность или качество данных материалов. Пользователь самостоятельно должен
                                    оценивать
                                    потенциальный риск и нести полную ответственность за использование любых материалов,
                                    включая уверенность в их точности, полноте и полезности. <br>
                                    5.6.Администраторы могут просматривать, либо не просматривать материалы перед их
                                    публикацией. Представители www.tophotels.ru имеют право (но не обязанность)
                                    отслеживать,
                                    отклонять или переносить любые материалы, доступные с помощью Сервиса. <br>
                                    5.7.Пользователям ЗАПРЕЩЕНО размещать на ресурсе любые материалы, распространение
                                    которых запрещено действующим законодательством Российской Федерации и/или нормами
                                    международного права. Пользователь несет ответственность за несоответствие
                                    содержания
                                    рекламно-информационных материалов, действующему законодательству РФ, в том числе,
                                    нормам федеральных законов «О рекламе», «О средствах массовой информации», «Об
                                    авторском
                                    праве и смежных правах», «О товарных знаках, знаках обслуживания и наименованиях
                                    мест
                                    происхождения товаров». Пользователь гарантирует, что публикуемые им материалы не
                                    являются ненадлежащей рекламой, а также не нарушают неприкосновенность частной
                                    жизни,
                                    личной и семейной тайны, других охраняемых законом прав и интересов третьих лиц.</p>
                                <p class="about-project-text"><strong>6.Ограничение ответственности</strong>
                                </p>
                                <p class="about-project-text">6.1.Администраторы сайта прилагают все надлежащие усилия
                                    по
                                    обеспечению корректности всей информации, размещенной на Сайте. Вместе с тем не
                                    гарантируют абсолютную точность, полноту или достоверность информации, содержащейся
                                    на
                                    Сайте, не отвечают за неточности, возможные ошибки или другие недостатки в
                                    размещаемой
                                    информации. <br>
                                    6.2.Оценка качества размещенной на Сайте информации, ее актуальности, полноты и
                                    применимости - в ведении и компетенции Пользователя. <br>
                                    6.3.www.tophotels.ru не предоставляет никаких гарантий. Информация и услуги,
                                    предлагаемые на сайте, могут быть неточными, так как большинство данной информации
                                    предоставляется непосредственно поставщиками услуг. <br>
                                    6.4.Администраторы не гарантируют, что: <br>
                                    - сервис будет соответствовать вашим требованиям;<br>
                                    - результаты, полученные в процессе пользования сервисом, будут точными или
                                    достоверными; <br>
                                    - качество любых услуг, информации, или других материалов, приобретаемых вами с
                                    помощью
                                    ресурса, будут соответствовать вашим требованиям. <br>
                                    6.5.Рейтинги отелей, отражаемые на данном сайте, могут быть использованы только в
                                    качестве общих рекомендаций.<br>
                                    6.6. Администраторы www.tophotels.ru и/или работающие с ним третьи лица могут
                                    вносить
                                    изменения в информацию на данном сайте в любое время.<br>
                                    6.7.Партнеры www.tophotels.ru, включая, без ограничений, отели, туристические
                                    агентства
                                    и туристических операторов, предоставляющие туристические или какие-либо другие
                                    услуги
                                    посредством сервиса www.tophotels.ru не являются агентами или представителями
                                    www.tophotels.ru.<br>
                                    6.8. www.tophotels.ru не несет ответственность за действия, ошибки, обещания,
                                    гарантии
                                    своих партнеров или третьих лиц, размещающих информацию на ресурсе, а также за
                                    нарушения
                                    или несоблюдения ими договоров, равно как и за любой материальный, моральный прямой
                                    или
                                    косвенный ущерб, или любые другие потери, возникающие вследствие вышеуказанного.
                                    <br>
                                    6.9.Администраторы сайта не могут нести ответственность за любой прямой, косвенный
                                    убыток, связанный с использованием данного сайта, или с задержкой или невозможностью
                                    его
                                    использования, а также за любую информацию, продукты и услуги, приобретенные
                                    посредством
                                    данного сайта, или другим способом полученные с его помощью. <br>
                                    6.10.Данный сайт содержит гиперссылки на Интернет-ресурсы, управляемые лицами, не
                                    связанными с www.tophotels.ru. Эти гиперссылки публикуются исключительно в
                                    информационных и ознакомительных целях. Администратор не контролирует эти
                                    Интернет-ресурсы и не несет ответственности за их содержимое и использование данного
                                    содержимого Пользователями. <br>
                                    6.11.Пользователь несет ответственность по искам и претензиям третьих лиц к
                                    администраторам сайта и лично Пользователю за нарушения, вызванные размещением им
                                    информационных материалов.<br>
                                    6.12.Администраторы ресурса не несут ответственности за временные технические сбои и
                                    перерывы в предоставлении услуг, за временные сбои и перерывы в работе линий связи,
                                    иные
                                    аналогичные сбои, а также за неполадки компьютера, с которого Пользователь
                                    осуществляет
                                    выход в Интернет.</p>
                                <p class="about-project-text"><strong>7.Разрешение споров и применяемая
                                        правовая норма</strong></p>
                                <p class="about-project-text">7.1.В случае публикации материалов, содержащихся на
                                    страницах
                                    сайта, без соблюдения условий изложенных в настоящем Соглашении, администраторы
                                    оставляют за собой право на защиту своих нарушенных прав в соответствии с
                                    действующим
                                    гражданским законодательством и законодательством об авторском праве и смежных
                                    правах.<br>
                                    7.2.При обнаружении фактов нарушения условий настоящего Соглашения Администратор
                                    отправляет «нарушителю» досудебное уведомление с требованием устранить выявленные
                                    нарушения в установленный срок. При неисполнении указанных требований защита
                                    нарушенных
                                    прав и взыскание причиненных убытков производится в судебном порядке по месту
                                    регистрации правообладателя Сайта www.tophotels.ru<br>
                                    7.3.Любые судебные процессы по данному Соглашению будут проводиться в Российской
                                    Федерации в г. Москве, в соответствии с подсудностью судов судебной системы в РФ и
                                    условиями настоящего Соглашения.</p>
                                <p class="about-project-text"><strong>8.Заключительные положения</strong></p>
                                <p class="about-project-text">8.1.Если Вы не согласны с Условиями пользования, или
                                    какой-либо их частью, пожалуйста, воздержитесь от использования ресурса
                                    www.tophotels.ru.&nbsp;<br>
                                    <br>
                                    Администраторы ресурса<br>
                                    www.tophotels.ru<span id="ctrlcopy"><br><br>Читать полностью на&nbsp;<a
                                                href="https://www.tophotels.ru/about/agreement">https://www.tophotels.ru/about/agreement</a></span>
                                </p></div>


                        </div>
                    </div>


                    <div class="panel" id="confidentialityPanel" style="display: none">
                        <div class="agreement-pp__role-site">

                            <div class="roles-wrapper">
                                <p>Сайт www.tophotels.ru серьезно относится к вопросам защиты Вашей конфиденциальности и
                                    с удовольствием
                                    представляет Вам эту Политику, чтобы проинформировать Вас о мерах, принимаемых нами
                                    в процессе
                                    сбора, использования и охраны персональной информации о наших посетителях и
                                    зарегистрированных
                                    пользователях нашего сайта. Персональная информация – информация, способная служить
                                    для
                                    идентификации человека, например: Ваше имя, адрес e-mail, номер телефона, почтовый
                                    адрес и т.д.

                                    Используя данный сайт, Вы соглашаетесь со следующими условиями:
                                </p>
                                <p><strong>2. ИСПОЛЬЗОВАНИЕ ИНФОРМАЦИИ</strong></p>
                                <p>Сайт <a href="#"> www.tophotels.ru </a> использует Вашу персональную информацию в
                                    следующих целях:

                                </p>
                                <p class="mb5"> • чтобы подтвердить Ваше право на доступ к определенным функциям
                                    сайта;</p>
                                <p class="mb5"> • чтобы осуществить Ваш запрос продуктов или услуг;</p>
                                <p class="mb5"> • чтобы персонализировать и модифицировать содержимое сайта и доступные
                                    предложения
                                    согласно Вашим запросам;</p>
                                <p class="mb5"> • для контакта с Вами, например, если Вы подписаны на нашу рассылку;</p>
                                <p class="mb10"> • для улучшения предоставляемого нами сервиса;</p>
                                <p> • для составления отчетов.

                                </p>


                                <p><strong class="uppercase">3. Раскрытие информации</strong></p>
                                <p>Сайт <a href="#">www.tophotels.ru</a> не дает в аренду, не продает и не делится Вашей
                                    персональной
                                    информацией с
                                    другими людьми и компаниями, кроме случаев (1) когда это необходимо для
                                    предоставления Вам продуктов
                                    и услуг, заказанных Вами, включая, без ограничений, продукты и услуги от третьих
                                    лиц, (2) когда у
                                    нас есть соответствующее разрешение от Вас, (3) когда действуют следующие условия:
                                </p>
                                <p class="mb5">
                                    • Сайт <a href="#">www.tophotels.ru</a> может пользоваться услугами третьих лиц,
                                    помогающих в
                                    осуществлении доступа
                                    к нашим продуктам и услугам, и может передавать персональную информацию этим лицам,
                                    заключившим с
                                    нами контракт об обеспечении конфиденциальности Вашей информации, разрешающий лицу
                                    использовать эту
                                    информацию только в целях, оговоренных в контракте;</p>
                                <p class="mb5"> • при вызове в судебные инстанции, по решению суда, а также в целях
                                    сохранения наших
                                    законных прав и защиты от судебных исков;</p>
                                <p class="mb5"> • когда мы считаем, что передача информации может поспособствовать
                                    расследованию,
                                    воспрепятствовать или принять меры относительно незаконной деятельности, при
                                    подозрении в
                                    мошенничестве, в ситуациях, подразумевающих угрозу физической безопасности человека,
                                    при нарушениях
                                    Соглашения об условиях пользования ресурсом cайта <a href="#">www.tophotels.ru</a>
                                    или когда
                                    передача этой
                                    информации требуется по закону;</p>
                                <p class="mb10"> • мы можем передать информацию о Вас третьим лицам в том случае, если
                                    сайт
                                    <a href="#">www.tophotels.ru</a> будет приобретен или станет частью другой компании.
                                    В этом случае,
                                    сайт
                                    <a href="#">www.tophotels.ru</a> пришлет Вам соответствующее уведомление на адрес
                                    e-mail, указанный
                                    в вашем профиле
                                    на сайте <a href="#">www.tophotels.ru</a> , прежде чем другая Политика
                                    конфиденциальности вступит в
                                    силу по отношению
                                    к Вашей персональной информации.</p>


                                <p><strong class="uppercase"> 4. Файлы сookies</strong>
                                </p>
                                <p>Сайт <a href="#">Сайт </a><a href="#">www.tophotels.ru </a> оставляет файлы cookies
                                    на Вашем компьютере и
                                    имеет доступ к ним. Файл cookie представляет собой небольшой объем информации,
                                    который серверы
                                    сайта www.tophotels.ru переносят к Вам в браузер, и который может быть прочитан
                                    только серверами
                                    сайта www.tophotels.ru. Когда Вы посещаете сайт, файл cookie сохраняет особые
                                    данные,
                                    позволяющие ускорить процесс пользования сайтом. Вы можете деактивировать файлы
                                    cookies или
                                    удалить их из своего браузера в секции «Настройки конфиденциальности» или
                                    «Безопасность». Однако
                                    функция cookies должна быть активирована для просмотра некоторых секций сайта
                                    www.tophotels.ru.
                                    Сайт www.tophotels.ru может позволить другим компаниям, публикующим свою рекламу на
                                    наших
                                    страницах, оставлять свои файлы cookies на Вашем компьютере и иметь доступ к ним.
                                    Использование
                                    файлов cookies другими компаниями определяется их политикой конфиденциальности, а не
                                    политикой
                                    конфиденциальности сайта www.tophotels.ru. Другие компании не могут получить доступ
                                    к файлам
                                    cookies сайта www.tophotels.ru.Сайт www.tophotels.ru оставляет файлы cookies на
                                    Вашем компьютере
                                    и имеет доступ к ним. Файл cookie представляет собой небольшой объем информации,
                                    который серверы
                                    сайта www.tophotels.ru переносят к Вам в браузер, и который может быть прочитан
                                    только серверами
                                    сайта www.tophotels.ru. Когда Вы посещаете сайт, файл cookie сохраняет особые
                                    данные,
                                    позволяющие ускорить процесс пользования сайтом. Вы можете деактивировать файлы
                                    cookies или
                                    удалить их из своего браузера в секции «Настройки конфиденциальности» или
                                    «Безопасность». Однако
                                    функция cookies должна быть активирована для просмотра некоторых секций сайта
                                    www.tophotels.ru.
                                    Сайт www.tophotels.ru может позволить другим компаниям, публикующим свою рекламу на
                                    наших
                                    страницах, оставлять свои файлы cookies на Вашем компьютере и иметь доступ к ним.
                                    Использование
                                    файлов cookies другими компаниями определяется их политикой конфиденциальности, а не
                                    политикой
                                    конфиденциальности сайта www.tophotels.ru. Другие компании не могут получить доступ
                                    к файлам
                                    cookies сайта www.tophotels.ru.Сайт www.tophotels.ru оставляет файлы cookies на
                                    Вашем компьютере
                                    и имеет доступ к ним. Файл cookie представляет собой небольшой объем информации,
                                    который серверы
                                    сайта www.tophotels.ru переносят к Вам в браузер, и который может быть прочитан
                                    только серверами
                                    сайта www.tophotels.ru. Когда Вы посещаете сайт, файл cookie сохраняет особые
                                    данные,
                                    позволяющие ускорить процесс пользования сайтом. Вы можете деактивировать файлы
                                    cookies или
                                    удалить их из своего браузера в секции «Настройки конфиденциальности» или
                                    «Безопасность». Однако
                                    функция cookies должна быть активирована для просмотра некоторых секций сайта
                                    www.tophotels.ru.
                                    Сайт www.tophotels.ru может позволить другим компаниям, публикующим свою рекламу на
                                    наших
                                    страницах, оставлять свои файлы cookies на Вашем компьютере и иметь доступ к ним.
                                    Использование
                                    файлов cookies другими компаниями определяется их политикой конфиденциальности, а не
                                    политикой
                                    конфиденциальности сайта www.tophotels.ru. Другие компании не могут получить доступ
                                    к файлам
                                    cookies сайта www.tophotels.ru.www.tophotels.ru оставляет файлы cookies на Вашем
                                    компьютере
                                    и имеет доступ к ним. Файл cookie
                                    представляет собой небольшой объем информации, который серверы сайта <a href="#">www.tophotels.ru </a>
                                    переносят к
                                    Вам в браузер, и который может быть прочитан только серверами сайта. Когда Вы
                                    посещаете сайт, файл cookie сохраняет особые данные, позволяющие ускорить процесс
                                    пользования
                                    сайтом. Вы можете деактивировать файлы cookies или удалить их из своего браузера в
                                    секции «Настройки
                                    конфиденциальности» или «Безопасность». Однако функция cookies должна быть
                                    активирована для
                                    просмотра некоторых секций сайта <a href="#">www.tophotels.ru </a> . Сайт <a
                                            href="#">www.tophotels.ru </a>
                                    может позволить другим
                                    компаниям, публикующим свою рекламу на наших страницах, оставлять свои файлы cookies
                                    на Вашем
                                    компьютере и иметь доступ к ним. Использование файлов cookies другими компаниями
                                    определяется их
                                    политикой конфиденциальности, а не политикой конфиденциальности сайта <a href="#">www.tophotels.ru </a>
                                    . Другие
                                    компании не могут получить доступ к файлам cookies сайта <a href="#">www.tophotels.ru </a>
                                    .

                                </p>


                                <p><strong class="uppercase">5. Ссылки на третьи сайты</strong>
                                </p>
                                <p>Сайт <a href="#">www.tophotels.ru </a> предоставляет ссылки на третьи сайты и может
                                    информировать
                                    пользователей о
                                    продуктах и услугах третьих лиц. Если Вы принимаете решение посетить третий сайт или
                                    воспользоваться
                                    предлагаемыми на нем продуктами или услугами, помните, что данная Политика
                                    конфиденциальности не
                                    будет считаться действительной по отношению к предпринимаемым Вами действиям и
                                    информации,
                                    предоставляемой Вами третьему лицу. Мы настоятельно рекомендуем Вам прочесть
                                    Политику
                                    конфиденциальности на посещаемом Вами ресурсе.

                                </p>

                                <p><strong class="uppercase">6. Конфиденциальность и безопасность</strong>
                                </p>
                                <p>Мы предоставляем Вашу персональную информацию только тем работникам нашей компании,
                                    которые
                                    действительно нуждаются в ней для предоставления Вам продуктов или услуг и для
                                    выполнения своих
                                    непосредственных рабочих задач. Сайт www.tophotels.ru предпринимает процессуальные и
                                    технические
                                    меры для того, чтобы предотвратить потерю, неправомерное использование Вашей
                                    персональной
                                    информации, а также несанкционированный доступ к ней и ее распространение. Мы
                                    прикладываем
                                    максимальные усилия для хранения Вашей информации в безопасной среде, недоступной
                                    посторонним.

                                </p>


                                <p><strong class="uppercase">7. Обмен информацией между пользователями сайта
                                        www.tophotels.ru</strong>
                                </p>
                                <p>Если Вы включаете персональную информацию в свои комментарии на сайте, открытые
                                    текстовые поля или в
                                    другие секции сайта, предназначенные для публичного просмотра, другие пользователи
                                    смогут
                                    просматривать эту информацию и пользоваться ей. Мы не рекомендуем публикацию вашего
                                    адреса e-mail и
                                    другой персональной информации таким путем, если Вы хотите избежать нежелательных
                                    контактов.

                                    Чтобы обеспечить Вашу конфиденциальность, сайт www.tophotels.ru не показывает Ваш
                                    адрес e-mail или
                                    контактную информацию другим пользователям, кроме тех случаев, когда Вы лично
                                    запрашиваете обратное.

                                </p>

                                <p><strong class="uppercase">8. Доступ, просмотр и изменение Вашей персональной
                                        информации</strong>
                                </p>
                                <p>
                                </p>
                                <p class="mb20">Мы предлагаем Вам возможность получать доступ к определенной информации,
                                    просматривать и
                                    изменять ее через личный кабинет.</p>

                                <p class="mb20">По Вашей просьбе мы можем деактивировать Ваш профиль и скрыть Вашу
                                    персональную
                                    информацию с проекта. Вам будет направлено письмо с запросом подтверждения удаления
                                    учетной записи.
                                    После получения утвердительного ответа от Вас, профиль будет деактивирован в
                                    максимально короткие
                                    сроки в зависимости от Вашей активности в профиле. Мы сохраним определенную часть
                                    Вашей персональной
                                    информации в наших файлах и базах данных с целью анализа и учета, а также для того,
                                    чтобы
                                    предотвратить возможное мошенничество, разрешать возможные конфликты, помогать в
                                    устранении проблем,
                                    помогать в каких-либо расследованиях, обеспечивать выполнение наших Правил
                                    пользования и действовать
                                    в соответствии с действующим законодательством.</p>

                                <p class="mb20">Помните, что при деактивации учетной записи, Вы не сможете
                                    авторизоваться на проекте по
                                    данным этой учетной записи и пользоваться некоторыми сервисами проекта. Тем не
                                    менее, Вы всегда
                                    можете отправить запрос на восстановление учетной записи при помощи формы обратной
                                    связи, либо
                                    создать новую учетную запись.</p>

                                <p><strong class="uppercase">9. Изменения в Политике конфиденциальности</strong>
                                </p>
                                <p>Сайт www.tophotels.ru может изменять данную Политику конфиденциальности. Мы уведомим
                                    Вас о любых
                                    существенных изменениях посредством размещения уведомления на сайте.</p>

                            </div>

                        </div>


                    </div>


                </div>
            </div>

        </div>
    </div>
</div>