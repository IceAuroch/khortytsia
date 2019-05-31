$(document).ready(function () {
    $(window).scroll(function () {
        const height = $(window).scrollTop();

        if (height > 0) {
            $('header').addClass('header_fixed');
        } else {
            $('header').removeClass('header_fixed');
        }
    });

    // const imgText = $(this).data('imgtext');
    // const $descripMap = $('.descrip_map');

    $('.map_icon').hover(
        function () {
            var mapImgIcon = $(this).attr('data-selection');
            $(this).addClass('map_icon_hover');
            $(`[data-selection-id="${mapImgIcon}"]`).addClass('map_icon_hover');

            var imgText = $(this).data('imgtext');

            $('.descrip_map').text(imgText);

            $('.descrip_map').addClass('descrip_map_visible');
        },
        function () {
            var mapImgIcon = $(this).attr('data-selection');
            $(this).removeClass('map_icon_hover');
            $(`[data-selection-id="${mapImgIcon}"]`).removeClass('map_icon_hover');

            $('.descrip_map').removeClass('descrip_map_visible');
        });

    $(".map_img a ").on('click', function (event) {
        event.preventDefault();
    });

    $('.map_scrol').click(function () {
        $(this).addClass('map_scrol_close');
    });

    $('#open_serch').click(function () {
        $(this).toggleClass('close_serch');

        $('.serch_line').toggleClass('serch_line_open');

        $('.serch_line input').focus();

    });


    $(".turobj_link").on('click', function (event) {
        event.preventDefault();

        $(this).toggleClass('turobj_link__open');
        $('.dropdown_turobj_main_wrap')
            .toggleClass('dropdown_turobj_main_wrap__open');

        $('header').toggleClass('header_drop_open');

    });

    $(window).scroll(function () {
        $('.turobj_link').removeClass('turobj_link__open');
        $('.dropdown_turobj_main_wrap').removeClass('dropdown_turobj_main_wrap__open');

        $('header').removeClass('header_drop_open');

        $('#open_serch').removeClass('close_serch');

        $('.serch_line').removeClass('serch_line_open');


        $('.dropdown').removeClass('show');

        $('.dropdown-toggle').attr('aria-expanded', 'false');

        $('.dropdown-menu').removeClass('show');
    });

    $(document).mouseup(function (e) {
        const container = $(".dropdown_turobj_wrap");
        if (!$(e.target).hasClass('turobj_link')) {
            if (!container.has(e.target).length) {
                $('.turobj_link').removeClass('turobj_link__open');
                $('.dropdown_turobj_main_wrap')
                    .removeClass('dropdown_turobj_main_wrap__open');

                $('header').removeClass('header_drop_open');
            }
        }
    });

    $(".scroll_down").on("click", function (event) {

        event.preventDefault();

        const id = $("#tur_objects_section"),

            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 500);
    });

    $(".nav_tabs").on("click", "a", function () {

        const id = $(".vidviduvannya_section"),

            top = $(id).offset().top - 100;

        $('body,html').animate({scrollTop: top}, 500);
    });

    $('#text').addClass('text_open');
});