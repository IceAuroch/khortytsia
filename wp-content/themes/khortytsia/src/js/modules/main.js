$(document).ready(function () {
    $(window).scroll(function () {
        var height = $(window).scrollTop();

        if (height > 0) {
            $('header').addClass('header_fixed');
        } else {
            $('header').removeClass('header_fixed');
        }

    });



    $('.map_icon').hover(
        function () {
            var mapImgIcon = $(this).attr('data-selection');
            $(this).addClass('map_icon_hover');
            $(`#${mapImgIcon}`).addClass('map_icon_hover');
        },
        function () {
            var mapImgIcon = $(this).attr('data-selection');
            $(this).removeClass('map_icon_hover');
            $(`#${mapImgIcon}`).removeClass('map_icon_hover');
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
        var container = $(".dropdown_turobj_wrap");
        if (!$(e.target).hasClass('turobj_link')) {
            if (!container.has(e.target).length) {
                $('.turobj_link').removeClass('turobj_link__open');
                $('.dropdown_turobj_main_wrap')
                    .removeClass('dropdown_turobj_main_wrap__open');
    
                $('header').removeClass('header_drop_open');
            }
        }
    });



});