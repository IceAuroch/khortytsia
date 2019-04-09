import Flickity from 'flickity-as-nav-for';
import 'flickity/dist/flickity.css';

if (document.querySelector('.slider_main')) {

  var flktyA = new Flickity('.slider_main', {
    wrapAround: true,
    prevNextButtons: false,
    cellAlign: 'center',
    draggable: false,
    pageDots: false,
    contain: true,
    initialIndex: 0,
    // on: {
    //   change: function (index) {
    //     document.getElementById('sliderCounterActive').innerHTML = `${index + 1}`
    //     //   console.log( 'Slide changed to' + index );
    //   }
    // }
  });

  var prevArrowMain = document.querySelector('.slider_btn_prev');

  prevArrowMain.addEventListener('click', function () {
    flktyA.previous(true, false);
  });

  var nextArrowMain = document.querySelector('.slider_btn_next');

  nextArrowMain.addEventListener('click', function () {
    flktyA.next(true, false);
  });


  if (document.querySelector('.slider_main_item')) {
    var main_slider_cont_all = $(".slider_main_item").length;

    $('.slider_counter_all').text(main_slider_cont_all);

  }

  if (document.querySelector('.slider_modal_item')) {
    var main_slider_cont_all = $(".slider_modal_item").length;

    $('.slider_counter_all').text(main_slider_cont_all);

  }


}


if (document.querySelector('.slider_main_for')) {
  var flktyB = new Flickity('.slider_main_for', {
    asNavFor: '.slider_main',
    prevNextButtons: false,
    cellAlign: 'center',
    contain: true,
    pageDots: false,
    draggable: true,
    wrapAround: true,
    freeScroll: true
  });
}


if (document.querySelector('.modal_slider_main')) {

  var flktyC = new Flickity('.modal_slider_main', {
    wrapAround: true,
    prevNextButtons: false,
    cellAlign: 'center',
    draggable: false,
    pageDots: false,
    contain: true,
    initialIndex: 0,
    on: {
      change: function (index) {
        document.getElementById('sliderCounterActive').innerHTML = `${index + 1}`
        //   console.log( 'Slide changed to' + index );
      }
    }
  });

  $('[data-indexImg]').on('click', function () {
    flktyC.select($(this).data('indeximg'));
  });

  var prevArrowReviews = document.querySelector('.slider_btn_prev');

  prevArrowReviews.addEventListener('click', function () {
    flktyC.previous(true, false);
  });

  var nextArrowReviews = document.querySelector('.slider_btn_next');

  nextArrowReviews.addEventListener('click', function () {
    flktyC.next(true, false);
  });


  if (document.querySelector('.slider_main_item')) {
    var main_slider_cont_all = $(".slider_main_item").length;

    $('.slider_counter_all').text(main_slider_cont_all);

  }

  if (document.querySelector('.slider_modal_item')) {
    var main_slider_cont_all = $(".slider_modal_item").length;

    $('.slider_counter_all').text(main_slider_cont_all);

  }


}




