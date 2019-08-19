jQuery(document).ready(function () {
    lsfw.ui.main.request.directions = []; // направления
    lsfw.ui.main.request.wh = "";         // пожелания

    $('.bth__loader').on('click', function (e) {
        e.preventDefault();
    });

//Подсказки для полей
    $('.bth__inp.js-stop-label').on('focus', function () {
        $(this).addClass('focus');
        $(this).next('.bth__inp-lbl').hide();
    });


    $('.bth__inp.js-stop-label').on('blur', function () {
        if ($(this).val().trim() !== '') {
            $(this).next('.bth__inp-lbl').hide();
        } else {

            $(this).next('.bth__inp-lbl').show();
        }
    });

    $('.js-label').on('focus', function () {
        $(this).next('.bth__inp-lbl').addClass('active');
        $(this).closest('.js-show-saggest').next().show();
    });

    $('.js-label').on('blur', function () {
        if ($(this).val().trim() === '') {
            $(this).next('.bth__inp-lbl').removeClass('active');
            $(this).closest('.js-show-saggest').next().hide();
        }
    });


    $('.js-label').on('change', function () {
        $('.js-label').each(function () {
            if ($(this).val().length) {
                $(this).next('.bth__inp-lbl').addClass('active');
            }
        });
    });

    $('.js-label').change();


    $('.bth__inp-block.long textarea').on('focus', function () {
        $(this).closest('.bth__inp-block.long').addClass('active');
    });
    $('.bth__inp-block.long textarea').on('blur', function () {
        $(this).closest('.bth__inp-block.long').removeClass('active');
    });

    /** Конец примеров **/

    // Отправка простой формы
    $("#send_custom_form").click(function (e) {
        if (validateCustomForm()) {
            $(this).addClass('bth__loader--animate');

            let formdata = new FormData();
            formdata.append("name", $("#name1").val());
            formdata.append("phone", $("#phone1").val());
            formdata.append("email", $("#mail3").val());
            formdata.append("text", $("#parametrs").val());

            $.ajax({
                url: "/send-custom-form",
                method: 'post',
                data: formdata,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (data) {
                    $("#success_message").show();
                    $("#formPanel").hide();
                    clearCustomForm();
                },
                error: function (error) {
                    console.log(error);
                }
            });

        }
    });



    // Отправка сложной формы шаг 2
    $("#send_hard_form").click(function (e) {
        if (validateHardForm()) {
            $(this).addClass('bth__loader--animate');

            let formdata = new FormData();
            formdata.append("id_order", $("#id_order_input").val());
            formdata.append("name", $("#name3").val());
            formdata.append("phone", $("#phone3").val());
            formdata.append("email", $("#mail2").val());
            formdata.append("city", $("#step2Panel #sumo-list-city").val());

            $.ajax({
                url: "/send-hard-form-two-step",
                method: 'post',
                data: formdata,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (data) {
                    $("#success_message").show();
                    $("#step2Panel").hide();
                    clearHardForm();
                },
                error: function (error) {
                    console.log(error);
                }
            });


        }
    })
});

$(document).on('click', '.js-modal-close', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
});


/** Функции работы с формами **/


/**
 *  Очистка сложной формы
 */
function clearHardForm() {
    var data = [$("#name3"), $("#phone3"), $("#mail2")]; //todo полная очистка формы
    clearForm(data);
}


/**
 * Очистка простой формы
 */
function clearCustomForm() {
    var data = [$("#name1"), $("#phone1"), $("#mail3"), $("#parametrs")];
    clearForm(data);
}

/**
 * Общая функция чистки формы
 * @param data
 */
function clearForm(data) {
    $.each(data, function (index, value) {
        value.val("");
    });
}


/** Конец функций работы с формами **/


/** Валидации **/

function validateHardForm() {
    var data = [$("#name3"), $("#phone3"), $("#mail2"), $("#sumo-list-city")];
    var rules = [
        ["required"],
        ["required"],
        ["email"],
        ["required"]
    ];

    let errors = validateData(data, rules);

    if (errors.length != 0) {
        showErrors(errors);
        return false;
    }

    return true;
}

/**
 * Валидация для формы нестандартного заказа
 * @returns {boolean}
 */
function validateCustomForm() {
    var data = [$("#name1"), $("#phone1"), $("#mail3")];
    var rules = [
        ["required", "letters"],
        ["required", "numbers"],
        ["email"]
    ];

    let errors = validateData(data, rules);

    if (errors.length != 0) {
        showErrors(errors);
        return false;
    }

    return true;
}


/**
 * Общая функция вывода ошибок
 * @param errors
 */
function showErrors(errors) {
    $.each(errors, function (index, error) {
        if (error !== undefined)
            if (error.parents('.js-add-error').length > 0)
                error.parents('.js-add-error').addClass('has-error');
            else
                error.parents(".tour-selection-wrap-in").find('.js-add-error').addClass('has-error');
    });
}

/**
 * Общая функция валидации
 * @param data
 * @param rules
 * @returns Array
 */
function validateData(data, rules) {
    $('.js-add-error').removeClass('has-error');
    let errors = [];

    for (let i = 0; i < data.length; i++) {
        $.each(rules[i], function (index, rule) {
            switch (rule) {
                case "required":
                    if (data[i].val() === null || data[i].val().length < 1) errors[i] = data[i];
                    break;
                case "email":
                    if (!validateEmail(data[i].val()) && data[i].val().length > 0) errors[i] = data[i];
                    break;
                case "letters":
                    if (!/^[a-zA-Zа-яА-Я]*$/.test(data[i].val())) errors[i] = data[i];
                    break;
                case "numbers":
                    if (!/^[0-9]*$/.test(data[i].val())) errors[i] = data[i];
                    break;
            }
        });
    }

    return errors;
}

/**
 * Валидация емаил
 * @param email
 * @returns {boolean}
 */
function validateEmail(email) {
    var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(email);
}

/** Конец валидаций **/


/** Общие функции **/

function updateRequestObject()
{
    let directions = [];

    let direction_divs = $(".js-types-search-tours-blocks .tour-selection-wrap-in");

    $.each(direction_divs,function (index,direction_div) {
       if($(direction_div).is(":visible"))
       {
           directions[index] = {};
           directions[index].cu = $(direction_div).find('select[id="sumo-direction"]').val();
           directions[index].ct = $(direction_div).find('select[id="sumo-direction-city"]').val();
           directions[index].cd = $(direction_div).find('select[id="sumo-department"]').val();
           //hotel
       }
    });

    lsfw.ui.main.request.directions = directions;

    lsfw.ui.main.request.wh = $("#wishes").text();
}


/** Конец обших функций **/