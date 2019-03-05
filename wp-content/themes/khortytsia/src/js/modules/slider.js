
import Flickity from 'flickity-as-nav-for';



import 'flickity/dist/flickity.css';








var flktyA = new Flickity('.slider_main', {
    wrapAround: true,
    prevNextButtons: false,
    pageDots: true,
    cellAlign: 'center',
    draggable: false,
    pageDots: false,
    contain: true,
    initialIndex: 0,
    on: {
        change: function( index ) {
            document.getElementById('sliderCounterActive').innerHTML = `${index + 1}`
        //   console.log( 'Slide changed to' + index );
        }
      }
});


var flktyB = new Flickity( '.slider_main_for', {
    asNavFor: '.slider_main',
    prevNextButtons: false,
    pageDots: true,
    cellAlign: 'center',
    contain: true,
    pageDots: false,
    draggable: true,
    wrapAround: true,
    freeScroll: true
});

var prevArrowReviews = document.querySelector('.slider_btn_prev');

    prevArrowReviews.addEventListener('click', function () {
        flktyA.previous(true, false);
    });

var nextArrowReviews = document.querySelector('.slider_btn_next');

    nextArrowReviews.addEventListener('click', function () {
        flktyA.next(true, false);
    });




$(document).ready(function(){

    var main_slider_cont_all = $(".slider_main_item").length;

    $('.slider_counter_all').text(main_slider_cont_all);


});
