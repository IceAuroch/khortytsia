import Masonry from 'masonry-layout';

setTimeout(triggerMasonry, 2000);

function triggerMasonry () {
    if (document.querySelector('.galery_masonry')) {
        let elem_masonry1 = document.querySelector('.galery_masonry');

        new Masonry(elem_masonry1, {
            itemSelector: '.galery_masonry_item'
        });
    }
}
