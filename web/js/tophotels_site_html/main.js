jQuery(document).ready(function () {
    lsfw.ui.main.request.directions = []; // направления
    lsfw.ui.main.request.wh = "";         // пожелания
    lsfw.ui.main.request.dc = "";         // город вылета
    lsfw.ui.main.request.nc = "";         // питание
    lsfw.ui.main.request.ht = [];         // отель


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
 *  Вывод элементов списка отелей
 * @param data
 */
function renderHotels(data) {
    let hotels_list = $(".js-hotels .formDirections--big-mobile:visible").find(".hotels_list");
    $(hotels_list).find(".formDirections__bottom-item").remove();
    let html = "";
    let country_id = country_name = name = stars = resort_name = resort_place_name = "";

    for (let i = 0; i < 10; i++) // Потому что условие на 10 отелей
    {
        country_id = data[i].country_id !== null ? data[i].country_id : "";
        country_name = data[i].country_name !== null ? data[i].country_name : "";
        name = data[i].name !== null ? data[i].name : "";
        stars = data[i].stars !== null ? data[i].stars : "";
        resort_name = data[i].resort_name !== null ? data[i].resort_name : "";
        resort_place_name = data[i].resort_place_name !== null ? data[i].resort_place_name : "";

        html = "<div class=\"formDirections__bottom-item\" data-name='" + name + "' data-stars='" + stars + "'" +
            "data-resort_name='" + resort_name + "' data-resort_place_name='" + resort_place_name + "'" +
            "data-country_name='" + country_name + "'>\n" +
            "     <div class=\"formDirections__city\">\n" +
            "        <div class=\" lsfw-flag lsfw-flag--30w lsfw-flag-" + country_id + "\">\n" +
            "            <div class=\"hint\">" + country_name + "</div>\n" +
            "        </div>\n" +
            "        <span class=\"formDirections__cut\">" + name + "</span> " + stars +
            "     </div>\n" +
            "     <span class=\"formDirections__count\">" + resort_name + " " + resort_place_name + "</span>\n" +
            "   </div>";
        $(hotels_list).append(html);
    }
}


function updateHotelsSelect(block) {
    let countInputs = +$(block).find(':checkbox:checked').length + $(block).find(':radio:checked').length;
    // считать автоматически не верно, потому что радиобаттонов много
    $(block).find(".bth__inp b").text(countInputs + " / 36 ");
}


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

/**
 * Обшая функция обновления главного объекта
 */

function updateRequestObject() {
    lsfw.ui.main.request.dc = "";
    if ($("#type1").is(":checked")) {
        let directions = [], hotel_params = {};

        let direction_divs = $(".js-types-search-tours-blocks .tour-selection-wrap-in");

        $.each(direction_divs, function (index, direction_div) {
            if ($(direction_div).is(":visible")) {
                hotel_params = {};
                directions[index] = {};
                directions[index].hotel = {};
                // Использую поля потому что селект подхватывает 1 значение
                if ($(direction_div).find('#select_country .bth__inp').text().length > 0)
                    directions[index].cu = $(direction_div).find('#select_country .bth__inp').text();
                else
                    directions[index].cu = $(direction_div).find('.tour-selection__country-cut').text();
                directions[index].ct = $(direction_div).find('#select_city .bth__inp').text();
                directions[index].cd = $(direction_div).find('select[id="sumo-department"]').val();

                // Отели

                // категории
                hotel_params.stars = "";

                let stars_arr = $(direction_div).find("input[name='stars']");
                $.each(stars_arr, function (index, stars) {
                    if (index != 0 && $(stars).is(":checked")) {
                        hotel_params.stars += $(stars).val() + " ";
                    }
                });

                if (hotel_params.stars == "") {
                    hotel_params.stars = "ЛЮБАЯ КАТЕГОРИЯ";
                }
                ;

                // рейтинг
                hotel_params.rate = $(direction_div).find("input[name='333rating_" + index + "']:checked").val();

                // питание
                let nutrition = "";
                let nc_arr = $(direction_div).find("input[name='nc[]']");
                $.each(nc_arr, function (index, nc) {
                    if (index != 0 && $(nc).is(":checked")) {
                        nutrition += $(nc).val() + " ";
                    }
                });

                if (nutrition == "") {
                    nutrition = "Любое";
                }
                hotel_params.nutrition = nutrition;

                // расположение
                let place_type = "";
                let place_type_arr = $(direction_div).find("input[name='place_type[]']");
                $.each(place_type_arr, function (index, place) {
                    if (index != 0 && $(place).is(":checked")) {
                        place_type += $(place).val() + ";";
                    }
                });
                if (place_type == "") {
                    place_type = "любой тип";
                }
                hotel_params.place_type = place_type;

                // дети
                let kids = "";
                let kids_arr = $(direction_div).find("input[name='kids[]']");
                $.each(kids_arr, function (index, children) {
                    if (index != 0 && $(children).is(":checked")) {
                        kids += $(children).val() + ";";
                    }
                });
                if (kids == "") {
                    kids = "Не требуется";
                }
                hotel_params.kids = kids;

                // Прочее

                let other = "";
                let other_arr = $(direction_div).find("input[name='other[]']");
                $.each(other_arr, function (index, item) {
                    if (index != 0 && $(item).is(":checked")) {
                        other += $(item).val() + ";";
                    }
                });
                if (other == "") {
                    other = "Не требуется";
                }
                hotel_params.other = other;


                directions[index].hotel = hotel_params;
            }
        });

        lsfw.ui.main.request.directions = directions;

        lsfw.ui.main.request.wh = $("#wishes").text();
    }
    else {
        //еда
        lsfw.ui.main.request.nc = "";
        let nc_arr = $("input[name='nc[]']");
        $.each(nc_arr, function (index, nc) {
            if (index != 0 && $(nc).is(":checked")) {
                lsfw.ui.main.request.nc += $(nc).val() + " ";
            }
        });

        if (lsfw.ui.main.request.nc == "") {
            lsfw.ui.main.request.nc = "Любое";
            $("#nutrition_all").attr("checked", true);
        }
        else $("#nutrition_all").removeAttr("checked");

        //Отели
        let string_hotel = "";
        let string_hotel_place = "";

        let hotels = [];

        let hotels_divs = $(".js-hotels");

        $.each(hotels_divs, function (index, hotels_div) {
            if ($(hotels_div).is(":visible")) {
                string_hotel = $(hotels_div).data('name') + " " + $(hotels_div).data('stars');
                string_hotel_place = $(hotels_div).data('country_name') + " " + $(hotels_div).data('resort_place_name');

                hotels[index] = {};
                hotels[index].hn = string_hotel;
                hotels[index].hp = string_hotel_place;
            }
        });


        lsfw.ui.main.request.ht = hotels;

        // Город вылета
        lsfw.ui.main.request.dc = $(".js-types-search-hotel-blocks #select_department .bth__inp").text();
    }

}


/** Конец обших функций **/