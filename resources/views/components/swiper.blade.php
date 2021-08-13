<!-- Slider main container -->
<div id="swiper-home" class="swiper-container top-0 right-0 w-full h-screen bg-gray-300"
    style="position: fixed; z-index: 99">
    <button type="button"
        class="absolute top-5 right-5 uppercase bg-transparent text-white font-2xl z-40 leading-none"
        onclick="document.getElementById('swiper-home').style.display = 'none';">
        Cerrar
    </button>
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide bg-center bg-cover"
            style="background-image: url({{ asset('images/slider/one.jpg') }})"></div>
        <div class="swiper-slide bg-center bg-cover"
            style="background-image: url({{ asset('images/slider/one.jpg') }})"></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
