$(document).ready(function () {
//Табы
    $('#step1').click(function () {
        line($(this));
        _hashState('#step1');
        $("#success_message").hide();
        $('.bth__loader').removeClass("bth__loader--animate");
        $('#step1Panel').show();
        $('#formPanel').hide();
        $('#step2Panel').hide();
        $('.step2Panel').hide();
        $('#formStep2Panel').hide();
        $('.orders-consultants').show();
        $('.rega-field').hide();
        $('.orders-back-hotels').hide();
        $('#form-fullPanel').hide();
        $('#step3Panel').hide();
        $('#step0Panel').hide();
    });
    $('#form').click(function () {
        line($(this));
        _hashState('#form');
        $("#success_message").hide();
        $('.bth__loader').removeClass("bth__loader--animate");
        $('#step1Panel').hide();
        $('#formPanel').show();

        $('#step2Panel').hide();
        $('.step2Panel').hide();
        $('#formStep2Panel').hide();

        $('.orders-consultants').hide();
        $('.orders-back-hotels').hide();
        $('#form-fullPanel').hide();
        $('#step3Panel').hide();
        $('#step0Panel').hide();


    });
    $('#formStep2').click(function () {
        line($(this));
        _hashState('#formStep2');
        $("#success_message").hide();
        $('.bth__loader').removeClass("bth__loader--animate");
        $('#step1Panel').hide();
        $('#formPanel').hide();
        $('#step2Panel').hide();
        $('.step2Panel').hide();
        $('#formStep2Panel').show();
        $('.orders-back-hotels').show();
        $('.orders-consultants').hide();
        $('#form-fullPanel').hide();
        $('#step3Panel').hide();
        $('#step0Panel').hide();
    });
    $('#step2').click(function () {
        line($(this));
        _hashState('#step2');
        $("#success_message").hide();
        $('.bth__loader').removeClass("bth__loader--animate");
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
    $('#form-full').click(function () {
        line($(this));
        _hashState('#form-full');
        $("#success_message").hide();
        $('.bth__loader').removeClass("bth__loader--animate");
        $('#step1Panel').hide();

        $('#formPanel').hide();
        $('.orders-back-hotels').hide();
        $('#formStep2Panel').hide();
        $('#step2Panel').hide();
        $('.step2Panel').hide();
        $('.orders-consultants').show();
        $('#form-fullPanel').show();
        $('#step3Panel').hide();
        $('#step0Panel').hide();
    });
    $('#step3').click(function () {
        line($(this));
        _hashState('#step3');
        $("#success_message").hide();
        $('.bth__loader').removeClass("bth__loader--animate");
        $('#step1Panel').hide();

        $('#formPanel').hide();
        $('.orders-back-hotels').hide();
        $('#formStep2Panel').hide();
        $('#step2Panel').hide();
        $('.step2Panel').hide();
        $('.orders-consultants').show();
        $('#form-fullPanel').hide();
        $('#step3Panel').show();
        $('#step0Panel').hide();
    });
    $('#step0').click(function () {
        line($(this));
        _hashState('#step0');
        $("#success_message").hide();
        $('.bth__loader').removeClass("bth__loader--animate");
        $('#step1Panel').hide();

        $('#formPanel').hide();
        $('.orders-back-hotels').hide();
        $('#formStep2Panel').hide();
        $('#step2Panel').hide();
        $('.step2Panel').hide();
        $('.orders-consultants').show();
        $('#form-fullPanel').hide();
        $('#step3Panel').hide();
        $('#step0Panel').show();
    });

    // Переход ко второму шагу
    $("#js_to_step2").click(function (e) {
        $(this).addClass("bth__loader--animate");
        let object = lsfw.ui.main.request;
        object.wh = $("#wishes").text();
        object.type = $("#type2").is(":checked")? 2 : 1;
        //ajax
        $.ajax({
            url: "/send-hard-form-one-step",
            type: 'post',
            data: JSON.stringify(object),
            contentType: 'application/json',
            dataType: "json",
            success: function (data) {

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

                $("#id_order_input").val(data.id);
            },
            error: function (error) {
                console.log(error);
                alert("Произошла ошибка, попробуйте позже");
            }
        });

    });

    var line = function (obj) {
        var w = obj.width();
        var p = obj.position().left;
        var el = $('.line ');
        $('.tab').removeClass('active');
        obj.addClass('active');
        el.clearQueue().animate({
            left: p,
            width: w
        }, 300);
    };

    var _hashState = function (_hash) {
        if (history.pushState) {
            history.pushState(null, null, _hash);
        }
        else {
            location.hash = _hash;
        }
    };


    if (!window.location.hash)
        $('.tab.active').first().click();
    else
        $(window.location.hash).click();

    $(window).bind('hashchange', function () {
        $(window.location.hash).click();
    });
    $('.js-type2').on('click', function () {
        $('.js-types-search-tours-blocks').hide();
        $('.js-types-search-hotel-blocks').show();
    });
    $('.js-type1').on('click', function () {
        $('.js-types-search-tours-blocks').show();
        $('.js-types-search-hotel-blocks').hide();
    });


//Добавляем и удаляем контролы
    $('.js-add-field').on('click', function () {
        let elements = $('.js-show-added-field');
        $.each(elements, function (key, element) {
            if ($(element).is(":hidden")) {
                $(element).show();
                return false;
            }
        });
        updateRequestObject()
    });
    $('.js-del-field').on('click', function () {
        $(this).parents(".js-show-added-field").hide();
        updateRequestObject()
    });

    $('.js-add-hotel ').on('click', function () {
        let elements = $('.js-show-add-hotel');
        $.each(elements, function (key, element) {
            if ($(element).is(":hidden")) {
                $(element).show();
                return false;
            }
        });
    });

    $('.js-del-hotel ').on('click', function () {
        $(this).parents(".js-show-add-hotel").hide();
    });


//Направление города
    var sumoDirectionCity = $('select[id="sumo-direction-city"]');
    sumoDirectionCity.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDirectionCity.parent().addClass('open');
    sumoDirectionCity.next().next().css('top', '0').css('position', 'relative');

    sumoDirectionCity.change(function () {
        // Общие переменные
        let value = $(this).val();
        let select_city = $(this).parents(".tour-selection-wrap-in").find("#select_city");
        select_city.find(".bth__inp").text(value);

        updateRequestObject();
    });


//Направление
    var sumoDirection = $('select[id="sumo-direction"]');
    sumoDirection.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDirection.parent().addClass('open');
    sumoDirection.next().next().css('top', '0').css('position', 'relative');

    sumoDirection.change(function () {
        // Общие переменные
        let value = $(this).val();
        let select_country = $(this).parents(".tour-selection-wrap-in").find("#select_country");
        let sumo_direction_city = $(this).parents(".tour-selection-wrap-in").find("#sumo-direction-city");
        let country_for_city_select = $(this).parents(".tour-selection-wrap-in").find("#country_for_city_select");
        let select_city = $(this).parents(".tour-selection-wrap-in").find("#select_city");

        // Работа со странами
        if (select_country.hasClass("bth__inp-block")) {
            select_country.removeClass("bth__inp-block").addClass("bth__inp").addClass("tour-selection__country");
            select_country.find(".bth__inp-lbl").remove();
            select_country.find(".bth__inp").text(value);
            select_country.find(".bth__inp").removeClass().addClass("tour-selection__country-cut");
            select_country.parent("div").prepend("<span class=\"bth__inp-lbl bth__inp-lbl--center active\">Страна поездки</span>")
        }
        else {
            select_country.find(".tour-selection__flag").remove();
            select_country.find(".tour-selection__country-cut").text(value);
        }
        select_country.prepend("<div class=\"tour-selection__flag lsfw-flag lsfw-flag-" + $(this)
            .find("option:selected").data("val") + "\"></div>");

        // Работа с городами
        $(this).parents(".tour-selection-wrap-in").find("#country_selected").show();
        $(this).parents(".tour-selection-wrap-in").find("#country_not_selected").hide();
        country_for_city_select.text(value);
        sumo_direction_city.parents(".open").find("ul").find('li').hide();
        sumo_direction_city.parents(".open").find("ul").find('li[data-val=' + $(this).find("option:selected").data("val") + ']').show();
        select_city.find(".bth__inp").text("Не важно");
        sumoDirectionCity.val("");

        //Сохранение значений
        updateRequestObject();
    });


//Список городов вылета
    var sumoListCity = $('select[id="sumo-list-city"]');
    sumoListCity.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoListCity.parent().addClass('open');
    sumoListCity.next().next().css('top', '0').css('position', 'relative');

    sumoListCity.change(function () {
        // Общие переменные
        let value = $(this).val();
        let select_list_city = $(this).parents(".tour-selection-wrap-in").find("#select_list_city");
        select_list_city.find(".bth__inp-lbl").addClass("active");
        select_list_city.find("b.uppercase").text(value);

        updateRequestObject();
    });


//Город вылета
    var sumoDepartment = $('select[id="sumo-department"]');
    sumoDepartment.SumoSelect({
        search: true,
        forceCustomRendering: true
    });
    sumoDepartment.parent().addClass('open');
    sumoDepartment.next().next().css('top', '0').css('position', 'relative');

    sumoDepartment.change(function () {
        // Общие переменные
        let value = $(this).val();
        let select_department = $(this).parents(".tour-selection-wrap-in").find("#select_department");
        select_department.find(".bth__inp").text(value);

        updateRequestObject();
    });

    var formDateHelp1 = new mytour.searchTours.formDate({
        pickerBlockId: 'js-mt-filter-dtHelp1',
        popupBlockId: 'mtIdxFormDatePPHelp1',
        popupBlock: $('#mtIdxFormDatePPHelp1'),
        datepicker: $('#mtIdxDateHelp1')
    }, mytour.searchTours.main.request);


    var formDateHelp2 = new mytour.searchTours.formDate({
        pickerBlockId: 'js-mt-filter-dtHelp2',
        popupBlockId: 'mtIdxFormDatePPHelp2',
        popupBlock: $('#mtIdxFormDatePPHelp2'),
        datepicker: $('#mtIdxDateHelp2')
    }, mytour.searchTours.main.request);

    // Выбор еды
    $("#nutrition_select .formDirections__static-btn").click(function (e) {
        updateRequestObject();

        $("#nutrition").text(lsfw.ui.main.request.nc);

    })

    // Выбор отеля
    $(".hotel_search").change(function (e) {
        let search_string = $(this).val();
        if (search_string.length > 2) {
            $.get("https://tophotels.ru/lsfw/dict/allocation?nameSearch=" + search_string)
                .done(function (data) {
                    renderHotels(data);
                });
        }
    });

    $(".hotels_list").on("click",".formDirections__bottom-item",function()
    {
        $(this).parents(".js-hotels").attr("data-name",$(this).data('name'));
        $(this).parents(".js-hotels").attr("data-stars",$(this).data('stars'));
        $(this).parents(".js-hotels").attr("data-country_name",$(this).data('country_name'));
        $(this).parents(".js-hotels").attr("data-resort_place_name",$(this).data('resort_place_name'));
        updateRequestObject();

        let js_hotels = $(this).parents(".js-hotels");
        let html = "<b>" +
            "         <span class=\"tour-selection__hotel-cut uppercase\">" +
            lsfw.ui.main.request.ht[$(js_hotels).data("index")].hn + "</span>\n" +
            "       </b>\n" +
            "       <span class=\"normal fz13 ml10\">" + lsfw.ui.main.request.ht[$(js_hotels).data("index")].hp + "</span>"

        $(js_hotels).find(".bth__inp-block .bth__inp").html(html);
        $(js_hotels).find(".bth__inp-block .bth__inp-lbl").addClass("active");
        $(js_hotels).find(".formDirections__bottom-close").click();

    });


    $(".hotel-params-form .formDirections__btn-orange").click(function () {
        updateRequestObject();
        updateHotelsSelect($(this).parents(".tour-selection-field"))
    });

    updateHotelsSelect($(".hotel-params-form").parents(".tour-selection-wrap-in:visible").find(".tour-selection-field"));
})
;


