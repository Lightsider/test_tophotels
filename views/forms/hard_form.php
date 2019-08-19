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
                                            <option data-val="124"> Абхазия</option>
                                            <option data-val="281"> Абхазия</option>
                                            <option data-val="6"> Австралия</option>
                                            <option data-val="225"> Австрия</option>
                                            <option data-val="226"> Австрия</option>
                                            <option data-val="66"> Австрия</option>
                                            <option data-val="230"> Адриатика</option>
                                            <option data-val="150"> Азербайджан</option>
                                            <option data-val="159"> Албания</option>
                                            <option data-val="160"> Алжир</option>
                                            <option data-val="292"> Америк. Виргинские о-ва</option>
                                            <option data-val="289"> Американское (Восточное) Самоа</option>
                                            <option data-val="224"> Анапа</option>
                                            <option data-val="162"> Ангилья</option>
                                            <option data-val="161"> Ангола</option>
                                            <option data-val="67"> Андорра</option>
                                            <option data-val="223"> Анталия</option>
                                            <option data-val="48"> Антарктида</option>
                                            <option data-val="287"> Антарктика</option>
                                            <option data-val="126"> Антигуа и Барбуда</option>
                                            <option data-val="255"> Антильские о-ва</option>
                                            <option data-val="231"> Антильские острова</option>
                                            <option data-val="47"> Аргентина</option>
                                            <option data-val="157"> Армения</option>
                                            <option data-val="54"> Аруба</option>
                                            <option data-val="144"> Афганистан</option>
                                            <option data-val="55"> Багамы</option>
                                            <option data-val="163"> Бангладеш</option>
                                            <option data-val="56"> Барбадос</option>
                                            <option data-val="125"> Барбуда</option>
                                            <option data-val="109"> Бахрейн</option>
                                            <option data-val="158"> Беларусь</option>
                                            <option data-val="155"> Белиз</option>
                                            <option data-val="68"> Бельгия</option>
                                            <option data-val="164"> Бенин</option>
                                            <option data-val="165"> Бермудские о-ва</option>
                                            <option data-val="100"> Болгария</option>
                                            <option data-val="135"> Боливия</option>
                                            <option data-val="167"> Босния и Герцеговина</option>
                                            <option data-val="11"> Ботсвана</option>
                                            <option data-val="49"> Бразилия</option>
                                            <option data-val="248"> Брит. Виргинские о-ва</option>
                                            <option data-val="24"> Бруней</option>
                                            <option data-val="168"> Буркина-Фасо</option>
                                            <option data-val="169"> Бурунди</option>
                                            <option data-val="166"> Бутан</option>
                                            <option data-val="249"> Вануату</option>
                                            <option data-val="270"> Вануату</option>
                                            <option data-val="185"> Ватикан</option>
                                            <option data-val="69"> Великобритания</option>
                                            <option data-val="70"> Венгрия</option>
                                            <option data-val="50"> Венесуэла</option>
                                            <option data-val="232"> Венеция</option>
                                            <option data-val="284"> Восточный Тимор</option>
                                            <option data-val="25"> Вьетнам</option>
                                            <option data-val="193"> Габон</option>
                                            <option data-val="233"> Гавайи</option>
                                            <option data-val="176"> Гаити</option>
                                            <option data-val="177"> Гайана</option>
                                            <option data-val="197"> Гамбия</option>
                                            <option data-val="183"> Гана</option>
                                            <option data-val="57"> Гваделупа</option>
                                            <option data-val="133"> Гватемала</option>
                                            <option data-val="178"> Гвинея</option>
                                            <option data-val="179"> Гвинея Бисау</option>
                                            <option data-val="250"> Гвинея-Бисау</option>
                                            <option data-val="2"> Германия</option>
                                            <option data-val="182"> Гибралтар</option>
                                            <option data-val="227"> Гоа</option>
                                            <option data-val="136"> Гондурас</option>
                                            <option data-val="228"> Гонконг</option>
                                            <option data-val="180"> Гренада</option>
                                            <option data-val="181"> Гренландия</option>
                                            <option data-val="71"> Греция</option>
                                            <option data-val="146"> Грузия</option>
                                            <option data-val="72"> Дания</option>
                                            <option data-val="286"> Джерси</option>
                                            <option data-val="246"> Джибути</option>
                                            <option data-val="187"> Джибути</option>
                                            <option data-val="188"> Доминика</option>
                                            <option data-val="58"> Доминикана</option>
                                            <option data-val="245"> Евросоюз</option>
                                            <option data-val="12"> Египет</option>
                                            <option data-val="145"> Замбия</option>
                                            <option data-val="282"> Западная Сахара</option>
                                            <option data-val="4"> Зимбабве</option>
                                            <option data-val="234"> Ибица</option>
                                            <option data-val="34"> Израиль</option>
                                            <option data-val="35"> Индия</option>
                                            <option data-val="26"> Индонезия</option>
                                            <option data-val="36"> Иордания</option>
                                            <option data-val="175"> Ирак</option>
                                            <option data-val="143"> Иран</option>
                                            <option data-val="93"> Ирландия</option>
                                            <option data-val="73"> Исландия</option>
                                            <option data-val="74"> Испания</option>
                                            <option data-val="75"> Италия</option>
                                            <option data-val="184"> Йемен</option>
                                            <option data-val="251"> Кабо- Верде</option>
                                            <option data-val="242"> Кабо-Верде</option>
                                            <option data-val="244"> Кавказские Минеральные Воды</option>
                                            <option data-val="149"> Казахстан</option>
                                            <option data-val="127"> Каймановы о-ва</option>
                                            <option data-val="116"> Камбоджа</option>
                                            <option data-val="14"> Камерун</option>
                                            <option data-val="141"> Канада</option>
                                            <option data-val="235"> Канарские острова</option>
                                            <option data-val="236"> Карибы</option>
                                            <option data-val="110"> Катар</option>
                                            <option data-val="15"> Кения</option>
                                            <option data-val="76"> Кипр</option>
                                            <option data-val="280"> Киргизия</option>
                                            <option data-val="37"> Китай</option>
                                            <option data-val="296"> Кокосовые (Килинг) о-ва</option>
                                            <option data-val="128"> Колумбия</option>
                                            <option data-val="172"> Коморские о-ва</option>
                                            <option data-val="174"> Конго</option>
                                            <option data-val="253"> Корея</option>
                                            <option data-val="279"> Корея</option>
                                            <option data-val="198"> Королевство Тонга</option>
                                            <option data-val="59"> Коста-Рика</option>
                                            <option data-val="173"> Кот-д’Ивуар</option>
                                            <option data-val="60"> Куба</option>
                                            <option data-val="195"> Кувейт</option>
                                            <option data-val="8"> Кука о.</option>
                                            <option data-val="254"> Кука острова</option>
                                            <option data-val="252"> Кыргызстан</option>
                                            <option data-val="199"> Кыргызтан</option>
                                            <option data-val="291"> Кюрасао о.</option>
                                            <option data-val="200"> Лаос</option>
                                            <option data-val="103"> Латвия</option>
                                            <option data-val="201"> Лесото</option>
                                            <option data-val="202"> Либерия</option>
                                            <option data-val="113"> Ливан</option>
                                            <option data-val="152"> Ливия</option>
                                            <option data-val="122"> Литва</option>
                                            <option data-val="203"> Лихтенштейн</option>
                                            <option data-val="139"> Люксембург</option>
                                            <option data-val="41"> Маврикий</option>
                                            <option data-val="207"> Мавритания</option>
                                            <option data-val="42"> Мадагаскар</option>
                                            <option data-val="205"> Македония</option>
                                            <option data-val="204"> Малави</option>
                                            <option data-val="27"> Малайзия</option>
                                            <option data-val="206"> Мали</option>
                                            <option data-val="43"> Мальдивы</option>
                                            <option data-val="77"> Мальта</option>
                                            <option data-val="247"> Марианские о-ва</option>
                                            <option data-val="16"> Марокко</option>
                                            <option data-val="61"> Мартиника</option>
                                            <option data-val="267"> Маршалловы о-ва</option>
                                            <option data-val="62"> Мексика</option>
                                            <option data-val="208"> Микронезия (ФШМ)</option>
                                            <option data-val="156"> Мозамбик</option>
                                            <option data-val="151"> Молдова</option>
                                            <option data-val="78"> Монако</option>
                                            <option data-val="209"> Монголия</option>
                                            <option data-val="117"> Мьянма (Бирма)</option>
                                            <option data-val="17"> Намибия</option>
                                            <option data-val="274"> Независимое Государство Самоа</option>
                                            <option data-val="38"> Непал</option>
                                            <option data-val="212"> Нигер</option>
                                            <option data-val="211"> Нигерия</option>
                                            <option data-val="79"> Нидерланды</option>
                                            <option data-val="129"> Никарагуа</option>
                                            <option data-val="272"> Ниуэ</option>
                                            <option data-val="7"> Новая Зеландия</option>
                                            <option data-val="210"> Новая Каледония</option>
                                            <option data-val="80"> Норвегия</option>
                                            <option data-val="32"> ОАЭ</option>
                                            <option data-val="107"> Оман</option>
                                            <option data-val="153"> Пакистан</option>
                                            <option data-val="278"> Палау</option>
                                            <option data-val="256"> Палестина</option>
                                            <option data-val="130"> Панама</option>
                                            <option data-val="28"> Папуа Новая Гвинея</option>
                                            <option data-val="137"> Парагвай</option>
                                            <option data-val="51"> Перу</option>
                                            <option data-val="140"> Польша</option>
                                            <option data-val="81"> Португалия</option>
                                            <option data-val="186"> Пуэрто-Рико</option>
                                            <option data-val="271"> Республика Кирибати</option>
                                            <option data-val="283"> Республика Конго</option>
                                            <option data-val="294"> Республика Косово</option>
                                            <option data-val="273"> Республика Палау</option>
                                            <option data-val="44"> Реюньон</option>
                                            <option data-val="1"> Россия</option>
                                            <option data-val="257"> Руанда</option>
                                            <option data-val="123"> Румыния</option>
                                            <option data-val="64"> США</option>
                                            <option data-val="258"> Саба</option>
                                            <option data-val="189"> Сальвадор</option>
                                            <option data-val="290"> Сан-Марино</option>
                                            <option data-val="275"> Сан-Томе и Принсипи</option>
                                            <option data-val="238"> Санта-Лючия</option>
                                            <option data-val="239"> Сардиния</option>
                                            <option data-val="148"> Саудовская Аравия</option>
                                            <option data-val="19"> Свазиленд</option>
                                            <option data-val="194"> Северная Корея</option>
                                            <option data-val="45"> Сейшелы</option>
                                            <option data-val="259"> Сен-Бартельми</option>
                                            <option data-val="260"> Сен-Мартен</option>
                                            <option data-val="295"> Сен-Пьер и Микелон</option>
                                            <option data-val="213"> Сенегал</option>
                                            <option data-val="262"> Сент- Люсия</option>
                                            <option data-val="261"> Сент-Винсент и Гренадины</option>
                                            <option data-val="288"> Сент-Китс и Невис</option>
                                            <option data-val="63"> Сент-Люсия</option>
                                            <option data-val="221"> Сербия</option>
                                            <option data-val="222"> Сербия</option>
                                            <option data-val="29"> Сингапур</option>
                                            <option data-val="120"> Сирия</option>
                                            <option data-val="229"> Сицилия</option>
                                            <option data-val="82"> Словакия</option>
                                            <option data-val="96"> Словения</option>
                                            <option data-val="293"> Соломоновы о-ва</option>
                                            <option data-val="214"> Сомали</option>
                                            <option data-val="240"> Сочи</option>
                                            <option data-val="215"> Судан</option>
                                            <option data-val="216"> Суринам</option>
                                            <option data-val="263"> Сьерра-Леоне</option>
                                            <option data-val="269"> Сьерра-Леоне</option>
                                            <option data-val="217"> Таджикистан</option>
                                            <option data-val="30"> Таиланд</option>
                                            <option data-val="264"> Таити</option>
                                            <option data-val="241"> Таити</option>
                                            <option data-val="39"> Тайвань</option>
                                            <option data-val="20"> Танзания</option>
                                            <option data-val="220"> Теркс и Кайкос</option>
                                            <option data-val="219"> Того</option>
                                            <option data-val="218"> Тринидад и Тобаго</option>
                                            <option data-val="265"> Тринидад и Тобаго</option>
                                            <option data-val="285"> Тувалу</option>
                                            <option data-val="21"> Тунис</option>
                                            <option data-val="147"> Туркменистан</option>
                                            <option data-val="83"> Турция</option>
                                            <option data-val="22"> Уганда</option>
                                            <option data-val="142"> Узбекистан</option>
                                            <option data-val="114"> Украина</option>
                                            <option data-val="134"> Уругвай</option>
                                            <option data-val="276"> Федерация Сент-Китс и Невис</option>
                                            <option data-val="9"> Фиджи</option>
                                            <option data-val="31"> Филиппины</option>
                                            <option data-val="3"> Финляндия</option>
                                            <option data-val="84"> Франция</option>
                                            <option data-val="196"> Французская Гвиана</option>
                                            <option data-val="132"> Французская Полинезия</option>
                                            <option data-val="85"> Хорватия</option>
                                            <option data-val="170"> Центрально-Африканская Республика</option>
                                            <option data-val="171"> Чад</option>
                                            <option data-val="86"> Черногория</option>
                                            <option data-val="87"> Чехия</option>
                                            <option data-val="52"> Чили</option>
                                            <option data-val="89"> Швейцария</option>
                                            <option data-val="90"> Швеция</option>
                                            <option data-val="243"> Шотландия</option>
                                            <option data-val="46"> Шри-Ланка</option>
                                            <option data-val="53"> Эквадор</option>
                                            <option data-val="190"> Экваториальная Гвинея</option>
                                            <option data-val="191"> Эритрея</option>
                                            <option data-val="118"> Эстония</option>
                                            <option data-val="192"> Эфиопия</option>
                                            <option data-val="23"> ЮАР</option>
                                            <option data-val="266"> Югославия</option>
                                            <option data-val="119"> Южная Корея</option>
                                            <option data-val="298"> Южная Осетия</option>
                                            <option data-val="297"> Южный Судан</option>
                                            <option data-val="65"> Ямайка</option>
                                            <option data-val="40"> Япония</option>
                                            <option data-val="18"> о. Зеленого Мыса</option>
                                            <option data-val="237"> о. Крит</option>
                                            <option data-val="268"> о.Норфолк</option>
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
                                        <option data-val="89">Аарау</option>
                                        <option data-val="2">Аахен</option>
                                        <option data-val="2">Аах у Трира</option>
                                        <option data-val="143">Абадан</option>
                                        <option data-val="143">Абаде</option>
                                        <option data-val="1">Абаза</option>
                                        <option data-val="49">Абазтетуба</option>
                                        <option data-val="1">Абакан</option>
                                        <option data-val="75">Абано Терме</option>
                                        <option data-val="146">Абаша</option>
                                        <option data-val="70">Абашар</option>
                                        <option data-val="93">Аббифил</option>
                                        <option data-val="153">Абботабад</option>
                                        <option data-val="1">Абдулино</option>
                                        <option data-val="211">Абеокута</option>
                                        <option data-val="69">Абердин</option>
                                        <option data-val="64">Абердин, шт.Южная Дакота</option>
                                        <option data-val="69">Аберистуит</option>
                                        <option data-val="1">Абзаково</option>
                                        <option data-val="173">Абиджан</option>
                                        <option data-val="1">Абинск</option>
                                        <option data-val="12">Абнуб</option>
                                        <option data-val="157">Абовян</option>
                                        <option data-val="81">Абрантиш</option>
                                        <option data-val="66">Абтенау</option>
                                        <option data-val="148">Абу-Дабай</option>
                                        <option data-val="32">Абу-Даби</option>
                                        <option data-val="211">Абуджа</option>
                                        <option data-val="12">Абу Зенима</option>
                                        <option data-val="12">Абу Рудайс</option>
                                        <option data-val="12">Абу Сувейр</option>
                                        <option data-val="12">Абу Тиг</option>
                                        <option data-val="148">Абчейк</option>
                                        <option data-val="89">Аванш</option>
                                        <option data-val="140">Августов</option>
                                        <option data-val="81">Авейру</option>
                                        <option data-val="75">Авелино</option>
                                        <option data-val="75">Авецано</option>
                                        <option data-val="148">Авив</option>
                                        <option data-val="74">Авила</option>
                                        <option data-val="62">Авила-Сателит</option>
                                        <option data-val="69">Авимор</option>
                                        <option data-val="84">Авиньон</option>
                                        <option data-val="83">Авсаллар</option>
                                        <option data-val="12">Ага</option>
                                        <option data-val="16">Агадир</option>
                                        <option data-val="157">Агверан</option>
                                        <option data-val="150">Агдам</option>
                                        <option data-val="150">Агдаш</option>
                                        <option data-val="150">Агджабеди</option>
                                        <option data-val="35">Агра</option>
                                        <option data-val="60">Аграмонте пр.Матансас</option>
                                        <option data-val="75">Агриженто</option>
                                        <option data-val="71">Агринион</option>
                                        <option data-val="75">Агрополи</option>
                                        <option data-val="76">Агрос</option>
                                        <option data-val="83">Агры</option>
                                        <option data-val="1">Агрыз</option>
                                        <option data-val="150">Агсу</option>
                                        <option data-val="60">Агуада-де-Пасахерос, пр.Сьенфуэгос</option>
                                        <option data-val="60">Агуакате пр.Гавана</option>
                                        <option data-val="62">Агуаскальентес</option>
                                        <option data-val="175">Адамия</option>
                                        <option data-val="64">Адамстаун, шт.Пенсильвания</option>
                                        <option data-val="83">Адана</option>
                                        <option data-val="70">Аданд</option>
                                        <option data-val="192">Аддис-Абеба</option>
                                        <option data-val="6">Аделаида</option>
                                        <option data-val="74">Адехе</option>
                                        <option data-val="150">Аджикабул</option>
                                        <option data-val="32">Аджман</option>
                                        <option data-val="146">Адигени</option>
                                        <option data-val="1">Адлер</option>
                                        <option data-val="119">Адон</option>
                                        <option data-val="89">Адорф</option>
                                        <option data-val="75">Адриа</option>
                                        <option data-val="83">Адыяман</option>
                                        <option data-val="84">Ажен</option>
                                        <option data-val="34">Аза</option>
                                        <option data-val="81">Азамбужа</option>
                                        <option data-val="175">Азизия</option>
                                        <option data-val="1">Азнакаево</option>
                                        <option data-val="1">Азов</option>
                                        <option data-val="75">Азоло</option>
                                        <option data-val="34">Азор</option>
                                        <option data-val="2">Аихвальд</option>
                                        <option data-val="64">Айдахо-Фолс, шт.Айдахо</option>
                                        <option data-val="83">Айдын</option>
                                        <option data-val="2">Айзенах</option>
                                        <option data-val="2">Айзенхюттенштадт</option>
                                        <option data-val="66">Айзенштадт</option>
                                        <option data-val="66">Айзенэрц</option>
                                        <option data-val="103">Айзкраукле</option>
                                        <option data-val="2">Айленбург</option>
                                        <option data-val="2">Айнбек</option>
                                        <option data-val="160">Айн-Дефла</option>
                                        <option data-val="89">Айнзидельн</option>
                                        <option data-val="160">Айн-Темухент</option>
                                        <option data-val="12">Айн Эль Сохна</option>
                                        <option data-val="64">Айронтон, шт.Пенсильвания</option>
                                        <option data-val="100">Айтос</option>
                                        <option data-val="76">Айя-Напа</option>
                                        <option data-val="36">Акаба</option>
                                        <option data-val="142">Акалтын</option>
                                        <option data-val="62">Акапулько</option>
                                        <option data-val="40">Акаси</option>
                                        <option data-val="147">Акдепе</option>
                                        <option data-val="207">Акжужт</option>
                                        <option data-val="49">Акидауна</option>
                                        <option data-val="114">Акимовка</option>
                                        <option data-val="40">Акита</option>
                                        <option data-val="183">Аккра</option>
                                        <option data-val="142">Аккурган</option>
                                        <option data-val="142">Акмангит</option>
                                        <option data-val="34">Ако</option>
                                        <option data-val="175">Акра</option>
                                        <option data-val="73">Акранес</option>
                                        <option data-val="64">Акрон, шт.Огайо</option>
                                        <option data-val="76">Акротири</option>
                                        <option data-val="1">Аксай</option>
                                        <option data-val="149">Аксай</option>
                                        <option data-val="83">Аксарай</option>
                                        <option data-val="150">Акстафа</option>
                                        <option data-val="149">Аксу</option>
                                        <option data-val="149">Актау</option>
                                        <option data-val="142">Акташ</option>
                                        <option data-val="149">Актобе</option>
                                        <option data-val="149">Актюбинск</option>
                                        <option data-val="21">Акуда</option>
                                        <option data-val="75">Акуи Терме</option>
                                        <option data-val="73">Акурейри</option>
                                        <option data-val="157">Алаверды</option>
                                        <option data-val="3">Алаво</option>
                                        <option data-val="3">Алавус</option>
                                        <option data-val="49">Алагоа-Гранди</option>
                                        <option data-val="49">Алагоиньяс</option>
                                        <option data-val="84">Алансон</option>
                                        <option data-val="83">Аланья</option>
                                        <option data-val="1">Алапаевск</option>
                                        <option data-val="1">Алапаевск</option>
                                        <option data-val="75">Алассио</option>
                                        <option data-val="142">Алат</option>
                                        <option data-val="1">Алатырь</option>
                                        <option data-val="74">Алаурин-эль-Гранде</option>
                                        <option data-val="124">Алахадзы</option>
                                        <option data-val="59">Алахуэла</option>
                                        <option data-val="123">Алба-Юлия</option>
                                        <option data-val="100">Албена</option>
                                        <option data-val="90">Албеста</option>
                                        <option data-val="79">Алблассердам</option>
                                        <option data-val="81">Албуфейра</option>
                                        <option data-val="175">Алвия</option>
                                        <option data-val="1">Алдан</option>
                                        <option data-val="7">Алегзандра</option>
                                        <option data-val="49">Алегрети</option>
                                        <option data-val="113">Алей</option>
                                        <option data-val="12">Александрия</option>
                                        <option data-val="123">Александрия</option>
                                        <option data-val="64">Александрия, шт.Луизианна</option>
                                        <option data-val="1">Александров</option>
                                        <option data-val="114">Александровка</option>
                                        <option data-val="1">Александровск</option>
                                        <option data-val="1">Александровск-Сахалинский</option>
                                        <option data-val="71">Александруполис</option>
                                        <option data-val="1">Алексеевка</option>
                                        <option data-val="1">Алексин</option>
                                        <option data-val="2">Ален</option>
                                        <option data-val="49">Аленкер</option>
                                        <option data-val="120">Алеппо</option>
                                        <option data-val="160">Алжир</option>
                                        <option data-val="81">Алжуштрел</option>
                                        <option data-val="150">Али-Байрамлы</option>
                                        <option data-val="74">Аликанте</option>
                                        <option data-val="90">Алингсос</option>
                                        <option data-val="6">Алис-Спрингс</option>
                                        <option data-val="122">Алитус</option>
                                        <option data-val="81">Алкасер-ду-Сал</option>
                                        <option data-val="79">Алкмар</option>
                                        <option data-val="81">Алкобаса</option>
                                        <option data-val="69">Аллапул</option>
                                        <option data-val="64">Аллентаун, шт.Пенсильвания</option>
                                        <option data-val="34">Алма</option>
                                        <option data-val="81">Алмада</option>
                                        <option data-val="142">Алмалык</option>
                                        <option data-val="149">Алматы</option>
                                        <option data-val="79">Алмело</option>
                                        <option data-val="49">Алменара</option>
                                        <option data-val="79">Алмере</option>
                                        <option data-val="71">Алмирос</option>
                                        <option data-val="74">Алора</option>
                                        <option data-val="160">Алрар</option>
                                        <option data-val="79">Алсмер</option>
                                        <option data-val="68">Алст</option>
                                        <option data-val="1">Алтайское</option>
                                        <option data-val="49">Алтамира</option>
                                        <option data-val="68">Алтер</option>
                                        <option data-val="49">Алту-Арагуая</option>
                                        <option data-val="64">Алтуна, шт.Пенсильвания</option>
                                        <option data-val="142">Алтыарык</option>
                                        <option data-val="142">Алтынкуль</option>
                                        <option data-val="103">Алуксне</option>
                                        <option data-val="1">Алупка</option>
                                        <option data-val="1">Алушта</option>
                                        <option data-val="79">Алфен(Голландия)</option>
                                        <option data-val="114">Алчевск</option>
                                        <option data-val="75">Альба</option>
                                        <option data-val="74">Альбасете</option>
                                        <option data-val="75">Альбена</option>
                                        <option data-val="84">Альби</option>
                                        <option data-val="64">Альбукерке, шт.Н-Мек.</option>
                                        <option data-val="81">Альварге</option>
                                        <option data-val="74">Алькала-де-Энарес</option>
                                        <option data-val="75">Алькамо</option>
                                        <option data-val="148">Аль-Касим</option>
                                        <option data-val="21">Аль-Каф</option>
                                        <option data-val="74">Алькудиа</option>
                                        <option data-val="120">Аль-Маара</option>
                                        <option data-val="113">Аль Матэн</option>
                                        <option data-val="81">Альмейда</option>
                                        <option data-val="74">Альмерия</option>
                                        <option data-val="1">Альметьевск</option>
                                        <option data-val="81">Альмодовар</option>
                                        <option data-val="66">Альпбах</option>
                                        <option data-val="120">Аль-Растан</option>
                                        <option data-val="107">Аль-Савади</option>
                                        <option data-val="21">Альстунд</option>
                                        <option data-val="89">Альтдорф</option>
                                        <option data-val="2">Альтенбург</option>
                                        <option data-val="60">Альто-Седро, пр. Ольгин</option>
                                        <option data-val="34">Альфей-Менаше</option>
                                        <option data-val="2">Альфельд-Ляйне</option>
                                        <option data-val="74">Альхесирас</option>
                                        <option data-val="175">Амадия</option>
                                        <option data-val="75">Амальфи</option>
                                        <option data-val="71">Амальяс</option>
                                        <option data-val="123">Амара</option>
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
                                        <option hidden disabled selected value="">Не выбран</option>
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
                                    <b>10 / 100 </b>
                                </span>
                    </div>

                    <div class="formDirections   formDirections--big-mobile formDirections--char"
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
                                                    <input type="checkbox" class="cbx" id="catalog-positionckd"
                                                           checked="">
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
                                                <input type="radio" name="333rating" class="rbt " id="333ratingckd"
                                                       checked="">
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
                                            <option data-val="124"> Абхазия</option>
                                            <option data-val="281"> Абхазия</option>
                                            <option data-val="6"> Австралия</option>
                                            <option data-val="225"> Австрия</option>
                                            <option data-val="226"> Австрия</option>
                                            <option data-val="66"> Австрия</option>
                                            <option data-val="230"> Адриатика</option>
                                            <option data-val="150"> Азербайджан</option>
                                            <option data-val="159"> Албания</option>
                                            <option data-val="160"> Алжир</option>
                                            <option data-val="292"> Америк. Виргинские о-ва</option>
                                            <option data-val="289"> Американское (Восточное) Самоа</option>
                                            <option data-val="224"> Анапа</option>
                                            <option data-val="162"> Ангилья</option>
                                            <option data-val="161"> Ангола</option>
                                            <option data-val="67"> Андорра</option>
                                            <option data-val="223"> Анталия</option>
                                            <option data-val="48"> Антарктида</option>
                                            <option data-val="287"> Антарктика</option>
                                            <option data-val="126"> Антигуа и Барбуда</option>
                                            <option data-val="255"> Антильские о-ва</option>
                                            <option data-val="231"> Антильские острова</option>
                                            <option data-val="47"> Аргентина</option>
                                            <option data-val="157"> Армения</option>
                                            <option data-val="54"> Аруба</option>
                                            <option data-val="144"> Афганистан</option>
                                            <option data-val="55"> Багамы</option>
                                            <option data-val="163"> Бангладеш</option>
                                            <option data-val="56"> Барбадос</option>
                                            <option data-val="125"> Барбуда</option>
                                            <option data-val="109"> Бахрейн</option>
                                            <option data-val="158"> Беларусь</option>
                                            <option data-val="155"> Белиз</option>
                                            <option data-val="68"> Бельгия</option>
                                            <option data-val="164"> Бенин</option>
                                            <option data-val="165"> Бермудские о-ва</option>
                                            <option data-val="100"> Болгария</option>
                                            <option data-val="135"> Боливия</option>
                                            <option data-val="167"> Босния и Герцеговина</option>
                                            <option data-val="11"> Ботсвана</option>
                                            <option data-val="49"> Бразилия</option>
                                            <option data-val="248"> Брит. Виргинские о-ва</option>
                                            <option data-val="24"> Бруней</option>
                                            <option data-val="168"> Буркина-Фасо</option>
                                            <option data-val="169"> Бурунди</option>
                                            <option data-val="166"> Бутан</option>
                                            <option data-val="249"> Вануату</option>
                                            <option data-val="270"> Вануату</option>
                                            <option data-val="185"> Ватикан</option>
                                            <option data-val="69"> Великобритания</option>
                                            <option data-val="70"> Венгрия</option>
                                            <option data-val="50"> Венесуэла</option>
                                            <option data-val="232"> Венеция</option>
                                            <option data-val="284"> Восточный Тимор</option>
                                            <option data-val="25"> Вьетнам</option>
                                            <option data-val="193"> Габон</option>
                                            <option data-val="233"> Гавайи</option>
                                            <option data-val="176"> Гаити</option>
                                            <option data-val="177"> Гайана</option>
                                            <option data-val="197"> Гамбия</option>
                                            <option data-val="183"> Гана</option>
                                            <option data-val="57"> Гваделупа</option>
                                            <option data-val="133"> Гватемала</option>
                                            <option data-val="178"> Гвинея</option>
                                            <option data-val="179"> Гвинея Бисау</option>
                                            <option data-val="250"> Гвинея-Бисау</option>
                                            <option data-val="2"> Германия</option>
                                            <option data-val="182"> Гибралтар</option>
                                            <option data-val="227"> Гоа</option>
                                            <option data-val="136"> Гондурас</option>
                                            <option data-val="228"> Гонконг</option>
                                            <option data-val="180"> Гренада</option>
                                            <option data-val="181"> Гренландия</option>
                                            <option data-val="71"> Греция</option>
                                            <option data-val="146"> Грузия</option>
                                            <option data-val="72"> Дания</option>
                                            <option data-val="286"> Джерси</option>
                                            <option data-val="246"> Джибути</option>
                                            <option data-val="187"> Джибути</option>
                                            <option data-val="188"> Доминика</option>
                                            <option data-val="58"> Доминикана</option>
                                            <option data-val="245"> Евросоюз</option>
                                            <option data-val="12"> Египет</option>
                                            <option data-val="145"> Замбия</option>
                                            <option data-val="282"> Западная Сахара</option>
                                            <option data-val="4"> Зимбабве</option>
                                            <option data-val="234"> Ибица</option>
                                            <option data-val="34"> Израиль</option>
                                            <option data-val="35"> Индия</option>
                                            <option data-val="26"> Индонезия</option>
                                            <option data-val="36"> Иордания</option>
                                            <option data-val="175"> Ирак</option>
                                            <option data-val="143"> Иран</option>
                                            <option data-val="93"> Ирландия</option>
                                            <option data-val="73"> Исландия</option>
                                            <option data-val="74"> Испания</option>
                                            <option data-val="75"> Италия</option>
                                            <option data-val="184"> Йемен</option>
                                            <option data-val="251"> Кабо- Верде</option>
                                            <option data-val="242"> Кабо-Верде</option>
                                            <option data-val="244"> Кавказские Минеральные Воды</option>
                                            <option data-val="149"> Казахстан</option>
                                            <option data-val="127"> Каймановы о-ва</option>
                                            <option data-val="116"> Камбоджа</option>
                                            <option data-val="14"> Камерун</option>
                                            <option data-val="141"> Канада</option>
                                            <option data-val="235"> Канарские острова</option>
                                            <option data-val="236"> Карибы</option>
                                            <option data-val="110"> Катар</option>
                                            <option data-val="15"> Кения</option>
                                            <option data-val="76"> Кипр</option>
                                            <option data-val="280"> Киргизия</option>
                                            <option data-val="37"> Китай</option>
                                            <option data-val="296"> Кокосовые (Килинг) о-ва</option>
                                            <option data-val="128"> Колумбия</option>
                                            <option data-val="172"> Коморские о-ва</option>
                                            <option data-val="174"> Конго</option>
                                            <option data-val="253"> Корея</option>
                                            <option data-val="279"> Корея</option>
                                            <option data-val="198"> Королевство Тонга</option>
                                            <option data-val="59"> Коста-Рика</option>
                                            <option data-val="173"> Кот-д’Ивуар</option>
                                            <option data-val="60"> Куба</option>
                                            <option data-val="195"> Кувейт</option>
                                            <option data-val="8"> Кука о.</option>
                                            <option data-val="254"> Кука острова</option>
                                            <option data-val="252"> Кыргызстан</option>
                                            <option data-val="199"> Кыргызтан</option>
                                            <option data-val="291"> Кюрасао о.</option>
                                            <option data-val="200"> Лаос</option>
                                            <option data-val="103"> Латвия</option>
                                            <option data-val="201"> Лесото</option>
                                            <option data-val="202"> Либерия</option>
                                            <option data-val="113"> Ливан</option>
                                            <option data-val="152"> Ливия</option>
                                            <option data-val="122"> Литва</option>
                                            <option data-val="203"> Лихтенштейн</option>
                                            <option data-val="139"> Люксембург</option>
                                            <option data-val="41"> Маврикий</option>
                                            <option data-val="207"> Мавритания</option>
                                            <option data-val="42"> Мадагаскар</option>
                                            <option data-val="205"> Македония</option>
                                            <option data-val="204"> Малави</option>
                                            <option data-val="27"> Малайзия</option>
                                            <option data-val="206"> Мали</option>
                                            <option data-val="43"> Мальдивы</option>
                                            <option data-val="77"> Мальта</option>
                                            <option data-val="247"> Марианские о-ва</option>
                                            <option data-val="16"> Марокко</option>
                                            <option data-val="61"> Мартиника</option>
                                            <option data-val="267"> Маршалловы о-ва</option>
                                            <option data-val="62"> Мексика</option>
                                            <option data-val="208"> Микронезия (ФШМ)</option>
                                            <option data-val="156"> Мозамбик</option>
                                            <option data-val="151"> Молдова</option>
                                            <option data-val="78"> Монако</option>
                                            <option data-val="209"> Монголия</option>
                                            <option data-val="117"> Мьянма (Бирма)</option>
                                            <option data-val="17"> Намибия</option>
                                            <option data-val="274"> Независимое Государство Самоа</option>
                                            <option data-val="38"> Непал</option>
                                            <option data-val="212"> Нигер</option>
                                            <option data-val="211"> Нигерия</option>
                                            <option data-val="79"> Нидерланды</option>
                                            <option data-val="129"> Никарагуа</option>
                                            <option data-val="272"> Ниуэ</option>
                                            <option data-val="7"> Новая Зеландия</option>
                                            <option data-val="210"> Новая Каледония</option>
                                            <option data-val="80"> Норвегия</option>
                                            <option data-val="32"> ОАЭ</option>
                                            <option data-val="107"> Оман</option>
                                            <option data-val="153"> Пакистан</option>
                                            <option data-val="278"> Палау</option>
                                            <option data-val="256"> Палестина</option>
                                            <option data-val="130"> Панама</option>
                                            <option data-val="28"> Папуа Новая Гвинея</option>
                                            <option data-val="137"> Парагвай</option>
                                            <option data-val="51"> Перу</option>
                                            <option data-val="140"> Польша</option>
                                            <option data-val="81"> Португалия</option>
                                            <option data-val="186"> Пуэрто-Рико</option>
                                            <option data-val="271"> Республика Кирибати</option>
                                            <option data-val="283"> Республика Конго</option>
                                            <option data-val="294"> Республика Косово</option>
                                            <option data-val="273"> Республика Палау</option>
                                            <option data-val="44"> Реюньон</option>
                                            <option data-val="1"> Россия</option>
                                            <option data-val="257"> Руанда</option>
                                            <option data-val="123"> Румыния</option>
                                            <option data-val="64"> США</option>
                                            <option data-val="258"> Саба</option>
                                            <option data-val="189"> Сальвадор</option>
                                            <option data-val="290"> Сан-Марино</option>
                                            <option data-val="275"> Сан-Томе и Принсипи</option>
                                            <option data-val="238"> Санта-Лючия</option>
                                            <option data-val="239"> Сардиния</option>
                                            <option data-val="148"> Саудовская Аравия</option>
                                            <option data-val="19"> Свазиленд</option>
                                            <option data-val="194"> Северная Корея</option>
                                            <option data-val="45"> Сейшелы</option>
                                            <option data-val="259"> Сен-Бартельми</option>
                                            <option data-val="260"> Сен-Мартен</option>
                                            <option data-val="295"> Сен-Пьер и Микелон</option>
                                            <option data-val="213"> Сенегал</option>
                                            <option data-val="262"> Сент- Люсия</option>
                                            <option data-val="261"> Сент-Винсент и Гренадины</option>
                                            <option data-val="288"> Сент-Китс и Невис</option>
                                            <option data-val="63"> Сент-Люсия</option>
                                            <option data-val="221"> Сербия</option>
                                            <option data-val="222"> Сербия</option>
                                            <option data-val="29"> Сингапур</option>
                                            <option data-val="120"> Сирия</option>
                                            <option data-val="229"> Сицилия</option>
                                            <option data-val="82"> Словакия</option>
                                            <option data-val="96"> Словения</option>
                                            <option data-val="293"> Соломоновы о-ва</option>
                                            <option data-val="214"> Сомали</option>
                                            <option data-val="240"> Сочи</option>
                                            <option data-val="215"> Судан</option>
                                            <option data-val="216"> Суринам</option>
                                            <option data-val="263"> Сьерра-Леоне</option>
                                            <option data-val="269"> Сьерра-Леоне</option>
                                            <option data-val="217"> Таджикистан</option>
                                            <option data-val="30"> Таиланд</option>
                                            <option data-val="264"> Таити</option>
                                            <option data-val="241"> Таити</option>
                                            <option data-val="39"> Тайвань</option>
                                            <option data-val="20"> Танзания</option>
                                            <option data-val="220"> Теркс и Кайкос</option>
                                            <option data-val="219"> Того</option>
                                            <option data-val="218"> Тринидад и Тобаго</option>
                                            <option data-val="265"> Тринидад и Тобаго</option>
                                            <option data-val="285"> Тувалу</option>
                                            <option data-val="21"> Тунис</option>
                                            <option data-val="147"> Туркменистан</option>
                                            <option data-val="83"> Турция</option>
                                            <option data-val="22"> Уганда</option>
                                            <option data-val="142"> Узбекистан</option>
                                            <option data-val="114"> Украина</option>
                                            <option data-val="134"> Уругвай</option>
                                            <option data-val="276"> Федерация Сент-Китс и Невис</option>
                                            <option data-val="9"> Фиджи</option>
                                            <option data-val="31"> Филиппины</option>
                                            <option data-val="3"> Финляндия</option>
                                            <option data-val="84"> Франция</option>
                                            <option data-val="196"> Французская Гвиана</option>
                                            <option data-val="132"> Французская Полинезия</option>
                                            <option data-val="85"> Хорватия</option>
                                            <option data-val="170"> Центрально-Африканская Республика</option>
                                            <option data-val="171"> Чад</option>
                                            <option data-val="86"> Черногория</option>
                                            <option data-val="87"> Чехия</option>
                                            <option data-val="52"> Чили</option>
                                            <option data-val="89"> Швейцария</option>
                                            <option data-val="90"> Швеция</option>
                                            <option data-val="243"> Шотландия</option>
                                            <option data-val="46"> Шри-Ланка</option>
                                            <option data-val="53"> Эквадор</option>
                                            <option data-val="190"> Экваториальная Гвинея</option>
                                            <option data-val="191"> Эритрея</option>
                                            <option data-val="118"> Эстония</option>
                                            <option data-val="192"> Эфиопия</option>
                                            <option data-val="23"> ЮАР</option>
                                            <option data-val="266"> Югославия</option>
                                            <option data-val="119"> Южная Корея</option>
                                            <option data-val="298"> Южная Осетия</option>
                                            <option data-val="297"> Южный Судан</option>
                                            <option data-val="65"> Ямайка</option>
                                            <option data-val="40"> Япония</option>
                                            <option data-val="18"> о. Зеленого Мыса</option>
                                            <option data-val="237"> о. Крит</option>
                                            <option data-val="268"> о.Норфолк</option>
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
                                        <option data-val="89">Аарау</option>
                                        <option data-val="2">Аахен</option>
                                        <option data-val="2">Аах у Трира</option>
                                        <option data-val="143">Абадан</option>
                                        <option data-val="143">Абаде</option>
                                        <option data-val="1">Абаза</option>
                                        <option data-val="49">Абазтетуба</option>
                                        <option data-val="1">Абакан</option>
                                        <option data-val="75">Абано Терме</option>
                                        <option data-val="146">Абаша</option>
                                        <option data-val="70">Абашар</option>
                                        <option data-val="93">Аббифил</option>
                                        <option data-val="153">Абботабад</option>
                                        <option data-val="1">Абдулино</option>
                                        <option data-val="211">Абеокута</option>
                                        <option data-val="69">Абердин</option>
                                        <option data-val="64">Абердин, шт.Южная Дакота</option>
                                        <option data-val="69">Аберистуит</option>
                                        <option data-val="1">Абзаково</option>
                                        <option data-val="173">Абиджан</option>
                                        <option data-val="1">Абинск</option>
                                        <option data-val="12">Абнуб</option>
                                        <option data-val="157">Абовян</option>
                                        <option data-val="81">Абрантиш</option>
                                        <option data-val="66">Абтенау</option>
                                        <option data-val="148">Абу-Дабай</option>
                                        <option data-val="32">Абу-Даби</option>
                                        <option data-val="211">Абуджа</option>
                                        <option data-val="12">Абу Зенима</option>
                                        <option data-val="12">Абу Рудайс</option>
                                        <option data-val="12">Абу Сувейр</option>
                                        <option data-val="12">Абу Тиг</option>
                                        <option data-val="148">Абчейк</option>
                                        <option data-val="89">Аванш</option>
                                        <option data-val="140">Августов</option>
                                        <option data-val="81">Авейру</option>
                                        <option data-val="75">Авелино</option>
                                        <option data-val="75">Авецано</option>
                                        <option data-val="148">Авив</option>
                                        <option data-val="74">Авила</option>
                                        <option data-val="62">Авила-Сателит</option>
                                        <option data-val="69">Авимор</option>
                                        <option data-val="84">Авиньон</option>
                                        <option data-val="83">Авсаллар</option>
                                        <option data-val="12">Ага</option>
                                        <option data-val="16">Агадир</option>
                                        <option data-val="157">Агверан</option>
                                        <option data-val="150">Агдам</option>
                                        <option data-val="150">Агдаш</option>
                                        <option data-val="150">Агджабеди</option>
                                        <option data-val="35">Агра</option>
                                        <option data-val="60">Аграмонте пр.Матансас</option>
                                        <option data-val="75">Агриженто</option>
                                        <option data-val="71">Агринион</option>
                                        <option data-val="75">Агрополи</option>
                                        <option data-val="76">Агрос</option>
                                        <option data-val="83">Агры</option>
                                        <option data-val="1">Агрыз</option>
                                        <option data-val="150">Агсу</option>
                                        <option data-val="60">Агуада-де-Пасахерос, пр.Сьенфуэгос</option>
                                        <option data-val="60">Агуакате пр.Гавана</option>
                                        <option data-val="62">Агуаскальентес</option>
                                        <option data-val="175">Адамия</option>
                                        <option data-val="64">Адамстаун, шт.Пенсильвания</option>
                                        <option data-val="83">Адана</option>
                                        <option data-val="70">Аданд</option>
                                        <option data-val="192">Аддис-Абеба</option>
                                        <option data-val="6">Аделаида</option>
                                        <option data-val="74">Адехе</option>
                                        <option data-val="150">Аджикабул</option>
                                        <option data-val="32">Аджман</option>
                                        <option data-val="146">Адигени</option>
                                        <option data-val="1">Адлер</option>
                                        <option data-val="119">Адон</option>
                                        <option data-val="89">Адорф</option>
                                        <option data-val="75">Адриа</option>
                                        <option data-val="83">Адыяман</option>
                                        <option data-val="84">Ажен</option>
                                        <option data-val="34">Аза</option>
                                        <option data-val="81">Азамбужа</option>
                                        <option data-val="175">Азизия</option>
                                        <option data-val="1">Азнакаево</option>
                                        <option data-val="1">Азов</option>
                                        <option data-val="75">Азоло</option>
                                        <option data-val="34">Азор</option>
                                        <option data-val="2">Аихвальд</option>
                                        <option data-val="64">Айдахо-Фолс, шт.Айдахо</option>
                                        <option data-val="83">Айдын</option>
                                        <option data-val="2">Айзенах</option>
                                        <option data-val="2">Айзенхюттенштадт</option>
                                        <option data-val="66">Айзенштадт</option>
                                        <option data-val="66">Айзенэрц</option>
                                        <option data-val="103">Айзкраукле</option>
                                        <option data-val="2">Айленбург</option>
                                        <option data-val="2">Айнбек</option>
                                        <option data-val="160">Айн-Дефла</option>
                                        <option data-val="89">Айнзидельн</option>
                                        <option data-val="160">Айн-Темухент</option>
                                        <option data-val="12">Айн Эль Сохна</option>
                                        <option data-val="64">Айронтон, шт.Пенсильвания</option>
                                        <option data-val="100">Айтос</option>
                                        <option data-val="76">Айя-Напа</option>
                                        <option data-val="36">Акаба</option>
                                        <option data-val="142">Акалтын</option>
                                        <option data-val="62">Акапулько</option>
                                        <option data-val="40">Акаси</option>
                                        <option data-val="147">Акдепе</option>
                                        <option data-val="207">Акжужт</option>
                                        <option data-val="49">Акидауна</option>
                                        <option data-val="114">Акимовка</option>
                                        <option data-val="40">Акита</option>
                                        <option data-val="183">Аккра</option>
                                        <option data-val="142">Аккурган</option>
                                        <option data-val="142">Акмангит</option>
                                        <option data-val="34">Ако</option>
                                        <option data-val="175">Акра</option>
                                        <option data-val="73">Акранес</option>
                                        <option data-val="64">Акрон, шт.Огайо</option>
                                        <option data-val="76">Акротири</option>
                                        <option data-val="1">Аксай</option>
                                        <option data-val="149">Аксай</option>
                                        <option data-val="83">Аксарай</option>
                                        <option data-val="150">Акстафа</option>
                                        <option data-val="149">Аксу</option>
                                        <option data-val="149">Актау</option>
                                        <option data-val="142">Акташ</option>
                                        <option data-val="149">Актобе</option>
                                        <option data-val="149">Актюбинск</option>
                                        <option data-val="21">Акуда</option>
                                        <option data-val="75">Акуи Терме</option>
                                        <option data-val="73">Акурейри</option>
                                        <option data-val="157">Алаверды</option>
                                        <option data-val="3">Алаво</option>
                                        <option data-val="3">Алавус</option>
                                        <option data-val="49">Алагоа-Гранди</option>
                                        <option data-val="49">Алагоиньяс</option>
                                        <option data-val="84">Алансон</option>
                                        <option data-val="83">Аланья</option>
                                        <option data-val="1">Алапаевск</option>
                                        <option data-val="1">Алапаевск</option>
                                        <option data-val="75">Алассио</option>
                                        <option data-val="142">Алат</option>
                                        <option data-val="1">Алатырь</option>
                                        <option data-val="74">Алаурин-эль-Гранде</option>
                                        <option data-val="124">Алахадзы</option>
                                        <option data-val="59">Алахуэла</option>
                                        <option data-val="123">Алба-Юлия</option>
                                        <option data-val="100">Албена</option>
                                        <option data-val="90">Албеста</option>
                                        <option data-val="79">Алблассердам</option>
                                        <option data-val="81">Албуфейра</option>
                                        <option data-val="175">Алвия</option>
                                        <option data-val="1">Алдан</option>
                                        <option data-val="7">Алегзандра</option>
                                        <option data-val="49">Алегрети</option>
                                        <option data-val="113">Алей</option>
                                        <option data-val="12">Александрия</option>
                                        <option data-val="123">Александрия</option>
                                        <option data-val="64">Александрия, шт.Луизианна</option>
                                        <option data-val="1">Александров</option>
                                        <option data-val="114">Александровка</option>
                                        <option data-val="1">Александровск</option>
                                        <option data-val="1">Александровск-Сахалинский</option>
                                        <option data-val="71">Александруполис</option>
                                        <option data-val="1">Алексеевка</option>
                                        <option data-val="1">Алексин</option>
                                        <option data-val="2">Ален</option>
                                        <option data-val="49">Аленкер</option>
                                        <option data-val="120">Алеппо</option>
                                        <option data-val="160">Алжир</option>
                                        <option data-val="81">Алжуштрел</option>
                                        <option data-val="150">Али-Байрамлы</option>
                                        <option data-val="74">Аликанте</option>
                                        <option data-val="90">Алингсос</option>
                                        <option data-val="6">Алис-Спрингс</option>
                                        <option data-val="122">Алитус</option>
                                        <option data-val="81">Алкасер-ду-Сал</option>
                                        <option data-val="79">Алкмар</option>
                                        <option data-val="81">Алкобаса</option>
                                        <option data-val="69">Аллапул</option>
                                        <option data-val="64">Аллентаун, шт.Пенсильвания</option>
                                        <option data-val="34">Алма</option>
                                        <option data-val="81">Алмада</option>
                                        <option data-val="142">Алмалык</option>
                                        <option data-val="149">Алматы</option>
                                        <option data-val="79">Алмело</option>
                                        <option data-val="49">Алменара</option>
                                        <option data-val="79">Алмере</option>
                                        <option data-val="71">Алмирос</option>
                                        <option data-val="74">Алора</option>
                                        <option data-val="160">Алрар</option>
                                        <option data-val="79">Алсмер</option>
                                        <option data-val="68">Алст</option>
                                        <option data-val="1">Алтайское</option>
                                        <option data-val="49">Алтамира</option>
                                        <option data-val="68">Алтер</option>
                                        <option data-val="49">Алту-Арагуая</option>
                                        <option data-val="64">Алтуна, шт.Пенсильвания</option>
                                        <option data-val="142">Алтыарык</option>
                                        <option data-val="142">Алтынкуль</option>
                                        <option data-val="103">Алуксне</option>
                                        <option data-val="1">Алупка</option>
                                        <option data-val="1">Алушта</option>
                                        <option data-val="79">Алфен(Голландия)</option>
                                        <option data-val="114">Алчевск</option>
                                        <option data-val="75">Альба</option>
                                        <option data-val="74">Альбасете</option>
                                        <option data-val="75">Альбена</option>
                                        <option data-val="84">Альби</option>
                                        <option data-val="64">Альбукерке, шт.Н-Мек.</option>
                                        <option data-val="81">Альварге</option>
                                        <option data-val="74">Алькала-де-Энарес</option>
                                        <option data-val="75">Алькамо</option>
                                        <option data-val="148">Аль-Касим</option>
                                        <option data-val="21">Аль-Каф</option>
                                        <option data-val="74">Алькудиа</option>
                                        <option data-val="120">Аль-Маара</option>
                                        <option data-val="113">Аль Матэн</option>
                                        <option data-val="81">Альмейда</option>
                                        <option data-val="74">Альмерия</option>
                                        <option data-val="1">Альметьевск</option>
                                        <option data-val="81">Альмодовар</option>
                                        <option data-val="66">Альпбах</option>
                                        <option data-val="120">Аль-Растан</option>
                                        <option data-val="107">Аль-Савади</option>
                                        <option data-val="21">Альстунд</option>
                                        <option data-val="89">Альтдорф</option>
                                        <option data-val="2">Альтенбург</option>
                                        <option data-val="60">Альто-Седро, пр. Ольгин</option>
                                        <option data-val="34">Альфей-Менаше</option>
                                        <option data-val="2">Альфельд-Ляйне</option>
                                        <option data-val="74">Альхесирас</option>
                                        <option data-val="175">Амадия</option>
                                        <option data-val="75">Амальфи</option>
                                        <option data-val="71">Амальяс</option>
                                        <option data-val="123">Амара</option>
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
                                        <option hidden disabled selected value="">Не выбран</option>
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
                                    <b>10 / 100 </b>
                                </span>
                    </div>

                    <div class="formDirections   formDirections--big-mobile formDirections--char"
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
                                                    <input type="checkbox" class="cbx" id="catalog-positionckd"
                                                           checked="">
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
                                                <input type="radio" name="333rating" class="rbt " id="333ratingckd"
                                                       checked="">
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
                                            <option data-val="124"> Абхазия</option>
                                            <option data-val="281"> Абхазия</option>
                                            <option data-val="6"> Австралия</option>
                                            <option data-val="225"> Австрия</option>
                                            <option data-val="226"> Австрия</option>
                                            <option data-val="66"> Австрия</option>
                                            <option data-val="230"> Адриатика</option>
                                            <option data-val="150"> Азербайджан</option>
                                            <option data-val="159"> Албания</option>
                                            <option data-val="160"> Алжир</option>
                                            <option data-val="292"> Америк. Виргинские о-ва</option>
                                            <option data-val="289"> Американское (Восточное) Самоа</option>
                                            <option data-val="224"> Анапа</option>
                                            <option data-val="162"> Ангилья</option>
                                            <option data-val="161"> Ангола</option>
                                            <option data-val="67"> Андорра</option>
                                            <option data-val="223"> Анталия</option>
                                            <option data-val="48"> Антарктида</option>
                                            <option data-val="287"> Антарктика</option>
                                            <option data-val="126"> Антигуа и Барбуда</option>
                                            <option data-val="255"> Антильские о-ва</option>
                                            <option data-val="231"> Антильские острова</option>
                                            <option data-val="47"> Аргентина</option>
                                            <option data-val="157"> Армения</option>
                                            <option data-val="54"> Аруба</option>
                                            <option data-val="144"> Афганистан</option>
                                            <option data-val="55"> Багамы</option>
                                            <option data-val="163"> Бангладеш</option>
                                            <option data-val="56"> Барбадос</option>
                                            <option data-val="125"> Барбуда</option>
                                            <option data-val="109"> Бахрейн</option>
                                            <option data-val="158"> Беларусь</option>
                                            <option data-val="155"> Белиз</option>
                                            <option data-val="68"> Бельгия</option>
                                            <option data-val="164"> Бенин</option>
                                            <option data-val="165"> Бермудские о-ва</option>
                                            <option data-val="100"> Болгария</option>
                                            <option data-val="135"> Боливия</option>
                                            <option data-val="167"> Босния и Герцеговина</option>
                                            <option data-val="11"> Ботсвана</option>
                                            <option data-val="49"> Бразилия</option>
                                            <option data-val="248"> Брит. Виргинские о-ва</option>
                                            <option data-val="24"> Бруней</option>
                                            <option data-val="168"> Буркина-Фасо</option>
                                            <option data-val="169"> Бурунди</option>
                                            <option data-val="166"> Бутан</option>
                                            <option data-val="249"> Вануату</option>
                                            <option data-val="270"> Вануату</option>
                                            <option data-val="185"> Ватикан</option>
                                            <option data-val="69"> Великобритания</option>
                                            <option data-val="70"> Венгрия</option>
                                            <option data-val="50"> Венесуэла</option>
                                            <option data-val="232"> Венеция</option>
                                            <option data-val="284"> Восточный Тимор</option>
                                            <option data-val="25"> Вьетнам</option>
                                            <option data-val="193"> Габон</option>
                                            <option data-val="233"> Гавайи</option>
                                            <option data-val="176"> Гаити</option>
                                            <option data-val="177"> Гайана</option>
                                            <option data-val="197"> Гамбия</option>
                                            <option data-val="183"> Гана</option>
                                            <option data-val="57"> Гваделупа</option>
                                            <option data-val="133"> Гватемала</option>
                                            <option data-val="178"> Гвинея</option>
                                            <option data-val="179"> Гвинея Бисау</option>
                                            <option data-val="250"> Гвинея-Бисау</option>
                                            <option data-val="2"> Германия</option>
                                            <option data-val="182"> Гибралтар</option>
                                            <option data-val="227"> Гоа</option>
                                            <option data-val="136"> Гондурас</option>
                                            <option data-val="228"> Гонконг</option>
                                            <option data-val="180"> Гренада</option>
                                            <option data-val="181"> Гренландия</option>
                                            <option data-val="71"> Греция</option>
                                            <option data-val="146"> Грузия</option>
                                            <option data-val="72"> Дания</option>
                                            <option data-val="286"> Джерси</option>
                                            <option data-val="246"> Джибути</option>
                                            <option data-val="187"> Джибути</option>
                                            <option data-val="188"> Доминика</option>
                                            <option data-val="58"> Доминикана</option>
                                            <option data-val="245"> Евросоюз</option>
                                            <option data-val="12"> Египет</option>
                                            <option data-val="145"> Замбия</option>
                                            <option data-val="282"> Западная Сахара</option>
                                            <option data-val="4"> Зимбабве</option>
                                            <option data-val="234"> Ибица</option>
                                            <option data-val="34"> Израиль</option>
                                            <option data-val="35"> Индия</option>
                                            <option data-val="26"> Индонезия</option>
                                            <option data-val="36"> Иордания</option>
                                            <option data-val="175"> Ирак</option>
                                            <option data-val="143"> Иран</option>
                                            <option data-val="93"> Ирландия</option>
                                            <option data-val="73"> Исландия</option>
                                            <option data-val="74"> Испания</option>
                                            <option data-val="75"> Италия</option>
                                            <option data-val="184"> Йемен</option>
                                            <option data-val="251"> Кабо- Верде</option>
                                            <option data-val="242"> Кабо-Верде</option>
                                            <option data-val="244"> Кавказские Минеральные Воды</option>
                                            <option data-val="149"> Казахстан</option>
                                            <option data-val="127"> Каймановы о-ва</option>
                                            <option data-val="116"> Камбоджа</option>
                                            <option data-val="14"> Камерун</option>
                                            <option data-val="141"> Канада</option>
                                            <option data-val="235"> Канарские острова</option>
                                            <option data-val="236"> Карибы</option>
                                            <option data-val="110"> Катар</option>
                                            <option data-val="15"> Кения</option>
                                            <option data-val="76"> Кипр</option>
                                            <option data-val="280"> Киргизия</option>
                                            <option data-val="37"> Китай</option>
                                            <option data-val="296"> Кокосовые (Килинг) о-ва</option>
                                            <option data-val="128"> Колумбия</option>
                                            <option data-val="172"> Коморские о-ва</option>
                                            <option data-val="174"> Конго</option>
                                            <option data-val="253"> Корея</option>
                                            <option data-val="279"> Корея</option>
                                            <option data-val="198"> Королевство Тонга</option>
                                            <option data-val="59"> Коста-Рика</option>
                                            <option data-val="173"> Кот-д’Ивуар</option>
                                            <option data-val="60"> Куба</option>
                                            <option data-val="195"> Кувейт</option>
                                            <option data-val="8"> Кука о.</option>
                                            <option data-val="254"> Кука острова</option>
                                            <option data-val="252"> Кыргызстан</option>
                                            <option data-val="199"> Кыргызтан</option>
                                            <option data-val="291"> Кюрасао о.</option>
                                            <option data-val="200"> Лаос</option>
                                            <option data-val="103"> Латвия</option>
                                            <option data-val="201"> Лесото</option>
                                            <option data-val="202"> Либерия</option>
                                            <option data-val="113"> Ливан</option>
                                            <option data-val="152"> Ливия</option>
                                            <option data-val="122"> Литва</option>
                                            <option data-val="203"> Лихтенштейн</option>
                                            <option data-val="139"> Люксембург</option>
                                            <option data-val="41"> Маврикий</option>
                                            <option data-val="207"> Мавритания</option>
                                            <option data-val="42"> Мадагаскар</option>
                                            <option data-val="205"> Македония</option>
                                            <option data-val="204"> Малави</option>
                                            <option data-val="27"> Малайзия</option>
                                            <option data-val="206"> Мали</option>
                                            <option data-val="43"> Мальдивы</option>
                                            <option data-val="77"> Мальта</option>
                                            <option data-val="247"> Марианские о-ва</option>
                                            <option data-val="16"> Марокко</option>
                                            <option data-val="61"> Мартиника</option>
                                            <option data-val="267"> Маршалловы о-ва</option>
                                            <option data-val="62"> Мексика</option>
                                            <option data-val="208"> Микронезия (ФШМ)</option>
                                            <option data-val="156"> Мозамбик</option>
                                            <option data-val="151"> Молдова</option>
                                            <option data-val="78"> Монако</option>
                                            <option data-val="209"> Монголия</option>
                                            <option data-val="117"> Мьянма (Бирма)</option>
                                            <option data-val="17"> Намибия</option>
                                            <option data-val="274"> Независимое Государство Самоа</option>
                                            <option data-val="38"> Непал</option>
                                            <option data-val="212"> Нигер</option>
                                            <option data-val="211"> Нигерия</option>
                                            <option data-val="79"> Нидерланды</option>
                                            <option data-val="129"> Никарагуа</option>
                                            <option data-val="272"> Ниуэ</option>
                                            <option data-val="7"> Новая Зеландия</option>
                                            <option data-val="210"> Новая Каледония</option>
                                            <option data-val="80"> Норвегия</option>
                                            <option data-val="32"> ОАЭ</option>
                                            <option data-val="107"> Оман</option>
                                            <option data-val="153"> Пакистан</option>
                                            <option data-val="278"> Палау</option>
                                            <option data-val="256"> Палестина</option>
                                            <option data-val="130"> Панама</option>
                                            <option data-val="28"> Папуа Новая Гвинея</option>
                                            <option data-val="137"> Парагвай</option>
                                            <option data-val="51"> Перу</option>
                                            <option data-val="140"> Польша</option>
                                            <option data-val="81"> Португалия</option>
                                            <option data-val="186"> Пуэрто-Рико</option>
                                            <option data-val="271"> Республика Кирибати</option>
                                            <option data-val="283"> Республика Конго</option>
                                            <option data-val="294"> Республика Косово</option>
                                            <option data-val="273"> Республика Палау</option>
                                            <option data-val="44"> Реюньон</option>
                                            <option data-val="1"> Россия</option>
                                            <option data-val="257"> Руанда</option>
                                            <option data-val="123"> Румыния</option>
                                            <option data-val="64"> США</option>
                                            <option data-val="258"> Саба</option>
                                            <option data-val="189"> Сальвадор</option>
                                            <option data-val="290"> Сан-Марино</option>
                                            <option data-val="275"> Сан-Томе и Принсипи</option>
                                            <option data-val="238"> Санта-Лючия</option>
                                            <option data-val="239"> Сардиния</option>
                                            <option data-val="148"> Саудовская Аравия</option>
                                            <option data-val="19"> Свазиленд</option>
                                            <option data-val="194"> Северная Корея</option>
                                            <option data-val="45"> Сейшелы</option>
                                            <option data-val="259"> Сен-Бартельми</option>
                                            <option data-val="260"> Сен-Мартен</option>
                                            <option data-val="295"> Сен-Пьер и Микелон</option>
                                            <option data-val="213"> Сенегал</option>
                                            <option data-val="262"> Сент- Люсия</option>
                                            <option data-val="261"> Сент-Винсент и Гренадины</option>
                                            <option data-val="288"> Сент-Китс и Невис</option>
                                            <option data-val="63"> Сент-Люсия</option>
                                            <option data-val="221"> Сербия</option>
                                            <option data-val="222"> Сербия</option>
                                            <option data-val="29"> Сингапур</option>
                                            <option data-val="120"> Сирия</option>
                                            <option data-val="229"> Сицилия</option>
                                            <option data-val="82"> Словакия</option>
                                            <option data-val="96"> Словения</option>
                                            <option data-val="293"> Соломоновы о-ва</option>
                                            <option data-val="214"> Сомали</option>
                                            <option data-val="240"> Сочи</option>
                                            <option data-val="215"> Судан</option>
                                            <option data-val="216"> Суринам</option>
                                            <option data-val="263"> Сьерра-Леоне</option>
                                            <option data-val="269"> Сьерра-Леоне</option>
                                            <option data-val="217"> Таджикистан</option>
                                            <option data-val="30"> Таиланд</option>
                                            <option data-val="264"> Таити</option>
                                            <option data-val="241"> Таити</option>
                                            <option data-val="39"> Тайвань</option>
                                            <option data-val="20"> Танзания</option>
                                            <option data-val="220"> Теркс и Кайкос</option>
                                            <option data-val="219"> Того</option>
                                            <option data-val="218"> Тринидад и Тобаго</option>
                                            <option data-val="265"> Тринидад и Тобаго</option>
                                            <option data-val="285"> Тувалу</option>
                                            <option data-val="21"> Тунис</option>
                                            <option data-val="147"> Туркменистан</option>
                                            <option data-val="83"> Турция</option>
                                            <option data-val="22"> Уганда</option>
                                            <option data-val="142"> Узбекистан</option>
                                            <option data-val="114"> Украина</option>
                                            <option data-val="134"> Уругвай</option>
                                            <option data-val="276"> Федерация Сент-Китс и Невис</option>
                                            <option data-val="9"> Фиджи</option>
                                            <option data-val="31"> Филиппины</option>
                                            <option data-val="3"> Финляндия</option>
                                            <option data-val="84"> Франция</option>
                                            <option data-val="196"> Французская Гвиана</option>
                                            <option data-val="132"> Французская Полинезия</option>
                                            <option data-val="85"> Хорватия</option>
                                            <option data-val="170"> Центрально-Африканская Республика</option>
                                            <option data-val="171"> Чад</option>
                                            <option data-val="86"> Черногория</option>
                                            <option data-val="87"> Чехия</option>
                                            <option data-val="52"> Чили</option>
                                            <option data-val="89"> Швейцария</option>
                                            <option data-val="90"> Швеция</option>
                                            <option data-val="243"> Шотландия</option>
                                            <option data-val="46"> Шри-Ланка</option>
                                            <option data-val="53"> Эквадор</option>
                                            <option data-val="190"> Экваториальная Гвинея</option>
                                            <option data-val="191"> Эритрея</option>
                                            <option data-val="118"> Эстония</option>
                                            <option data-val="192"> Эфиопия</option>
                                            <option data-val="23"> ЮАР</option>
                                            <option data-val="266"> Югославия</option>
                                            <option data-val="119"> Южная Корея</option>
                                            <option data-val="298"> Южная Осетия</option>
                                            <option data-val="297"> Южный Судан</option>
                                            <option data-val="65"> Ямайка</option>
                                            <option data-val="40"> Япония</option>
                                            <option data-val="18"> о. Зеленого Мыса</option>
                                            <option data-val="237"> о. Крит</option>
                                            <option data-val="268"> о.Норфолк</option>
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
                                        <option data-val="89">Аарау</option>
                                        <option data-val="2">Аахен</option>
                                        <option data-val="2">Аах у Трира</option>
                                        <option data-val="143">Абадан</option>
                                        <option data-val="143">Абаде</option>
                                        <option data-val="1">Абаза</option>
                                        <option data-val="49">Абазтетуба</option>
                                        <option data-val="1">Абакан</option>
                                        <option data-val="75">Абано Терме</option>
                                        <option data-val="146">Абаша</option>
                                        <option data-val="70">Абашар</option>
                                        <option data-val="93">Аббифил</option>
                                        <option data-val="153">Абботабад</option>
                                        <option data-val="1">Абдулино</option>
                                        <option data-val="211">Абеокута</option>
                                        <option data-val="69">Абердин</option>
                                        <option data-val="64">Абердин, шт.Южная Дакота</option>
                                        <option data-val="69">Аберистуит</option>
                                        <option data-val="1">Абзаково</option>
                                        <option data-val="173">Абиджан</option>
                                        <option data-val="1">Абинск</option>
                                        <option data-val="12">Абнуб</option>
                                        <option data-val="157">Абовян</option>
                                        <option data-val="81">Абрантиш</option>
                                        <option data-val="66">Абтенау</option>
                                        <option data-val="148">Абу-Дабай</option>
                                        <option data-val="32">Абу-Даби</option>
                                        <option data-val="211">Абуджа</option>
                                        <option data-val="12">Абу Зенима</option>
                                        <option data-val="12">Абу Рудайс</option>
                                        <option data-val="12">Абу Сувейр</option>
                                        <option data-val="12">Абу Тиг</option>
                                        <option data-val="148">Абчейк</option>
                                        <option data-val="89">Аванш</option>
                                        <option data-val="140">Августов</option>
                                        <option data-val="81">Авейру</option>
                                        <option data-val="75">Авелино</option>
                                        <option data-val="75">Авецано</option>
                                        <option data-val="148">Авив</option>
                                        <option data-val="74">Авила</option>
                                        <option data-val="62">Авила-Сателит</option>
                                        <option data-val="69">Авимор</option>
                                        <option data-val="84">Авиньон</option>
                                        <option data-val="83">Авсаллар</option>
                                        <option data-val="12">Ага</option>
                                        <option data-val="16">Агадир</option>
                                        <option data-val="157">Агверан</option>
                                        <option data-val="150">Агдам</option>
                                        <option data-val="150">Агдаш</option>
                                        <option data-val="150">Агджабеди</option>
                                        <option data-val="35">Агра</option>
                                        <option data-val="60">Аграмонте пр.Матансас</option>
                                        <option data-val="75">Агриженто</option>
                                        <option data-val="71">Агринион</option>
                                        <option data-val="75">Агрополи</option>
                                        <option data-val="76">Агрос</option>
                                        <option data-val="83">Агры</option>
                                        <option data-val="1">Агрыз</option>
                                        <option data-val="150">Агсу</option>
                                        <option data-val="60">Агуада-де-Пасахерос, пр.Сьенфуэгос</option>
                                        <option data-val="60">Агуакате пр.Гавана</option>
                                        <option data-val="62">Агуаскальентес</option>
                                        <option data-val="175">Адамия</option>
                                        <option data-val="64">Адамстаун, шт.Пенсильвания</option>
                                        <option data-val="83">Адана</option>
                                        <option data-val="70">Аданд</option>
                                        <option data-val="192">Аддис-Абеба</option>
                                        <option data-val="6">Аделаида</option>
                                        <option data-val="74">Адехе</option>
                                        <option data-val="150">Аджикабул</option>
                                        <option data-val="32">Аджман</option>
                                        <option data-val="146">Адигени</option>
                                        <option data-val="1">Адлер</option>
                                        <option data-val="119">Адон</option>
                                        <option data-val="89">Адорф</option>
                                        <option data-val="75">Адриа</option>
                                        <option data-val="83">Адыяман</option>
                                        <option data-val="84">Ажен</option>
                                        <option data-val="34">Аза</option>
                                        <option data-val="81">Азамбужа</option>
                                        <option data-val="175">Азизия</option>
                                        <option data-val="1">Азнакаево</option>
                                        <option data-val="1">Азов</option>
                                        <option data-val="75">Азоло</option>
                                        <option data-val="34">Азор</option>
                                        <option data-val="2">Аихвальд</option>
                                        <option data-val="64">Айдахо-Фолс, шт.Айдахо</option>
                                        <option data-val="83">Айдын</option>
                                        <option data-val="2">Айзенах</option>
                                        <option data-val="2">Айзенхюттенштадт</option>
                                        <option data-val="66">Айзенштадт</option>
                                        <option data-val="66">Айзенэрц</option>
                                        <option data-val="103">Айзкраукле</option>
                                        <option data-val="2">Айленбург</option>
                                        <option data-val="2">Айнбек</option>
                                        <option data-val="160">Айн-Дефла</option>
                                        <option data-val="89">Айнзидельн</option>
                                        <option data-val="160">Айн-Темухент</option>
                                        <option data-val="12">Айн Эль Сохна</option>
                                        <option data-val="64">Айронтон, шт.Пенсильвания</option>
                                        <option data-val="100">Айтос</option>
                                        <option data-val="76">Айя-Напа</option>
                                        <option data-val="36">Акаба</option>
                                        <option data-val="142">Акалтын</option>
                                        <option data-val="62">Акапулько</option>
                                        <option data-val="40">Акаси</option>
                                        <option data-val="147">Акдепе</option>
                                        <option data-val="207">Акжужт</option>
                                        <option data-val="49">Акидауна</option>
                                        <option data-val="114">Акимовка</option>
                                        <option data-val="40">Акита</option>
                                        <option data-val="183">Аккра</option>
                                        <option data-val="142">Аккурган</option>
                                        <option data-val="142">Акмангит</option>
                                        <option data-val="34">Ако</option>
                                        <option data-val="175">Акра</option>
                                        <option data-val="73">Акранес</option>
                                        <option data-val="64">Акрон, шт.Огайо</option>
                                        <option data-val="76">Акротири</option>
                                        <option data-val="1">Аксай</option>
                                        <option data-val="149">Аксай</option>
                                        <option data-val="83">Аксарай</option>
                                        <option data-val="150">Акстафа</option>
                                        <option data-val="149">Аксу</option>
                                        <option data-val="149">Актау</option>
                                        <option data-val="142">Акташ</option>
                                        <option data-val="149">Актобе</option>
                                        <option data-val="149">Актюбинск</option>
                                        <option data-val="21">Акуда</option>
                                        <option data-val="75">Акуи Терме</option>
                                        <option data-val="73">Акурейри</option>
                                        <option data-val="157">Алаверды</option>
                                        <option data-val="3">Алаво</option>
                                        <option data-val="3">Алавус</option>
                                        <option data-val="49">Алагоа-Гранди</option>
                                        <option data-val="49">Алагоиньяс</option>
                                        <option data-val="84">Алансон</option>
                                        <option data-val="83">Аланья</option>
                                        <option data-val="1">Алапаевск</option>
                                        <option data-val="1">Алапаевск</option>
                                        <option data-val="75">Алассио</option>
                                        <option data-val="142">Алат</option>
                                        <option data-val="1">Алатырь</option>
                                        <option data-val="74">Алаурин-эль-Гранде</option>
                                        <option data-val="124">Алахадзы</option>
                                        <option data-val="59">Алахуэла</option>
                                        <option data-val="123">Алба-Юлия</option>
                                        <option data-val="100">Албена</option>
                                        <option data-val="90">Албеста</option>
                                        <option data-val="79">Алблассердам</option>
                                        <option data-val="81">Албуфейра</option>
                                        <option data-val="175">Алвия</option>
                                        <option data-val="1">Алдан</option>
                                        <option data-val="7">Алегзандра</option>
                                        <option data-val="49">Алегрети</option>
                                        <option data-val="113">Алей</option>
                                        <option data-val="12">Александрия</option>
                                        <option data-val="123">Александрия</option>
                                        <option data-val="64">Александрия, шт.Луизианна</option>
                                        <option data-val="1">Александров</option>
                                        <option data-val="114">Александровка</option>
                                        <option data-val="1">Александровск</option>
                                        <option data-val="1">Александровск-Сахалинский</option>
                                        <option data-val="71">Александруполис</option>
                                        <option data-val="1">Алексеевка</option>
                                        <option data-val="1">Алексин</option>
                                        <option data-val="2">Ален</option>
                                        <option data-val="49">Аленкер</option>
                                        <option data-val="120">Алеппо</option>
                                        <option data-val="160">Алжир</option>
                                        <option data-val="81">Алжуштрел</option>
                                        <option data-val="150">Али-Байрамлы</option>
                                        <option data-val="74">Аликанте</option>
                                        <option data-val="90">Алингсос</option>
                                        <option data-val="6">Алис-Спрингс</option>
                                        <option data-val="122">Алитус</option>
                                        <option data-val="81">Алкасер-ду-Сал</option>
                                        <option data-val="79">Алкмар</option>
                                        <option data-val="81">Алкобаса</option>
                                        <option data-val="69">Аллапул</option>
                                        <option data-val="64">Аллентаун, шт.Пенсильвания</option>
                                        <option data-val="34">Алма</option>
                                        <option data-val="81">Алмада</option>
                                        <option data-val="142">Алмалык</option>
                                        <option data-val="149">Алматы</option>
                                        <option data-val="79">Алмело</option>
                                        <option data-val="49">Алменара</option>
                                        <option data-val="79">Алмере</option>
                                        <option data-val="71">Алмирос</option>
                                        <option data-val="74">Алора</option>
                                        <option data-val="160">Алрар</option>
                                        <option data-val="79">Алсмер</option>
                                        <option data-val="68">Алст</option>
                                        <option data-val="1">Алтайское</option>
                                        <option data-val="49">Алтамира</option>
                                        <option data-val="68">Алтер</option>
                                        <option data-val="49">Алту-Арагуая</option>
                                        <option data-val="64">Алтуна, шт.Пенсильвания</option>
                                        <option data-val="142">Алтыарык</option>
                                        <option data-val="142">Алтынкуль</option>
                                        <option data-val="103">Алуксне</option>
                                        <option data-val="1">Алупка</option>
                                        <option data-val="1">Алушта</option>
                                        <option data-val="79">Алфен(Голландия)</option>
                                        <option data-val="114">Алчевск</option>
                                        <option data-val="75">Альба</option>
                                        <option data-val="74">Альбасете</option>
                                        <option data-val="75">Альбена</option>
                                        <option data-val="84">Альби</option>
                                        <option data-val="64">Альбукерке, шт.Н-Мек.</option>
                                        <option data-val="81">Альварге</option>
                                        <option data-val="74">Алькала-де-Энарес</option>
                                        <option data-val="75">Алькамо</option>
                                        <option data-val="148">Аль-Касим</option>
                                        <option data-val="21">Аль-Каф</option>
                                        <option data-val="74">Алькудиа</option>
                                        <option data-val="120">Аль-Маара</option>
                                        <option data-val="113">Аль Матэн</option>
                                        <option data-val="81">Альмейда</option>
                                        <option data-val="74">Альмерия</option>
                                        <option data-val="1">Альметьевск</option>
                                        <option data-val="81">Альмодовар</option>
                                        <option data-val="66">Альпбах</option>
                                        <option data-val="120">Аль-Растан</option>
                                        <option data-val="107">Аль-Савади</option>
                                        <option data-val="21">Альстунд</option>
                                        <option data-val="89">Альтдорф</option>
                                        <option data-val="2">Альтенбург</option>
                                        <option data-val="60">Альто-Седро, пр. Ольгин</option>
                                        <option data-val="34">Альфей-Менаше</option>
                                        <option data-val="2">Альфельд-Ляйне</option>
                                        <option data-val="74">Альхесирас</option>
                                        <option data-val="175">Амадия</option>
                                        <option data-val="75">Амальфи</option>
                                        <option data-val="71">Амальяс</option>
                                        <option data-val="123">Амара</option>
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
                                        <option hidden disabled selected value="">Не выбран</option>
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
                                    <b>10 / 100 </b>
                                </span>
                    </div>

                    <div class="formDirections   formDirections--big-mobile formDirections--char"
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
                                                    <input type="checkbox" class="cbx" id="catalog-positionckd"
                                                           checked="">
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
                                                <input type="radio" name="333rating" class="rbt " id="333ratingckd"
                                                       checked="">
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
                <span class=" tour-selection-plus  hide-1023 js-del-field">
                            <i class="fas fa-minus"></i>
                        </span>
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
                                    <option hidden disabled selected value="">Не выбран</option>
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