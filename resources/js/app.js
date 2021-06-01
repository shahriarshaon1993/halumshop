require('./bootstrap');
require('./main');

// import Swiper JS
import Swiper from 'swiper';

var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    centeredSlides: true,
    spaceBetween: 10,
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
