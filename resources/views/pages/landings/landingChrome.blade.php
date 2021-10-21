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
<div class="wrapper--landings">
    <div class="px-4">
        <div class="margin-bottom--xlarge">
            <h2 class="typography--h2 typography--green">Instrucciones de instalación</h2>
        </div>
        <div class="margin-bottom--medium">
            <div class="line-row-between-center">
                <p>Para instalar la app Farmaconsulting en Android, debes utilizar Chrome*.</p>
                <div class="ml-14 mr-2.5">
                    <div class="line-col-center">
                        <img class="chrome-img" src="{{ asset('images/chrome/chrome.svg') }}" alt="Chrome's icon">
                        <p class="typography--xsmall mt-1.5">Chrome</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="landings__full-width margin-bottom--4xlarge">
        <div class="wrapper--landings">
            <div class="line-row-between-center">
                <p class="typography--small ml-2">* Si no dispones de este navegador, descárgalo desde la Google Play Store.</p>
                <div class="ml-6">
                    <img class="google-play-img" src="{{ asset('images/chrome/google-play.svg') }}" alt="Google Play's Icon">
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper--landings">
        <div class="margin-bottom--4xlarge">
            <div class="landings-option__container margin-bottom--xlarge">
                <div class="landings-option-number__container">
                    <p class="landings-option-number__item">1.</p>
                </div>
                <h3 class="landings-option-number__txt">Abre esta página desde Chrome y en el menú principal toca en Añadir a pantalla de inicio.</h3>
            </div>
            <div class="landings-option__img">
                <img src="{{ asset('images/chrome/chrome-step1.png') }}" alt="" class="mx-auto">
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
                <h3 class="landings-option-number__txt">Pulsa en Instalar para realizar la instalación.</h3>
            </div>
            <div class="landings-option__img">
                <img src="{{ asset('images/chrome/chrome-step2.png') }}" alt="" class="mx-auto">
            </div>
        </div>
    </div>
</section>
<section class="pb-8">
    <div class="wrapper--landings">
        <div class="margin-bottom--4xlarge">
            <div class="landings-option__container margin-bottom--xlarge">
                <div class="landings-option-number__container">
                    <p class="landings-option-number__item">3.</p>
                </div>
                <h3 class="landings-option-number__txt">En el menú emergente de opciones, toca en Añadir a la pantalla de inicio. Farmaconsulting se habrá añadido a tu pantalla de inicio. Ya puedes comenzar a usarla.</h3>
            </div>
        </div>
    </div>
</section>

@endsection