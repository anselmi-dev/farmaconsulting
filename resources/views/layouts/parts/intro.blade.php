<div id="swiper-home" class="swiper-container top-0 right-0 w-full h-screen bg-gray-300" style="position: fixed; z-index: 99">
    <button type="button"
        class="absolute top-5 right-5 uppercase bg-transparent text-white font-2xl z-40 leading-none"
        onclick="document.getElementById('swiper-home').style.display = 'none';">
        {{ __('Acceder') }}
    </button>
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide bg-center bg-cover" style="background-image: url({{ asset('images/backgrounds/intro-slider-3.jpg') }}")>
            <div class="h-full w-full flex items-center justify-end flex-col relative z-10 pb-sw">
                <img src="{{ asset('/images/logos/logo-primary-white.png') }}" alt="logo-white" class="mb-5">
                <div class="text-primary mx-auto text-2xl text-center font-primery px-3">
                    <h2>
                        <p>30 Años de Experiencia</p>
                        <p>dando vida a tus proyectos</p>
                    </h2>
                </div>
            </div>
        </div>
        <div class="swiper-slide bg-center bg-cover" style="background-image: url({{ asset('images/backgrounds/intro-slider-4.jpg') }}")>
            <div class="h-full w-full flex items-center justify-end flex-col relative z-10 pb-sw">
                <img src="{{ asset('/images/logos/logo-primary-white.png') }}" alt="logo-white" class="mb-5">
                <div class="text-primary mx-auto text-2xl text-center font-primery px-3">
                    <h2>
                        <p>Te acompañamos de</p>
                        <p>principio a fin en</p>
                        <p>el proceso de venta</p>
                        <p>o compra de tu Farmacia</p>
                    </h2>
                </div>
            </div>
        </div>
        <div class="swiper-slide bg-center bg-cover" style="background-image: url({{ asset('images/backgrounds/intro-slider-2.jpg') }}")>
            <div class="h-full w-full flex items-center justify-end flex-col relative z-10 pb-sw">
                <img src="{{ asset('/images/logos/logo-primary-white.png') }}" alt="logo-white" class="mb-5">
                <div class="text-primary mx-auto text-2xl text-center font-primery px-3">
                    <h2>
                        <p>Más de 3.000 transmisiones de</p>
                        <p>Farmacia</p>
                    </h2>
                </div>
            </div>
        </div>
        <div class="swiper-slide bg-center bg-cover" style="background-image: url({{ asset('images/backgrounds/intro-slider-1.jpg') }}")>
            <div class="h-full w-full flex items-center justify-end flex-col relative z-10 pb-sw">
                <img src="{{ asset('/images/logos/logo-primary-white.png') }}" alt="logo-white" class="mb-5">
                <div class="text-primary mx-auto text-2xl text-center font-primery px-3">
                    <h2>
                        <p>Líderes en compra y venta</p>
                        <p>de farmacias en España</p>
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

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
@endpush
