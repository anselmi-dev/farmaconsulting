@extends('layouts.app')

@section('breadcrumbs', 'Contacto')

@section('content')
    <div x-data="{expanded: false}">
        <div class="wrapper--larger">
            <div class="main__container">
                <div class="margin-bottom--5xlarge">
                    <div class="margin-bottom--2xsmall">
                    <a href="javascript:void(0);" @click="expanded = !expanded">
                        <div class="contact__option">
                            <div class="line-row-between">
                                <div class="line-row">
                                    <div class="contact-option__icon-container">
                                        <svg class="icon--medium mx-auto" xmlns="http://www.w3.org/2000/svg" width="20.047" height="38" viewBox="0 0 20.047 38">
                                            <g transform="translate(-139.243 -4.94)">
                                            <path d="M158.29,10.452V8.3a2.363,2.363,0,0,0-2.362-2.364H142.607A2.365,2.365,0,0,0,140.243,8.3v2.148Z" fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <path d="M140.243,33.94v5a3.5,3.5,0,0,0,2.451,3h13.234a3.421,3.421,0,0,0,2.362-2.915V33.94Z" fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <rect width="18.047" height="23.488" transform="translate(140.243 10.452)" fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="contact-option__title typography--dark-green">Llámanos por teléfono</p>
                                </div>
                                <div class="contact-option__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25" viewBox="0 0 14.012 8.25">
                                    <path d="M246.5,251.685l5.836-5.592L246.5,240.5" transform="translate(253.099 -245.085) rotate(90)" fill="none" stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="margin-bottom--2xsmall">
                    <a href="{{ route('contact.mail') }}">
                        <div class="contact__option">
                            <div class="line-row-between">
                                <div class="line-row">
                                    <div class="contact-option__icon-container">
                                        <svg class="h-5 mx-auto" xmlns="http://www.w3.org/2000/svg" width="35.087" height="26.063" viewBox="0 0 35.087 26.063">
                                            <g transform="translate(-194.907 -10.94)">
                                            <path d="M228.994,11.94V32.994A3.016,3.016,0,0,1,225.985,36H198.916a3.017,3.017,0,0,1-3.009-3.009V11.94" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <path d="M228.994,11.94,214.22,24.189a3.008,3.008,0,0,1-3.538,0L195.907,11.94Z" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <line x2="33.087" transform="translate(195.907 11.94)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="contact-option__title">Cuéntanos tu consulta</p>
                                </div>
                                <div class="contact-option__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25" viewBox="0 0 14.012 8.25">
                                    <path d="M246.5,251.685l5.836-5.592L246.5,240.5" transform="translate(253.099 -245.085) rotate(90)" fill="none" stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="margin-bottom--2xsmall">
                    <a href="{{ route('contact.callback') }}">
                        <div class="contact__option">
                            <div class="line-row-between">
                                <div class="line-row">
                                    <div class="contact-option__icon-container">
                                        <svg class="icon--medium mx-auto" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                            <g transform="translate(-62.1)">
                                            <rect width="48" height="48" transform="translate(62.1)" fill="none"/>
                                            <path d="M67.287,9.567" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.055"/>
                                            <g>
                                                <path d="M69.114,10.906a3.024,3.024,0,0,0-.137,2A36.822,36.822,0,0,0,79.164,32.472,35.858,35.858,0,0,0,98.676,42.609a3.159,3.159,0,0,0,2-.139.979.979,0,0,0,.482-.607l1.209-5.41a1.457,1.457,0,0,0-.456-1.331c-.184-.184-4.283-1.664-6.221-2.611A1.629,1.629,0,0,0,93.574,33l-.753,1.3a1.915,1.915,0,0,1-1.179.888c-1.9.479-7.766-4.924-9.042-6.2-1.321-1.322-6.907-7.334-6.423-9.23a1.9,1.9,0,0,1,.889-1.18c1.13-.655.824-.478,1.283-.746a1.63,1.63,0,0,0,.5-2.122,33.234,33.234,0,0,1-1.888-5.2,1.694,1.694,0,0,0-1.812-1.29s-.093.022-5.439,1.216A.975.975,0,0,0,69.114,10.906Z" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                <path d="M85.619,13.677A10.693,10.693,0,0,1,96.312,24.37" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                <path d="M85.619,9.147A15.225,15.225,0,0,1,100.844,24.37" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="contact-option__title">¿Quieres que te llamemos nosotros?</p>
                                </div>
                                <div class="contact-option__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25" viewBox="0 0 14.012 8.25">
                                    <path d="M246.5,251.685l5.836-5.592L246.5,240.5" transform="translate(253.099 -245.085) rotate(90)" fill="none" stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="margin-bottom--2xsmall">
                        <a href="{{ route('contact.shops') }}">
                            <div class="contact__option border-0">
                                <div class="line-row-between">
                                    <div class="line-row">
                                        <div class="contact-option__icon-container">
                                            <svg class="icon--medium mx-auto" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                                <rect width="48" height="48" fill="none"/>
                                                <path d="M5.186,9.567" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.055"/>
                                                <g>
                                                    <path d="M14.054,20.011H9.713L6.7,41.065l9.023-4.512L24,40.22l8.271-3.666,9.023,4.512L38.287,20.011H33.946" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    <g>
                                                    <path d="M34.269,16.783C34.269,24.192,24,34.52,24,34.52S13.717,24.237,13.73,16.783a10.27,10.27,0,0,1,20.539,0Z" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    <path d="M28.668,16.437A4.668,4.668,0,1,1,24,11.769,4.668,4.668,0,0,1,28.668,16.437Z" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="contact-option__title">¿Concertamos una reunión en nuestras oficinas?</p>
                                    </div>
                                    <div class="contact-option__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25" viewBox="0 0 14.012 8.25">
                                        <path d="M246.5,251.685l5.836-5.592L246.5,240.5" transform="translate(253.099 -245.085) rotate(90)" fill="none" stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider" :class="{ 'active': expanded }">
            <div class="slider__content" @click.away="if (expanded == true) console.log(1)">
                <div>
                    <a href="tel:+34900115765">
                        <div class="contact-modal__btn line-row">
                            <span class="mr-7">
                                <svg class="icon--medium" xmlns="http://www.w3.org/2000/svg" width="33.519" height="33.513" viewBox="0 0 33.519 33.513">
                                    <path d="M10.907,78.847a3.018,3.018,0,0,0-.136,2,36.811,36.811,0,0,0,10.186,19.562A35.859,35.859,0,0,0,40.469,110.55a3.159,3.159,0,0,0,2-.14.977.977,0,0,0,.482-.606l1.209-5.41a1.456,1.456,0,0,0-.456-1.331c-.184-.185-4.283-1.665-6.221-2.612a1.629,1.629,0,0,0-2.119.487l-.753,1.3a1.912,1.912,0,0,1-1.179.888c-1.9.479-7.766-4.924-9.041-6.2-1.322-1.323-6.908-7.334-6.424-9.23a1.9,1.9,0,0,1,.889-1.181c1.13-.655.824-.477,1.283-.746a1.629,1.629,0,0,0,.5-2.122,33.2,33.2,0,0,1-1.888-5.2,1.7,1.7,0,0,0-1.812-1.29s-.093.023-5.439,1.217A.971.971,0,0,0,10.907,78.847Z" transform="translate(-10.671 -77.125)" fill="#bfbfbf"></path>
                                </svg>
                            </span>
                            <span>Llamar al 900 115 765</span>
                        </div>
                    </a>
                    <button class="contact-modal__btn"  @click="expanded = !expanded">
                        <span class="font-bold">Cancelar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
