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

import MicroModal from 'micromodal';  // es6 module
// var MicroModal = require('micromodal'); // commonjs module
MicroModal.init();
