@extends('layouts.app')

@section('content')

    <div class="main__container">
        <div class="wrapper--larger">
            <div class="margin-bottom--xlarge">
                <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="35.087" height="26.063" viewBox="0 0 35.087 26.063">
                    <g transform="translate(-194.907 -10.94)">
                      <path d="M228.994,11.94V32.994A3.016,3.016,0,0,1,225.985,36H198.916a3.017,3.017,0,0,1-3.009-3.009V11.94" fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      <path d="M228.994,11.94,214.22,24.189a3.008,3.008,0,0,1-3.538,0L195.907,11.94Z" fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                      <line x2="33.087" transform="translate(195.907 11.94)" fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </g>
                </svg>
            </div>
            <div class="text-center">
                <div class="margin-bottom--xlarge">
                    <h2 class="typography--green">¿Quieres comprar una farmacia? ¿Quieres vender una farmacia?</h2>
                </div>
                <div class="">
                    <p>Nos pondremos en contacto contigo lo antes posible para ofrecerte las mejores ofertas en compra y venta de farmacias en España.</p>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="margin-bottom--4xlarge">
                <form action="" class="line-col-center mail-form">
                    <div class="margin-bottom--2xsmall w-full">
                        <label class="typography--small" for="name">Nombre</label>
                        <input class="mt-1 field--active" type="text" name="name" value="Nombre auto completado" readonly>
                    </div>
                    <div class="margin-bottom--2xsmall w-full">
                        <label class="typography--small" for="surnames">Apellidos</label>
                        <input class="mt-1 field--active" type="text" name="surnames" value="Apellidos auto completados" readonly>
                    </div>
                    <div class="margin-bottom--2xsmall w-full">
                        <label class="typography--small" for="email">Email</label>
                        <input class="mt-1 field--active" type="email" name="email" value="nombre@email.com" readonly>
                    </div>
                    <div class="margin-bottom--2xsmall w-full">
                        <label class="typography--small" for="mobile">Teléfono móvil</label>
                        <input class="mt-1 field--active" type="number" name="mobile" value="Móvil auto completado" readonly>
                    </div>
                    <div class="margin-bottom--2xsmall w-full">
                        <div class="margin-bottom--4xsmall">
                            <p class="typography--small">Provincia</p>
                        </div>
                        <div class="custom-select__container field--active">
                            <div class="line-row-between">
                              <div class="custom-select__subtitle">
                                <p class="typography--dark-green">Preferencia de provincias</p>
                              </div>
                              <div class="custom-select__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25" viewBox="0 0 14.012 8.25">
                                  <path d="M246.5,251.685l5.836-5.592L246.5,240.5" transform="translate(253.099 -245.085) rotate(90)" fill="none" stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                </svg>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="margin-bottom--3xsmall w-full">
                        <div class="margin-bottom--small">
                            <p class="typography--small">Interesado/a en*</p>
                        </div>
                        <div class="margin-bottom--small">
                            <label class="custom-radio-btn__container">Comprar Farmacia
                                <input type="radio" name="preferences-option">
                                <span class="custom-radio-btn__item"></span>
                            </label>
                        </div>
                        <div class="margin-bottom--small">
                            <label class="custom-radio-btn__container">Vender Farmacia
                                <input type="radio" name="preferences-option">
                                <span class="custom-radio-btn__item"></span>
                            </label>
                        </div>
                        <div class="margin-bottom--small">
                            <label class="custom-radio-btn__container">Otros
                                <input type="radio" name="preferences-option">
                                <span class="custom-radio-btn__item"></span>
                            </label>
                        </div>
                    </div>
                    <div class="margin-bottom--medium w-full">
                        <label for="message" class="typography--small">Tu consulta</label>
                        <textarea class="mt-1" name="message" cols="30" rows="8" placeholder="Cómo podemos ayudarte..."></textarea>
                    </div>
                    <div class="margin-bottom--medium w-full">
                        <div class="line-row">
                            <label for="save-data" class="custom-checkbox__container">
                                <input type="checkbox" name="save-data">
                                <span class="custom-checkbox__item"></span>
                                <span class="custom-checkbox__check">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.362" height="8.25" viewBox="0 0 12.362 8.25">
                                        <path d="M248.916,250.037l3.419-3.945L246.5,240.5" transform="translate(251.448 -245.085) rotate(90)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                      </svg>
                                </span>
                                <span class="typography--small">He leído y acepto los <a href="https://www.farmaconsulting.es/terminos-uso/" target="_blank" class="typography--links">Términos de uso</a> y <a href="https://www.farmaconsulting.es/politica-privacidad/" target="_blank" class="typography--links">Política de Privacidad</a></span>
                            </label>
                        </div>
                    </div>
                    <div class="w-full">
                        <button class="btn--inactive-primary">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
