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
                            <p class="bth__cnt">Введите правильное имя</p>
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
                            <p class="bth__cnt">Введите правильный телефон</p>
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
</div>