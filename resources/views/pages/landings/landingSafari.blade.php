@extends('layouts.instalations')

@section('content')

<div class="landings-hero">
    <div class="landings-hero__background">
        <img src="{{ asset('images/backgrounds/home-mobile.png') }}" alt="Someone holding a mobile phone with Farmaconsulting app">
    </div>
    <div class="landings-hero__logo">
        <img src="{{ asset('images/logos/logo-icon-bg.png') }}" alt="Farmaconsulting white icon logo">
        <p class="typography--xsmall text-center mt-1.5">Farmaconsulting</p>
    </div>
</div>
<div class="wrapper--landings margin-bottom--5xlarge">
    <div class="px-4">
        <div class="margin-bottom--xlarge">
            <h2 class="typography--h2 typography--green">Instrucciones de instalación</h2>
        </div>
        <div class="margin-bottom--medium">
            <div class="line-row-between-center">
                <p>Para instalar la app Farmaconsulting en tu iPhone debes utilizar Safari.</p>
                <div class="ml-14 mr-2.5">
                    <div class="line-col-center">
                        <img class="chrome-img" src="{{ asset('images/safari/safari.png') }}" alt="Safari's icon">
                        <p class="typography--xsmall mt-1.5">Safari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="wrapper--landings">
        <div class="margin-bottom--4xlarge">
            <div class="landings-option__container margin-bottom--xlarge">
                <div class="landings-option-number__container">
                    <p class="landings-option-number__item">1.</p>
                </div>
                <h3 class="landings-option-number__txt">Abre esta página desde Safari y pulsa en el botón de compartir.</h3>
            </div>
            <div class="landings-option__img">
                <img src="{{ asset('images/safari/safari-step1.png') }}" alt="" class="mx-auto">
            </div>
            
        </div>
    </div>
</section>
<section>
    <div class="wrapper--landings">
        <div class="margin-bottom--4xlarge">
            <div class="landings-option__container margin-bottom--xlarge">
                <div class="landings-option-number__container">
                    <p class="landings-option-number__item">2.</p>
                </div>
                <h3 class="landings-option-number__txt">En el menú emergente de opciones, toca en Añadir a la pantalla de inicio.</h3>
            </div>
            <div class="landings-option__img">
                <img src="{{ asset('images/safari/safari-step2.png') }}" alt="" class="mx-auto">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="wrapper--landings">
        <div class="margin-bottom--4xlarge">
            <div class="landings-option__container margin-bottom--xlarge">
                <div class="landings-option-number__container">
                    <p class="landings-option-number__item">3.</p>
                </div>
                <h3 class="landings-option-number__txt">Especifica el nombre que quieres darle a la aplicación. iOS permite personalizarlo a tu gusto. Cuando hayas terminado, toca en Añadir.</h3>
            </div>
            <div class="landings-option__img">
                <img src="{{ asset('images/safari/safari-step3.png') }}" alt="" class="mx-auto">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="wrapper--landings">
        <div class="margin-bottom--4xlarge">
            <div class="landings-option__container margin-bottom--xlarge">
                <div class="landings-option-number__container">
                    <p class="landings-option-number__item">4.</p>
                </div>
                <h3 class="landings-option-number__txt">Farmaconsulting ya se ha instalado correctamente en tu dispositivo.</h3>
            </div>
            <div class="landings-option__img">
                <img src="{{ asset('images/safari/safari-step4.png') }}" alt="" class="mx-auto">
            </div>
        </div>
    </div>
</section>
<section class="pb-8">
    <div class="wrapper--landings">
        <div class="margin-bottom--4xlarge">
            <div class="landings-option__container margin-bottom--xlarge">
                <div class="landings-option-number__container">
                    <p class="landings-option-number__item">5.</p>
                </div>
                <h3 class="landings-option-number__txt">Si deseas desinstalarla, mantén pulsado su icono y selecciona la opción Eliminar marcador.</h3>
            </div>
        </div>
    </div>
</section>

@endsection