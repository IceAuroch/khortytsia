

$(document).ready(function(){
    $(window).scroll(function() {
        var height = $(window).scrollTop();

        /*Если сделали скролл на 10px задаём новый класс для header*/
        if(height > 0){
            $('header').addClass('header_fixed');
        } 
        else{
        /*Если меньше 10px удаляем класс для header*/
            $('header').removeClass('header_fixed');
        }

    });



    $('.map_icon').hover(
        function(){
            var mapImgIcon = $(this).attr('data-selection');
            $(this).addClass('map_icon_hover');
            $(`#${mapImgIcon}`).addClass('map_icon_hover');
        },
        function(){
            var mapImgIcon = $(this).attr('data-selection');
            $(this).removeClass('map_icon_hover');
            $(`#${mapImgIcon}`).removeClass('map_icon_hover');
    });



    $('.map_scrol').click(function() {
        $(this).addClass('map_scrol_close');
    });

    $('#open_serch').click(function() {
        $(this).toggleClass('close_serch');

        $('.serch_line').toggleClass('serch_line_open');

        $('.serch_line input').focus();

    });

});