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
        <div class="swiper-slide bg-center bg-cover" style="background-image: url({{ asset('images/backgrounds/intro-slider-1.jpg') }}")>
            <div class="h-full w-full flex items-center justify-end flex-col relative z-10 pb-sw">
                <img src="{{ asset('/images/logos/logo-primary-white.png') }}" alt="logo-white" class="mb-5">
                <div class="text-primary mx-auto text-2xl text-center font-primery px-3">
                    <h2>
                        Líderes en compra y venta
                        de farmacias en España
                    </h2>
                </div>
            </div>
        </div>
        <div class="swiper-slide bg-center bg-cover" style="background-image: url({{ asset('images/backgrounds/intro-slider-2.jpg') }}")>
            <div class="h-full w-full flex items-center justify-end flex-col relative z-10 pb-sw">
                <img src="{{ asset('/images/logos/logo-primary-white.png') }}" alt="logo-white" class="mb-5">
                <div class="text-primary mx-auto text-2xl text-center font-primery px-3">
                    <h2>
                        Más de 3.000 transmisiones de
                        Farmacia
                    </h2>
                </div>
            </div>
        </div>
        <div class="swiper-slide bg-center bg-cover" style="background-image: url({{ asset('images/backgrounds/intro-slider-3.jpg') }}")>
            <div class="h-full w-full flex items-center justify-end flex-col relative z-10 pb-sw">
                <img src="{{ asset('/images/logos/logo-primary-white.png') }}" alt="logo-white" class="mb-5">
                <div class="text-primary mx-auto text-2xl text-center font-primery px-3">
                    <h2>
                        30 Años de Experiencia
                        dando vida a tus proyectos
                    </h2>
                </div>
            </div>
        </div>
        <div class="swiper-slide bg-center bg-cover" style="background-image: url({{ asset('images/backgrounds/intro-slider-4.jpg') }}")>
            <div class="h-full w-full flex items-center justify-end flex-col relative z-10 pb-sw">
                <img src="{{ asset('/images/logos/logo-primary-white.png') }}" alt="logo-white" class="mb-5">
                <div class="text-primary mx-auto text-2xl text-center font-primery px-3">
                    <h2>
                        Te acompañamos de
                        principio a fin en
                        el proceso de venta
                         o compra de tu Farmacia
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
