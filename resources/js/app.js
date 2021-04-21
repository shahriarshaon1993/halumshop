require('./bootstrap');
require('./main');

// import Swiper JS
import Swiper from 'swiper';

var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 0,
    freeMode: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
