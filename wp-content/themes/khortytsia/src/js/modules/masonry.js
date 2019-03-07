import Masonry from 'masonry-layout';


if (document.querySelector('.galery_masonry')) {
  var elem_masonry1 = document.querySelector('.galery_masonry');

  new Masonry(elem_masonry1, {
    itemSelector: '.galery_masonry_item'
  });
}