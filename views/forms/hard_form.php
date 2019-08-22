<?php
/* @var $this yii\web\View */
/* @var $countries \app\models\DictCountry */
/* @var $city \app\models\DictCity */
?>
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
                        <div class="bth__inp-block js-show-formDirections" id="select_country">
                            <span class="bth__inp-lbl active">Страна поездки</span>
                            <span class="bth__inp  uppercase ">Не важно</span>
                        </div>
                        <div class="formDirections w100p" style="display: none;">
                            <div class="formDirections__wrap w100p">
                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                </div>
                                <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                    <div class="SumoSelect open" tabindex="0"><select id="sumo-direction"
                                                                                      class="SumoUnder" tabindex="-1">
                                            <?php foreach ($countries as $country):?>
                                                <option data-val="<?=$country->id?>"><?=$country->name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tour-selection-field tour-selection-field--180">
                    <div class="bth__inp-block js-show-formDirections" id="select_city">
                        <span class="bth__inp-lbl active">Город</span>
                        <span class="bth__inp  uppercase ">Не важно</span>
                    </div>
                    <div class="formDirections w100p" style="display: none;">
                        <div class="formDirections__wrap w100p" id="country_selected" style="display: none">
                            <div class="formDirections__top  formDirections__top-line">
                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey " id="country_for_city_select">

                                </div>
                            </div>
                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                <div class="SumoSelect open" tabindex="0">
                                    <select id="sumo-direction-city" class="SumoUnder" tabindex="-1">
                                        <option value hidden selected>Не важно</option>
                                        <?php foreach ($cities as $city):?>
                                            <option data-val="<?=$city->country?>"><?=$city->name?></option>
                                        <?php endforeach;?>
                                    </select></div>
                            </div>

                        </div>
                        <div class="formDirections__wrap w100p" id="country_not_selected">
                            <div class="formDirections__top  formDirections__top-line">
                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey ">Укажите страну</div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tour-selection-field tour-selection-field--200">
                    <div class="bth__inp-block js-show-formDirections" id="select_department">
                        <span class="bth__inp-lbl active">Город вылета</span>
                        <span class="bth__inp  uppercase ">Без перелета</span>
                    </div>


                    <div class="formDirections w100p" style="display: none;">
                        <div class="formDirections__wrap w100p">

                            <div class="formDirections__top  formDirections__top-line">

                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey ">Город вылета</div>
                            </div>

                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                <div class="SumoSelect open" tabindex="0">
                                    <select id="sumo-department" class="SumoUnder" tabindex="-1">
                                        <option>Москва</option>
                                        <option>Санкт-Петербург</option>
                                        <option>Алматы</option>
                                        <option>Астана</option>
                                        <option>Белгород</option>
                                        <option>Брянск</option>
                                        <option>Владикавказ</option>
                                        <option>Волгоград</option>
                                        <option>Воронеж</option>
                                        <option>Гомель</option>
                                        <option>Гродно</option>
                                        <option>Екатеринбург</option>
                                        <option>Иркутск</option>
                                        <option>Калининград</option>
                                        <option>Киев</option>
                                        <option>Краснодар</option>
                                        <option>Красноярск</option>
                                        <option>Магадан</option>
                                        <option>Махачкала</option>
                                        <option>Минеральные воды</option>
                                        <option>Мурманск</option>
                                        <option>Набережные Челны</option>
                                        <option>Нижний Новгород</option>
                                        <option>Новосибирск</option>
                                        <option>Омск</option>
                                        <option>Оренбург</option>
                                        <option>Пенза</option>
                                        <option>Ростов-на-Дону</option>
                                        <option>Саратов</option>
                                        <option>Симферополь</option>
                                        <option>Смоленск</option>
                                        <option>Сочи</option>
                                        <option>Томск</option>
                                        <option>Ульяновск</option>
                                        <option>Харьков</option>
                                        <option>Челябинск</option>
                                        <option>Шымкент</option>
                                        <option>Якутск</option>
                                        <option>Ярославль</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-selection-field tour-selection-field--180">
                    <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                        <span class="bth__inp-lbl active">Параметры отеля</span>
                        <span class="bth__inp">
                                    <b> 4 / 36 </b>
                                </span>
                    </div>

                    <div class="formDirections   formDirections--big-mobile formDirections--char hotel-params-form"
                         style="display: none;">

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
                                                    <input type="checkbox" class="cbx" id="catalog-positionckd" name="place_type[]"
                                                           checked="" value="любой тип">
                                                    <label class="label-cbx" for="catalog-positionckd">
                                                        <span class="cbx-cnt">Любой тип</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Пляжный</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="catalog-position1" name="place_type[]"
                                                           value="пляжный - 1-я линия от моря">
                                                    <label class="label-cbx" for="catalog-position1">
                                                        <span class="cbx-cnt">1-я линия от моря</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16   ">
                                                    <input type="checkbox" class="cbx" id="catalog-position2" name="place_type[]"
                                                           value="пляжный - 2-я линия от моря">
                                                    <label class="label-cbx" for="catalog-position2">
                                                        <span class="cbx-cnt">2-я линия от моря </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position3" name="place_type[]"
                                                           value="пляжный - 3-я линия от моря">
                                                    <label class="label-cbx" for="catalog-position3">
                                                        <span class="cbx-cnt"> 3-я линия от моря</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position4" name="place_type[]"
                                                           value="пляжный - через дорогу">
                                                    <label class="label-cbx" for="catalog-position4">
                                                        <span class="cbx-cnt">Через дорогу </span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Горнолыжный</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position5" name="place_type[]"
                                                           value="горнолыжный - близко">
                                                    <label class="label-cbx" for="catalog-position5">
                                                        <span class="cbx-cnt">Близко</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position6" name="place_type[]"
                                                           value="горнолыжный - далеко">
                                                    <label class="label-cbx" for="catalog-position6">
                                                        <span class="cbx-cnt">Далеко </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position7" name="place_type[]"
                                                           value="горнолыжный - рядом">
                                                    <label class="label-cbx" for="catalog-position7">
                                                        <span class="cbx-cnt"> Рядом</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Загородный</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="catalog-position8" name="place_type[]"
                                                           value="загородный - близко">
                                                    <label class="label-cbx" for="catalog-position8">
                                                        <span class="cbx-cnt">Близко</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position9" name="place_type[]"
                                                           value="загородный - далеко">
                                                    <label class="label-cbx" for="catalog-position9">
                                                        <span class="cbx-cnt">Далеко </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position10" name="place_type[]"
                                                           value="загородный - рядом">
                                                    <label class="label-cbx" for="catalog-position10">
                                                        <span class="cbx-cnt"> Рядом</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Городской</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="catalog-position11" name="place_type[]"
                                                           value="городской - близко к центру">
                                                    <label class="label-cbx" for="catalog-position11">
                                                        <span class="cbx-cnt">Близко к центру</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position12" name="place_type[]"
                                                           value="городской - окраина">
                                                    <label class="label-cbx" for="catalog-position12">
                                                        <span class="cbx-cnt">Окраина </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position13" name="place_type[]"
                                                           value="городской - центр">
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
                                                    <input type="checkbox" class="cbx" id="333eat2-typeckd" checked name="nc[]" value="all">
                                                    <label class="label-cbx" for="333eat2-typeckd">
                                                        <span class="cbx-cnt">Любое питание</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type1" name="nc[]" value="ai">
                                                    <label class="label-cbx" for="333eat2-type1">
                                                        <span class="cbx-cnt">AI Все включено</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type2" name="nc[]" value="fb">
                                                    <label class="label-cbx" for="333eat2-type2">
                                                        <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type3" name="nc[]" value="hb">
                                                    <label class="label-cbx" for="333eat2-type3">
                                                        <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block     cbx-block--16">
                                                    <input type="checkbox" class="cbx" id="333eat2-type4" name="nc[]" value="bb">
                                                    <label class="label-cbx" for="333eat2-type4">
                                                        <span class="cbx-cnt"> BB Завтрак</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type5" name="nc[]" value="ro">
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
                                                    <input type="checkbox" class="cbx" name="stars" value="all" id="333stars-ckd" checked="">
                                                    <label class="label-cbx " for="333stars-ckd">
                                                        <span class="cbx-cnt">Любая категория</span>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" name="stars" value="5*" id="333stars-5">
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
                                                    <input type="checkbox" class="cbx" name="stars" value="4*" id="333stars-4">
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
                                                    <input type="checkbox" class="cbx" name="stars" value="3*" id="333stars-3">
                                                    <label class="label-cbx " for="333stars-3">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-2" name="stars" value="2*">
                                                    <label class="label-cbx " for="333stars-2">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-1" name="stars" value="1*">
                                                    <label class="label-cbx " for="333stars-1">
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-hv1" name="stars" value="hv1">
                                                    <label class="label-cbx" for="333stars-hv1">
                                                        <span class="cbx-cnt">HV1</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-hv2" name="stars" value="hv2">
                                                    <label class="label-cbx" for="333stars-hv2">
                                                        <span class="cbx-cnt">HV2</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block    cbx-block--16">
                                                    <input type="checkbox" class="cbx" id="no-stars" name="stars" value="без категории">
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
                                                <input type="radio" name="333rating_0" class="rbt" value="all" id="333ratingckd" checked>
                                                <label class="label-rbt" for="333ratingckd">
                                                    <span class="rbt-cnt  uppercase">Любой рейтинг</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_0" class="rbt " value="не важно" id="333rating1">
                                                <label class="label-rbt" for="333rating1">
                                                    <span class="rbt-cnt  uppercase">Не важно</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_0" class="rbt " value="4.75" id="333rating3">
                                                <label class="label-rbt" for="333rating3">
                                                    <span class="rbt-cnt  uppercase"> Не ниже 4,75</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_0" class="rbt " value="4.5" id="333rating4">
                                                <label class="label-rbt" for="333rating4">
                                                    <span class="rbt-cnt  uppercase">  Не ниже 4,5</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_0" class="rbt " value="4.25" id="333rating5">
                                                <label class="label-rbt" for="333rating5">
                                                    <span class="rbt-cnt  uppercase">  Не ниже 4,25</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_0" class="rbt " value="4" id="333rating6">
                                                <label class="label-rbt" for="333rating6">
                                                    <span class="rbt-cnt  uppercase">Не ниже 4,0</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_0" class="rbt " value="3.75" id="333rating7">
                                                <label class="label-rbt" for="333rating7">
                                                    <span class="rbt-cnt  uppercase">Не ниже 3,75</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_0" class="rbt " value="3.5" id="333rating8">
                                                <label class="label-rbt" for="333rating8">
                                                    <span class="rbt-cnt  uppercase">     Не ниже 3,5</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_0" class="rbt " value="3.25" id="333rating9">
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
                                                    <input type="checkbox" class="cbx" id="333kid1" name="kids[]" value="детский горшок">
                                                    <label class="label-cbx" for="333kid1">
                                                        <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333kid2" name="kids[]" value="детские блюда">
                                                    <label class="label-cbx" for="333kid2">
                                                        <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333kid3" name="kids[]" value="пеленальный столик">
                                                    <label class="label-cbx" for="333kid3">
                                                        <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333kid4" name="kids[]" value="анимация">
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
                                                    <input type="checkbox" class="cbx" id="333other1" name="other[]" value="веселая анимация">
                                                    <label class="label-cbx" for="333other1">
                                                        <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333other2" name="other[]" value="тусовки рядом с отелем">
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
                        <div class="bth__inp-block js-show-formDirections" id="select_country">
                            <span class="bth__inp-lbl active">Страна поездки</span>
                            <span class="bth__inp  uppercase ">Не важно</span>
                        </div>
                        <div class="formDirections w100p" style="display: none;">
                            <div class="formDirections__wrap w100p">
                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                </div>
                                <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                    <div class="SumoSelect open" tabindex="0"><select id="sumo-direction" class="SumoUnder" tabindex="-1">
                                            <?php foreach ($countries as $country):?>
                                                <option data-val="<?=$country->id?>"><?=$country->name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tour-selection-field tour-selection-field--180">
                    <div class="bth__inp-block js-show-formDirections" id="select_city">
                        <span class="bth__inp-lbl active">Город</span>
                        <span class="bth__inp  uppercase ">Не важно</span>
                    </div>
                    <div class="formDirections w100p" style="display: none;">
                        <div class="formDirections__wrap w100p" id="country_selected" style="display: none">
                            <div class="formDirections__top  formDirections__top-line">
                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey " id="country_for_city_select">

                                </div>
                            </div>
                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                <div class="SumoSelect open" tabindex="0">
                                    <select id="sumo-direction-city" class="SumoUnder" tabindex="-1">
                                        <?php foreach ($cities as $city):?>
                                            <option data-val="<?=$city->country?>"><?=$city->name?></option>
                                        <?php endforeach;?>
                                    </select></div>
                            </div>

                        </div>
                        <div class="formDirections__wrap w100p" id="country_not_selected">
                            <div class="formDirections__top  formDirections__top-line">
                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey ">Укажите страну</div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tour-selection-field tour-selection-field--200">
                    <div class="bth__inp-block js-show-formDirections" id="select_department">
                        <span class="bth__inp-lbl active">Город вылета</span>
                        <span class="bth__inp  uppercase ">Без перелета</span>
                    </div>


                    <div class="formDirections w100p" style="display: none;">
                        <div class="formDirections__wrap w100p">

                            <div class="formDirections__top  formDirections__top-line">

                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey ">Город вылета</div>
                            </div>

                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                <div class="SumoSelect open" tabindex="0">
                                    <select id="sumo-department" class="SumoUnder" tabindex="-1">
                                        <option>Москва</option>
                                        <option>Санкт-Петербург</option>
                                        <option>Алматы</option>
                                        <option>Астана</option>
                                        <option>Белгород</option>
                                        <option>Брянск</option>
                                        <option>Владикавказ</option>
                                        <option>Волгоград</option>
                                        <option>Воронеж</option>
                                        <option>Гомель</option>
                                        <option>Гродно</option>
                                        <option>Екатеринбург</option>
                                        <option>Иркутск</option>
                                        <option>Калининград</option>
                                        <option>Киев</option>
                                        <option>Краснодар</option>
                                        <option>Красноярск</option>
                                        <option>Магадан</option>
                                        <option>Махачкала</option>
                                        <option>Минеральные воды</option>
                                        <option>Мурманск</option>
                                        <option>Набережные Челны</option>
                                        <option>Нижний Новгород</option>
                                        <option>Новосибирск</option>
                                        <option>Омск</option>
                                        <option>Оренбург</option>
                                        <option>Пенза</option>
                                        <option>Ростов-на-Дону</option>
                                        <option>Саратов</option>
                                        <option>Симферополь</option>
                                        <option>Смоленск</option>
                                        <option>Сочи</option>
                                        <option>Томск</option>
                                        <option>Ульяновск</option>
                                        <option>Харьков</option>
                                        <option>Челябинск</option>
                                        <option>Шымкент</option>
                                        <option>Якутск</option>
                                        <option>Ярославль</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-selection-field tour-selection-field--180">
                    <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                        <span class="bth__inp-lbl active">Параметры отеля</span>
                        <span class="bth__inp">
                                    <b> 4 / 36 </b>
                                </span>
                    </div>

                    <div class="formDirections   formDirections--big-mobile formDirections--char hotel-params-form"
                         style="display: none;">

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
                                                    <input type="checkbox" class="cbx" id="catalog-positionckd_opt2" name="place_type[]"
                                                           checked="" value="любой тип">
                                                    <label class="label-cbx" for="catalog-positionckd_opt2">
                                                        <span class="cbx-cnt">Любой тип</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Пляжный</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="catalog-position1_opt2" name="place_type[]"
                                                           value="пляжный - 1-я линия от моря">
                                                    <label class="label-cbx" for="catalog-position1_opt2">
                                                        <span class="cbx-cnt">1-я линия от моря</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16   ">
                                                    <input type="checkbox" class="cbx" id="catalog-position2_opt2" name="place_type[]"
                                                           value="пляжный - 2-я линия от моря">
                                                    <label class="label-cbx" for="catalog-position2_opt2">
                                                        <span class="cbx-cnt">2-я линия от моря </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position3_opt2" name="place_type[]"
                                                           value="пляжный - 3-я линия от моря">
                                                    <label class="label-cbx" for="catalog-position3_opt2">
                                                        <span class="cbx-cnt"> 3-я линия от моря</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position4_opt2" name="place_type[]"
                                                           value="пляжный - через дорогу">
                                                    <label class="label-cbx" for="catalog-position4_opt2">
                                                        <span class="cbx-cnt">Через дорогу </span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Горнолыжный</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position5_opt2" name="place_type[]"
                                                           value="горнолыжный - близко">
                                                    <label class="label-cbx" for="catalog-position5_opt2">
                                                        <span class="cbx-cnt">Близко</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position6_opt2" name="place_type[]"
                                                           value="горнолыжный - далеко">
                                                    <label class="label-cbx" for="catalog-position6_opt2">
                                                        <span class="cbx-cnt">Далеко </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position7_opt2" name="place_type[]"
                                                           value="горнолыжный - рядом">
                                                    <label class="label-cbx" for="catalog-position7_opt2">
                                                        <span class="cbx-cnt"> Рядом</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Загородный</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="catalog-position8_opt2" name="place_type[]"
                                                           value="загородный - близко">
                                                    <label class="label-cbx" for="catalog-position8_opt2">
                                                        <span class="cbx-cnt">Близко</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position9_opt2" name="place_type[]"
                                                           value="загородный - далеко">
                                                    <label class="label-cbx" for="catalog-position9_opt2">
                                                        <span class="cbx-cnt">Далеко </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position10_opt2" name="place_type[]"
                                                           value="загородный - рядом">
                                                    <label class="label-cbx" for="catalog-position10_opt2">
                                                        <span class="cbx-cnt"> Рядом</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Городской</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="catalog-position11_opt2" name="place_type[]"
                                                           value="городской - близко к центру">
                                                    <label class="label-cbx" for="catalog-position11_opt2">
                                                        <span class="cbx-cnt">Близко к центру</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position12_opt2" name="place_type[]"
                                                           value="городской - окраина">
                                                    <label class="label-cbx" for="catalog-position12_opt2">
                                                        <span class="cbx-cnt">Окраина </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position13_opt2" name="place_type[]"
                                                           value="городской - центр">
                                                    <label class="label-cbx" for="catalog-position13_opt2">
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
                                                    <input type="checkbox" class="cbx" id="333eat2-typeckd_opt2" checked name="nc[]" value="all">
                                                    <label class="label-cbx" for="333eat2-typeckd_opt2">
                                                        <span class="cbx-cnt">Любое питание</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type1_opt2" name="nc[]" value="ai">
                                                    <label class="label-cbx" for="333eat2-type1_opt2">
                                                        <span class="cbx-cnt">AI Все включено</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type2_opt2" name="nc[]" value="fb">
                                                    <label class="label-cbx" for="333eat2-type2_opt2">
                                                        <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type3_opt2" name="nc[]" value="hb">
                                                    <label class="label-cbx" for="333eat2-type3_opt2">
                                                        <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block     cbx-block--16">
                                                    <input type="checkbox" class="cbx" id="333eat2-type4_opt2" name="nc[]" value="bb">
                                                    <label class="label-cbx" for="333eat2-type4_opt2">
                                                        <span class="cbx-cnt"> BB Завтрак</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type5_opt2" name="nc[]" value="ro">
                                                    <label class="label-cbx" for="333eat2-type5_opt2">
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
                                                    <input type="checkbox" class="cbx" name="stars" value="all" id="333stars-ckd_opt2" checked="">
                                                    <label class="label-cbx " for="333stars-ckd_opt2">
                                                        <span class="cbx-cnt">Любая категория</span>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" name="stars" value="5*" id="333stars-5_opt2">
                                                    <label class="label-cbx " for="333stars-5_opt2">
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
                                                    <input type="checkbox" class="cbx" name="stars" value="4*" id="333stars-4_opt2">
                                                    <label class="label-cbx " for="333stars-4_opt2">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" name="stars" value="3*" id="333stars-3_opt2">
                                                    <label class="label-cbx " for="333stars-3_opt2">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-2_opt2" name="stars" value="2*">
                                                    <label class="label-cbx " for="333stars-2_opt2">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-1_opt2" name="stars" value="1*">
                                                    <label class="label-cbx " for="333stars-1_opt2">
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-hv1_opt2" name="stars" value="hv1">
                                                    <label class="label-cbx" for="333stars-hv1_opt2">
                                                        <span class="cbx-cnt">HV1</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-hv2_opt2" name="stars" value="hv2">
                                                    <label class="label-cbx" for="333stars-hv2_opt2">
                                                        <span class="cbx-cnt">HV2</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block    cbx-block--16">
                                                    <input type="checkbox" class="cbx" id="no-stars_opt2" name="stars" value="без категории">
                                                    <label class="label-cbx" for="no-stars_opt2">
                                                        <span class="cbx-cnt">Без категории</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formDirections__bottom-blocks js-search-rating" style="display: none">
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_1" class="rbt" value="all" id="333ratingckd_opt2" checked>
                                                <label class="label-rbt" for="333ratingckd_opt2">
                                                    <span class="rbt-cnt  uppercase">Любой рейтинг</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_1" class="rbt " value="не важно" id="333rating1_opt2">
                                                <label class="label-rbt" for="333rating1_opt2">
                                                    <span class="rbt-cnt  uppercase">Не важно</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_1" class="rbt " value="4.75" id="333rating3_opt2">
                                                <label class="label-rbt" for="333rating3_opt2">
                                                    <span class="rbt-cnt  uppercase"> Не ниже 4,75</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_1" class="rbt " value="4.5" id="333rating4_opt2">
                                                <label class="label-rbt" for="333rating4_opt2">
                                                    <span class="rbt-cnt  uppercase">  Не ниже 4,5</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_1" class="rbt " value="4.25" id="333rating5_opt2">
                                                <label class="label-rbt" for="333rating5_opt2">
                                                    <span class="rbt-cnt  uppercase">  Не ниже 4,25</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_1" class="rbt " value="4" id="333rating6_opt2">
                                                <label class="label-rbt" for="333rating6_opt2">
                                                    <span class="rbt-cnt  uppercase">Не ниже 4,0</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_1" class="rbt " value="3.75" id="333rating7_opt2">
                                                <label class="label-rbt" for="333rating7_opt2">
                                                    <span class="rbt-cnt  uppercase">Не ниже 3,75</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_1" class="rbt " value="3.5" id="333rating8_opt2">
                                                <label class="label-rbt" for="333rating8_opt2">
                                                    <span class="rbt-cnt  uppercase">     Не ниже 3,5</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_1" class="rbt " value="3.25" id="333rating9_opt2">
                                                <label class="label-rbt" for="333rating9_opt2">
                                                    <span class="rbt-cnt  uppercase">       Не ниже 3,25</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="formDirections__bottom js-search-kid" style="display: none">

                                        <div class="formDirections__bottom-blocks">

                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333kid1_opt2" name="kids[]" value="детский горшок">
                                                    <label class="label-cbx" for="333kid1_opt2">
                                                        <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333kid2_opt2" name="kids[]" value="детские блюда">
                                                    <label class="label-cbx" for="333kid2_opt2">
                                                        <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333kid3_opt2" name="kids[]" value="пеленальный столик">
                                                    <label class="label-cbx" for="333kid3_opt2">
                                                        <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333kid4_opt2" name="kids[]" value="анимация">
                                                    <label class="label-cbx" for="333kid4_opt2">
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
                                                    <input type="checkbox" class="cbx" id="333other1_opt2" name="other[]" value="веселая анимация">
                                                    <label class="label-cbx" for="333other1_opt2">
                                                        <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333other2_opt2" name="other[]" value="тусовки рядом с отелем">
                                                    <label class="label-cbx" for="333other2_opt2">
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
                <span class=" tour-selection-plus  hide-1023 js-del-field">
                            <i class="fas fa-minus"></i>
                        </span>
            </div>
            <div class="tour-selection-wrap-in tour-selection-wrap-flex js-show-added-field" style="display: none">
                <div class="tour-selection-field tour-selection-field--250 ">
                    <div class="bth__inp-block">
                        <div class="bth__inp-block js-show-formDirections" id="select_country">
                            <span class="bth__inp-lbl active">Страна поездки</span>
                            <span class="bth__inp  uppercase ">Не важно</span>
                        </div>
                        <div class="formDirections w100p" style="display: none;">
                            <div class="formDirections__wrap w100p">
                                <div class="formDirections__top  formDirections__top-line">
                                    <i class="formDirections__bottom-close"></i>
                                    <div class="formDirections__top-tab super-grey ">Страна поездки</div>
                                </div>
                                <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                    <div class="SumoSelect open" tabindex="0"><select id="sumo-direction"
                                                                                      class="SumoUnder" tabindex="-1">
                                            <?php foreach ($countries as $country):?>
                                                <option data-val="<?=$country->id?>"><?=$country->name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tour-selection-field tour-selection-field--180">
                    <div class="bth__inp-block js-show-formDirections" id="select_city">
                        <span class="bth__inp-lbl active">Город</span>
                        <span class="bth__inp  uppercase ">Не важно</span>
                    </div>
                    <div class="formDirections w100p" style="display: none;">
                        <div class="formDirections__wrap w100p" id="country_selected" style="display: none">
                            <div class="formDirections__top  formDirections__top-line">
                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey " id="country_for_city_select">

                                </div>
                            </div>
                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                <div class="SumoSelect open" tabindex="0">
                                    <select id="sumo-direction-city" class="SumoUnder" tabindex="-1">
                                        <?php foreach ($cities as $city):?>
                                            <option data-val="<?=$city->country?>"><?=$city->name?></option>
                                        <?php endforeach;?>
                                    </select></div>
                            </div>

                        </div>
                        <div class="formDirections__wrap w100p" id="country_not_selected">
                            <div class="formDirections__top  formDirections__top-line">
                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey ">Укажите страну</div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tour-selection-field tour-selection-field--200">
                    <div class="bth__inp-block js-show-formDirections" id="select_department">
                        <span class="bth__inp-lbl active">Город вылета</span>
                        <span class="bth__inp  uppercase ">Без перелета</span>
                    </div>


                    <div class="formDirections w100p" style="display: none;">
                        <div class="formDirections__wrap w100p">

                            <div class="formDirections__top  formDirections__top-line">

                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey ">Город вылета</div>
                            </div>

                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                <div class="SumoSelect open" tabindex="0">
                                    <select id="sumo-department" class="SumoUnder" tabindex="-1">
                                        <option>Москва</option>
                                        <option>Санкт-Петербург</option>
                                        <option>Алматы</option>
                                        <option>Астана</option>
                                        <option>Белгород</option>
                                        <option>Брянск</option>
                                        <option>Владикавказ</option>
                                        <option>Волгоград</option>
                                        <option>Воронеж</option>
                                        <option>Гомель</option>
                                        <option>Гродно</option>
                                        <option>Екатеринбург</option>
                                        <option>Иркутск</option>
                                        <option>Калининград</option>
                                        <option>Киев</option>
                                        <option>Краснодар</option>
                                        <option>Красноярск</option>
                                        <option>Магадан</option>
                                        <option>Махачкала</option>
                                        <option>Минеральные воды</option>
                                        <option>Мурманск</option>
                                        <option>Набережные Челны</option>
                                        <option>Нижний Новгород</option>
                                        <option>Новосибирск</option>
                                        <option>Омск</option>
                                        <option>Оренбург</option>
                                        <option>Пенза</option>
                                        <option>Ростов-на-Дону</option>
                                        <option>Саратов</option>
                                        <option>Симферополь</option>
                                        <option>Смоленск</option>
                                        <option>Сочи</option>
                                        <option>Томск</option>
                                        <option>Ульяновск</option>
                                        <option>Харьков</option>
                                        <option>Челябинск</option>
                                        <option>Шымкент</option>
                                        <option>Якутск</option>
                                        <option>Ярославль</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-selection-field tour-selection-field--180">
                    <div class="bth__inp-block js-show-formDirections js-formDirections--big-mobile">
                        <span class="bth__inp-lbl active">Параметры отеля</span>
                        <span class="bth__inp">
                                    <b> 4 / 36 </b>
                                </span>
                    </div>

                    <div class="formDirections   formDirections--big-mobile formDirections--char hotel-params-form"
                         style="display: none;">

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
                                                    <input type="checkbox" class="cbx" id="catalog-positionckd_opt3" name="place_type[]"
                                                           checked="" value="любой тип">
                                                    <label class="label-cbx" for="catalog-positionckd_opt3">
                                                        <span class="cbx-cnt">Любой тип</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Пляжный</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="catalog-position1_opt3" name="place_type[]"
                                                           value="пляжный - 1-я линия от моря">
                                                    <label class="label-cbx" for="catalog-position1_opt3">
                                                        <span class="cbx-cnt">1-я линия от моря</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16   ">
                                                    <input type="checkbox" class="cbx" id="catalog-position2_opt3" name="place_type[]"
                                                           value="пляжный - 2-я линия от моря">
                                                    <label class="label-cbx" for="catalog-position2_opt3">
                                                        <span class="cbx-cnt">2-я линия от моря </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position3_opt3" name="place_type[]"
                                                           value="пляжный - 3-я линия от моря">
                                                    <label class="label-cbx" for="catalog-position3_opt3">
                                                        <span class="cbx-cnt"> 3-я линия от моря</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position4_opt3" name="place_type[]"
                                                           value="пляжный - через дорогу">
                                                    <label class="label-cbx" for="catalog-position4_opt3">
                                                        <span class="cbx-cnt">Через дорогу </span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Горнолыжный</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position5_opt3" name="place_type[]"
                                                           value="горнолыжный - близко">
                                                    <label class="label-cbx" for="catalog-position5_opt3">
                                                        <span class="cbx-cnt">Близко</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position6_opt3" name="place_type[]"
                                                           value="горнолыжный - далеко">
                                                    <label class="label-cbx" for="catalog-position6_opt3">
                                                        <span class="cbx-cnt">Далеко </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position7_opt3" name="place_type[]"
                                                           value="горнолыжный - рядом">
                                                    <label class="label-cbx" for="catalog-position7_opt3">
                                                        <span class="cbx-cnt"> Рядом</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Загородный</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="catalog-position8_opt3" name="place_type[]"
                                                           value="загородный - близко">
                                                    <label class="label-cbx" for="catalog-position8_opt3">
                                                        <span class="cbx-cnt">Близко</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position9_opt3" name="place_type[]"
                                                           value="загородный - далеко">
                                                    <label class="label-cbx" for="catalog-position9_opt3">
                                                        <span class="cbx-cnt">Далеко </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position10_opt3" name="place_type[]"
                                                           value="загородный - рядом">
                                                    <label class="label-cbx" for="catalog-position10_opt3">
                                                        <span class="cbx-cnt"> Рядом</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="formDirections__cbx-ttl">Городской</div>
                                            <div class=" formDirections__left-30 ">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="catalog-position11_opt3" name="place_type[]"
                                                           value="городской - близко к центру">
                                                    <label class="label-cbx" for="catalog-position11_opt3">
                                                        <span class="cbx-cnt">Близко к центру</span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position12_opt3" name="place_type[]"
                                                           value="городской - окраина">
                                                    <label class="label-cbx" for="catalog-position12_opt3">
                                                        <span class="cbx-cnt">Окраина </span>
                                                    </label>

                                                </div>
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="catalog-position13_opt3" name="place_type[]"
                                                           value="городской - центр">
                                                    <label class="label-cbx" for="catalog-position13_opt3">
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
                                                    <input type="checkbox" class="cbx" id="333eat2-typeckd_opt3" checked name="nc[]" value="all">
                                                    <label class="label-cbx" for="333eat2-typeckd_opt3">
                                                        <span class="cbx-cnt">Любое питание</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type1_opt3" name="nc[]" value="ai">
                                                    <label class="label-cbx" for="333eat2-type1_opt3">
                                                        <span class="cbx-cnt">AI Все включено</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type2_opt3" name="nc[]" value="fb">
                                                    <label class="label-cbx" for="333eat2-type2_opt3">
                                                        <span class="cbx-cnt">FB  Завтрак + обед + ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type3_opt3" name="nc[]" value="hb">
                                                    <label class="label-cbx" for="333eat2-type3_opt3">
                                                        <span class="cbx-cnt">HB  Завтрак +  ужин</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block     cbx-block--16">
                                                    <input type="checkbox" class="cbx" id="333eat2-type4_opt3" name="nc[]" value="bb">
                                                    <label class="label-cbx" for="333eat2-type4_opt3">
                                                        <span class="cbx-cnt"> BB Завтрак</span>
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333eat2-type5_opt3" name="nc[]" value="ro">
                                                    <label class="label-cbx" for="333eat2-type5_opt3">
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
                                                    <input type="checkbox" class="cbx" name="stars" value="all" id="333stars-ckd_opt3" checked="">
                                                    <label class="label-cbx " for="333stars-ckd_opt3">
                                                        <span class="cbx-cnt">Любая категория</span>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block  cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" name="stars" value="5*" id="333stars-5_opt3">
                                                    <label class="label-cbx " for="333stars-5_opt3">
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
                                                    <input type="checkbox" class="cbx" name="stars" value="4*" id="333stars-4_opt3">
                                                    <label class="label-cbx " for="333stars-4_opt3">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" name="stars" value="3*" id="333stars-3_opt3">
                                                    <label class="label-cbx " for="333stars-3_opt3">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-2_opt3" name="stars" value="2*">
                                                    <label class="label-cbx " for="333stars-2_opt3">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-1_opt3" name="stars" value="1*">
                                                    <label class="label-cbx " for="333stars-1_opt3">
                                                        <i class="fa fa-star"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-hv1_opt3" name="stars" value="hv1">
                                                    <label class="label-cbx" for="333stars-hv1_opt3">
                                                        <span class="cbx-cnt">HV1</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block   cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333stars-hv2_opt3" name="stars" value="hv2">
                                                    <label class="label-cbx" for="333stars-hv2_opt3">
                                                        <span class="cbx-cnt">HV2</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-dropdown-stars__item">
                                                <div class="cbx-block    cbx-block--16">
                                                    <input type="checkbox" class="cbx" id="no-stars_opt3" name="stars" value="без категории">
                                                    <label class="label-cbx" for="no-stars_opt3">
                                                        <span class="cbx-cnt">Без категории</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formDirections__bottom-blocks js-search-rating" style="display: none">
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_2" class="rbt" value="all" id="333ratingckd_opt3" checked>
                                                <label class="label-rbt" for="333ratingckd_opt3">
                                                    <span class="rbt-cnt  uppercase">Любой рейтинг</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_2" class="rbt " value="не важно" id="333rating1_opt3">
                                                <label class="label-rbt" for="333rating1_opt3">
                                                    <span class="rbt-cnt  uppercase">Не важно</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_2" class="rbt " value="4.75" id="333rating3_opt3">
                                                <label class="label-rbt" for="333rating3_opt3">
                                                    <span class="rbt-cnt  uppercase"> Не ниже 4,75</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_2" class="rbt " value="4.5" id="333rating4_opt3">
                                                <label class="label-rbt" for="333rating4_opt3">
                                                    <span class="rbt-cnt  uppercase">  Не ниже 4,5</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_2" class="rbt " value="4.25" id="333rating5_opt3">
                                                <label class="label-rbt" for="333rating5_opt3">
                                                    <span class="rbt-cnt  uppercase">  Не ниже 4,25</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_2" class="rbt " value="4" id="333rating6_opt3">
                                                <label class="label-rbt" for="333rating6_opt3">
                                                    <span class="rbt-cnt  uppercase">Не ниже 4,0</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_2" class="rbt " value="3.75" id="333rating7_opt3">
                                                <label class="label-rbt" for="333rating7_opt3">
                                                    <span class="rbt-cnt  uppercase">Не ниже 3,75</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_2" class="rbt " value="3.5" id="333rating8_opt3">
                                                <label class="label-rbt" for="333rating8_opt3">
                                                    <span class="rbt-cnt  uppercase">     Не ниже 3,5</span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="form-dropdown-stars__item ">
                                            <div class="rbt-block  ">
                                                <input type="radio" name="333rating_2" class="rbt " value="3.25" id="333rating9_opt3">
                                                <label class="label-rbt" for="333rating9_opt3">
                                                    <span class="rbt-cnt  uppercase">       Не ниже 3,25</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="formDirections__bottom js-search-kid" style="display: none">

                                        <div class="formDirections__bottom-blocks">

                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333kid1_opt3" name="kids[]" value="детский горшок">
                                                    <label class="label-cbx" for="333kid1_opt3">
                                                        <span class="cbx-cnt">ДЕТСКИЙ ГОРШОК</span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333kid2_opt3" name="kids[]" value="детские блюда">
                                                    <label class="label-cbx" for="333kid2_opt3">
                                                        <span class="cbx-cnt">  ДЕТСКИЕ БЛЮДА</span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333kid3_opt3" name="kids[]" value="пеленальный столик">
                                                    <label class="label-cbx" for="333kid3_opt3">
                                                        <span class="cbx-cnt">ПЕЛЕНАЛЬНЫЙ СТОЛИК</span>
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block   cbx-block--16  ">
                                                    <input type="checkbox" class="cbx" id="333kid4_opt3" name="kids[]" value="анимация">
                                                    <label class="label-cbx" for="333kid4_opt3">
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
                                                    <input type="checkbox" class="cbx" id="333other1_opt3" name="other[]" value="веселая анимация">
                                                    <label class="label-cbx" for="333other1_opt3">
                                                        <span class="cbx-cnt">ВЕСЕЛАЯ АНИМАЦИЯ</span>
                                                    </label>

                                                </div>
                                            </div>


                                            <div class="form-dropdown-stars__item ">
                                                <div class="cbx-block    cbx-block--16 ">
                                                    <input type="checkbox" class="cbx" id="333other2_opt3" name="other[]" value="тусовки рядом с отелем">
                                                    <label class="label-cbx" for="333other2_opt3">
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
                <span class=" tour-selection-plus  hide-1023 js-del-field">
                            <i class="fas fa-minus"></i>
                        </span>
            </div>
        </div>
        <div class=" js-types-search-hotel-blocks" style="display: none">
            <div class="tour-selection-wrap-in tour-selection-wrap-flex ">

                <div class="tour-selection-field tour-selection-field--250">
                    <div class="bth__inp-block js-show-formDirections" id="select_department">
                        <span class="bth__inp-lbl active">Город вылета</span>
                        <span class="bth__inp  uppercase ">Без перелета</span>
                    </div>


                    <div class="formDirections w100p" style="display: none;">
                        <div class="formDirections__wrap w100p">

                            <div class="formDirections__top  formDirections__top-line">

                                <i class="formDirections__bottom-close"></i>
                                <div class="formDirections__top-tab super-grey ">Город вылета</div>
                            </div>

                            <div class="SumoSelect formDirections__SumoSelect formDirections__SumoSelect-search">
                                <div class="SumoSelect open" tabindex="0">
                                    <select id="sumo-department" class="SumoUnder" tabindex="-1">
                                        <option>Москва</option>
                                        <option>Санкт-Петербург</option>
                                        <option>Алматы</option>
                                        <option>Астана</option>
                                        <option>Белгород</option>
                                        <option>Брянск</option>
                                        <option>Владикавказ</option>
                                        <option>Волгоград</option>
                                        <option>Воронеж</option>
                                        <option>Гомель</option>
                                        <option>Гродно</option>
                                        <option>Екатеринбург</option>
                                        <option>Иркутск</option>
                                        <option>Калининград</option>
                                        <option>Киев</option>
                                        <option>Краснодар</option>
                                        <option>Красноярск</option>
                                        <option>Магадан</option>
                                        <option>Махачкала</option>
                                        <option>Минеральные воды</option>
                                        <option>Мурманск</option>
                                        <option>Набережные Челны</option>
                                        <option>Нижний Новгород</option>
                                        <option>Новосибирск</option>
                                        <option>Омск</option>
                                        <option>Оренбург</option>
                                        <option>Пенза</option>
                                        <option>Ростов-на-Дону</option>
                                        <option>Саратов</option>
                                        <option>Симферополь</option>
                                        <option>Смоленск</option>
                                        <option>Сочи</option>
                                        <option>Томск</option>
                                        <option>Ульяновск</option>
                                        <option>Харьков</option>
                                        <option>Челябинск</option>
                                        <option>Шымкент</option>
                                        <option>Якутск</option>
                                        <option>Ярославль</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-selection-field tour-selection-field--250">
                    <div class="bth__inp-block js-show-formDirections">

                        <span class="bth__inp-lbl active">Питание</span>
                        <span class="bth__inp">
                                   <b id="nutrition" class="uppercase">Любое</b>
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

                            <div class="formDirections__bottom" id="nutrition_select">
                                <input type="checkbox" hidden class="cbx" name="nc[]" checked  value="all" id="nitrition_all">
                                <div class="formDirections__bottom-blocks">
                                    <div class="form-dropdown-stars__item ">
                                        <div class="cbx-block    cbx-block--16 ">
                                            <input type="checkbox" class="cbx" name="nc[]"  value="ai" id="tab38eat2-type1">
                                            <label class="label-cbx" for="tab38eat2-type1">
                                                <span class="cbx-cnt" data-val="ai">AI Все включено</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-dropdown-stars__item ">
                                        <div class="cbx-block    cbx-block--16">
                                            <input type="checkbox" class="cbx" name="nc[]" value="fb" id="tab38eat2-type2">
                                            <label class="label-cbx" for="tab38eat2-type2">
                                                <span class="cbx-cnt" data-val="fb">FB Завтрак + обед + ужин</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-dropdown-stars__item ">
                                        <div class="cbx-block    cbx-block--16 ">
                                            <input type="checkbox" class="cbx" name="nc[]" value="hb" id="tab38eat2-type3">
                                            <label class="label-cbx" for="tab38eat2-type3">
                                                <span class="cbx-cnt" data-val="hb">HB Завтрак +  ужин</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-dropdown-stars__item ">
                                        <div class="cbx-block    cbx-block--16 ">
                                            <input type="checkbox" class="cbx" name="nc[]" value="bb" id="tab38eat2-type4">
                                            <label class="label-cbx" for="tab38eat2-type4">
                                                <span class="cbx-cnt" data-val="bb">BB Завтрак</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-dropdown-stars__item ">
                                        <div class="cbx-block   cbx-block--16  ">
                                            <input type="checkbox" class="cbx" name="nc[]" value="ro" id="tab38eat2-type5">
                                            <label class="label-cbx" for="tab38eat2-type5">
                                                <span class="cbx-cnt" data-val="ro">RO Без питания</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="formDirections__static-btn js-close-formDirections">Применить</div>
                                </div>

                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="tour-selection-wrap-in tour-selection-wrap-flex js-hotels" data-index="0">
                <div class="tour-selection-field tour-selection-field--740">
                    <div class="bth__inp-block js-show-formDirections  js-formDirections--big-mobile">

                        <span class="bth__inp-lbl">Добавить отель</span>
                        <span class="bth__inp">

                                </span>
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
                                    <input class="bth__inp hotel_search" type="text" placeholder="Поиск отеля">
                                </div>
                                <div class="formDirections__wrap  formDirections__bottom-blocks-cut hotels_list">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <span class=" tour-selection-plus hide-1023 js-add-hotel"><i class="fas fa-plus"></i></span>
            </div>

            <div class="tour-selection-wrap-in tour-selection-wrap-flex js-hotels js-show-add-hotel" data-index="1" style="display: none">
                <div class="tour-selection-field tour-selection-field--740">
                    <div class="bth__inp-block js-show-formDirections  js-formDirections--big-mobile">

                        <span class="bth__inp-lbl">Добавить отель</span>
                        <span class="bth__inp">

                                </span>
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
                                    <input class="bth__inp hotel_search" type="text" placeholder="Поиск отеля">
                                </div>
                                <div class="formDirections__wrap  formDirections__bottom-blocks-cut hotels_list">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <span class=" tour-selection-plus hide-1023 js-del-hotel"><i class="fas fa-minus"></i></span>
            </div>

            <div class="tour-selection-wrap-in tour-selection-wrap-flex js-hotels js-show-add-hotel" data-index="2" style="display: none">
                <div class="tour-selection-field tour-selection-field--740">
                    <div class="bth__inp-block js-show-formDirections  js-formDirections--big-mobile">

                        <span class="bth__inp-lbl">Добавить отель</span>
                        <span class="bth__inp">

                                </span>
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
                                    <input class="bth__inp hotel_search" type="text" placeholder="Поиск отеля">
                                </div>
                                <div class="formDirections__wrap  formDirections__bottom-blocks-cut hotels_list">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <span class=" tour-selection-plus hide-1023 js-del-hotel"><i class="fas fa-minus"></i></span>
            </div>


        </div>


        <div class="tour-selection-wrap-in">
            <div class="bth__ta-resizable-wrap">
                <div class="bth__ta-resizable" contenteditable="" id="wishes"></div>

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

<div class="panel" id="step2Panel" style="display: none">

    <div class="tour-selection-wrap">

        <div class="tour-selection-wrap-in mt0 tour-selection-wrap-flex">
            <input type="hidden" name="id_order" id="id_order_input">
            <div class="tour-selection-field tour-selection-field--270">
                <div class="js-add-error bth__inp-block  ">
                    <input type="text" class="bth__inp js-label" id="name3">
                    <label for="name3" class="bth__inp-lbl">Ваше имя</label>
                    <div class="hint-block hint-block--abs">
                        <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                        <div class="hint">
                            <p class="bth__cnt">Введите правильное имя</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tour-selection-field tour-selection-field--270">

                <div class="js-add-error bth__inp-block ">
                    <input type="text" class="bth__inp js-label" id="phone3" placeholder="">
                    <label for="phone3" class="bth__inp-lbl">Телефон</label>
                    <div class="hint-block hint-block--abs">
                        <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                        <div class="hint">
                            <p class="bth__cnt">Введите правильный телефон</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tour-selection-field tour-selection-field--270">

                <div class="js-add-error bth__inp-block  ">
                    <input type="text" class="bth__inp js-label " id="mail2">
                    <label for="mail2" class="bth__inp-lbl">Email (не обязательно)</label>
                    <div class="hint-block hint-block--abs">
                        <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                        <div class="hint">
                            <p class="bth__cnt">Введите правильный email</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="bth__cnt uppercase mt20 ">Уточните удобные координаты для выбора турагенства</div>
        <div class="tour-selection-wrap-in   tour-selection-wrap-flex ">
            <div class="tour-selection-field tour-selection-field--270 ">
                <div class="bth__inp-block js-show-formDirections js-add-error" id="select_list_city">
                    <span class="bth__inp-lbl">Ваш город</span>
                    <span class="bth__inp">
                                <b class="uppercase"></b>
                            </span>
                    <div class="hint-block hint-block--abs">
                        <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                        <div class="hint">
                            <p class="bth__cnt">Выберите свой город</p>
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
                            <div class="SumoSelect open" tabindex="0">
                                <select id="sumo-list-city" class="SumoUnder" tabindex="-1">
                                    <option>Москва</option>
                                    <option>Санкт-Петербург</option>
                                    <option>Алматы</option>
                                    <option>Астана</option>
                                    <option>Белгород</option>
                                    <option>Брянск</option>
                                    <option>Владикавказ</option>
                                    <option>Волгоград</option>
                                    <option>Воронеж</option>
                                    <option>Гомель</option>
                                    <option>Гродно</option>
                                    <option>Екатеринбург</option>
                                    <option>Иркутск</option>
                                    <option>Калининград</option>
                                    <option>Киев</option>
                                    <option>Краснодар</option>
                                    <option>Красноярск</option>
                                    <option>Магадан</option>
                                    <option>Махачкала</option>
                                    <option>Минеральные воды</option>
                                    <option>Мурманск</option>
                                    <option>Набережные Челны</option>
                                    <option>Нижний Новгород</option>
                                    <option>Новосибирск</option>
                                    <option>Омск</option>
                                    <option>Оренбург</option>
                                    <option>Пенза</option>
                                    <option>Ростов-на-Дону</option>
                                    <option>Саратов</option>
                                    <option>Симферополь</option>
                                    <option>Смоленск</option>
                                    <option>Сочи</option>
                                    <option>Томск</option>
                                    <option>Ульяновск</option>
                                    <option>Харьков</option>
                                    <option>Челябинск</option>
                                    <option>Шымкент</option>
                                    <option>Якутск</option>
                                    <option>Ярославль</option>
                                </select>
                            </div>
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
                <a href="http://html2.tophotels.site/tophotels_site_html/help-selection#p-agreement-pp"
                   class="p-agreement-pp agree">
                    Соглашение об обработке личных данных</a> и
                <a href="http://html2.tophotels.site/tophotels_site_html/help-selection#p-agreement-pp"
                   class="p-agreement-pp site-role">Правила сайта</a>
            </div>

        </div>
    </div>
</div>