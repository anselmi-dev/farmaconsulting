require('./bootstrap');
// const jsQR = require("jsqr");
// import jsQR from "jsqr";


// ES6 import

// CommonJS require

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import Swiper styles
import 'swiper/swiper-bundle.css';
// core version + navigation, pagination modules:
import SwiperCore, { Navigation, Pagination } from 'swiper/core';
// configure Swiper to use modules
SwiperCore.use([Navigation, Pagination]);

if (document.getElementById('swiper-home')) {
    var swiperTech = new Swiper("#swiper-home", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        loop: true,
        // navigation: false,
        navigation: {
            nextEl: ".btn-next",
            prevEl: ".btn-prev",
        },
    });
}

import MicroModal from 'micromodal';  // es6 module
// var MicroModal = require('micromodal'); // commonjs module
MicroModal.init();


// to toggle select like options && arrow
document.querySelectorAll('.custom-select__container').forEach((item, index) => {
    item.addEventListener('click', () => {
        document.querySelectorAll('.custom-select__arrow')[index].classList.toggle('custom-select__arrow--active');
        document.querySelectorAll('.custom-select__container')[index].classList.toggle('custom-select__container--active');
        document.querySelectorAll('.custom-select__options-container')[index].classList.toggle('custom-select__options-container--active');
    })
})
document.querySelectorAll('.custom-select__option').forEach((item, index) => {
    item.addEventListener('click', () => {
        document.querySelectorAll('.custom-select__option')[index].classList.toggle('custom-select__option--active');
        document.querySelectorAll('.custom-select__option-check')[index].classList.toggle('custom-select__option-check--active');
        // document.querySelectorAll('.custom-select__selected')[index].classList.toggle('custom-select__selected--active');
    })
})
