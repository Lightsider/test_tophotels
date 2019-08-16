jQuery(document).ready(function () {

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

    //Смена таба
    $("#js_to_step2").click(function (e) {
        $('#step1Panel').hide();

        $('#formPanel').hide();
        $('.orders-back-hotels').hide();
        $('#formStep2Panel').hide();
        $('#step2Panel').show();
        $('.step2Panel').show();

        $('.orders-consultants').hide();
        $('#form-fullPanel').hide();
        $('#step3Panel').hide();
        $('#step0Panel').hide();
    });

    // Отправка простой формы
    $("#send_custom_form").click(function (e) {
        if (validateCustomForm())
        {
            $(this).addClass('bth__loader--animate');

            let formdata = new FormData();
            formdata.append("name",$("#name1").val());
            formdata.append("phone",$("#phone1").val());
            formdata.append("email",$("#mail3").val());
            formdata.append("text",$("#parametrs").val());

            $.ajax({
                url: "/send-custom-form",
                method: 'post',
                data: formdata,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (data) {
                    $("#success_message").css("display","block");
                    $("#formPanel").css("display","none");
                    clearCustomForm();
                },
                error: function (error) {
                    console.log(error);
                }
            });

        }
    });

    // Отправка сложной формы
    $("#send_hard_form").click(function (e) {
        if(validateHardForm())
        {
            $(this).addClass('bth__loader--animate');

            //ajax


            $("#step2panel_success_message").css("display","block");
            $("#step2Panel div:not(#step2panel_success_message)").css("display","none");
        }
    })
});

$(document).on('click', '.js-modal-close', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
});

/** Функции работы с формами **/

function clearCustomForm() {
    var data = [$("#name1"), $("#phone1"), $("#mail3"),$("#parametrs")];
    $.each(data, function (index, value) {
        value.val("");
    });
}

/** Конец функций работы с формами **/


/** Валидации **/

function validateHardForm() {
    var data = [$("#name3"), $("#phone3"), $("#mail2"),$("#choose_city")];
    var rules = [
        ["required"],
        ["required"],
        ["email"],
        ["required"]
    ];

    let errors = validateData(data, rules);

    if (errors.length != 0) {
        $.each(errors, function (index, error) {
            if(error !== undefined)
                error.parent('.js-add-error').addClass('has-error');
        });
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
        ["required","letters"],
        ["required","numbers"],
        ["email"]
    ];

    let errors = validateData(data, rules);

    if (errors.length != 0) {
        $.each(errors, function (index, error) {
            if(error !== undefined)
                error.parent('.js-add-error').addClass('has-error');
        });
        return false;
    }

    return true;
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
                    if (data[i].val().length < 1) errors[i] = data[i];
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