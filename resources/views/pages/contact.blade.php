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
                                            <svg class="icon--medium mx-auto" xmlns="http://www.w3.org/2000/svg"
                                                width="20.047" height="38" viewBox="0 0 20.047 38">
                                                <g transform="translate(-139.243 -4.94)">
                                                    <path
                                                        d="M158.29,10.452V8.3a2.363,2.363,0,0,0-2.362-2.364H142.607A2.365,2.365,0,0,0,140.243,8.3v2.148Z"
                                                        fill="none" stroke="#A2BD30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" />
                                                    <path
                                                        d="M140.243,33.94v5a3.5,3.5,0,0,0,2.451,3h13.234a3.421,3.421,0,0,0,2.362-2.915V33.94Z"
                                                        fill="none" stroke="#A2BD30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" />
                                                    <rect width="18.047" height="23.488"
                                                        transform="translate(140.243 10.452)" fill="none" stroke="#A2BD30"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="contact-option__title typography--dark-green">Llámanos por teléfono</p>
                                    </div>
                                    <div class="contact-option__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25"
                                            viewBox="0 0 14.012 8.25">
                                            <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                                transform="translate(253.099 -245.085) rotate(90)" fill="none"
                                                stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" />
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
                                            <svg class="h-5 mx-auto" xmlns="http://www.w3.org/2000/svg" width="35.087"
                                                height="26.063" viewBox="0 0 35.087 26.063">
                                                <g transform="translate(-194.907 -10.94)">
                                                    <path
                                                        d="M228.994,11.94V32.994A3.016,3.016,0,0,1,225.985,36H198.916a3.017,3.017,0,0,1-3.009-3.009V11.94"
                                                        fill="none" stroke="#a2bd30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" />
                                                    <path
                                                        d="M228.994,11.94,214.22,24.189a3.008,3.008,0,0,1-3.538,0L195.907,11.94Z"
                                                        fill="none" stroke="#a2bd30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" />
                                                    <line x2="33.087" transform="translate(195.907 11.94)" fill="none"
                                                        stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" />
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="contact-option__title">Cuéntanos tu consulta</p>
                                    </div>
                                    <div class="contact-option__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25"
                                            viewBox="0 0 14.012 8.25">
                                            <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                                transform="translate(253.099 -245.085) rotate(90)" fill="none"
                                                stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" />
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
                                            <svg class="icon--medium mx-auto" xmlns="http://www.w3.org/2000/svg" width="48"
                                                height="48" viewBox="0 0 48 48">
                                                <g transform="translate(-62.1)">
                                                    <rect width="48" height="48" transform="translate(62.1)" fill="none" />
                                                    <path d="M67.287,9.567" fill="none" stroke="#000" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2.055" />
                                                    <g>
                                                        <path
                                                            d="M69.114,10.906a3.024,3.024,0,0,0-.137,2A36.822,36.822,0,0,0,79.164,32.472,35.858,35.858,0,0,0,98.676,42.609a3.159,3.159,0,0,0,2-.139.979.979,0,0,0,.482-.607l1.209-5.41a1.457,1.457,0,0,0-.456-1.331c-.184-.184-4.283-1.664-6.221-2.611A1.629,1.629,0,0,0,93.574,33l-.753,1.3a1.915,1.915,0,0,1-1.179.888c-1.9.479-7.766-4.924-9.042-6.2-1.321-1.322-6.907-7.334-6.423-9.23a1.9,1.9,0,0,1,.889-1.18c1.13-.655.824-.478,1.283-.746a1.63,1.63,0,0,0,.5-2.122,33.234,33.234,0,0,1-1.888-5.2,1.694,1.694,0,0,0-1.812-1.29s-.093.022-5.439,1.216A.975.975,0,0,0,69.114,10.906Z"
                                                            fill="none" stroke="#a2bd30" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" />
                                                        <path d="M85.619,13.677A10.693,10.693,0,0,1,96.312,24.37"
                                                            fill="none" stroke="#a2bd30" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" />
                                                        <path d="M85.619,9.147A15.225,15.225,0,0,1,100.844,24.37"
                                                            fill="none" stroke="#a2bd30" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="contact-option__title">Nosotros te llamamos</p>
                                    </div>
                                    <div class="contact-option__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25"
                                            viewBox="0 0 14.012 8.25">
                                            <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                                transform="translate(253.099 -245.085) rotate(90)" fill="none"
                                                stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" />
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
                                            <svg class="icon--medium mx-auto" xmlns="http://www.w3.org/2000/svg" width="48"
                                                height="48" viewBox="0 0 48 48">
                                                <rect width="48" height="48" fill="none" />
                                                <path d="M5.186,9.567" fill="none" stroke="#000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2.055" />
                                                <g>
                                                    <path
                                                        d="M14.054,20.011H9.713L6.7,41.065l9.023-4.512L24,40.22l8.271-3.666,9.023,4.512L38.287,20.011H33.946"
                                                        fill="none" stroke="#a2bd30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" />
                                                    <g>
                                                        <path
                                                            d="M34.269,16.783C34.269,24.192,24,34.52,24,34.52S13.717,24.237,13.73,16.783a10.27,10.27,0,0,1,20.539,0Z"
                                                            fill="none" stroke="#a2bd30" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" />
                                                        <path
                                                            d="M28.668,16.437A4.668,4.668,0,1,1,24,11.769,4.668,4.668,0,0,1,28.668,16.437Z"
                                                            fill="none" stroke="#a2bd30" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="contact-option__title">¿Concertamos una reunión en nuestras oficinas?</p>
                                    </div>
                                    <div class="contact-option__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25"
                                            viewBox="0 0 14.012 8.25">
                                            <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                                transform="translate(253.099 -245.085) rotate(90)" fill="none"
                                                stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="margin-bottom--2xsmall">
                        <a href="{{ route('valoracion') }}">
                            <div class="contact__option border-0">
                                <div class="line-row-between">
                                    <div class="line-row">
                                        <div class="contact-option__icon-container">
                                            <svg class="icon--medium mx-auto" width="48" height="48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 381.24 383.32">
                                                <path fill="#a2bd30" d="M126.94,192.74a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Zm0,0a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Zm0,0a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Zm0,0a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29ZM381,134c-1.84-13.91-10-22.7-23.69-25.8-2.22-.5-2.26-1.31-1.88-2.92a19.11,19.11,0,0,0,.22-7.42c-2.18-13.62-9.92-22.13-23.34-25.36-1.63-.4-2.37-.65-2-2.8a26.08,26.08,0,0,0-.13-10.41C326.8,44,314.1,34.67,298.44,36.14c-3.07.29-4-.33-4.76-3.5-3.34-14.63-18.47-24-33.3-21.42C252,12.7,246,17.62,240.56,23.61c-2,2.2-3.74,2.67-6.67,1.81a175.93,175.93,0,0,0-66.79-6.58,5.88,5.88,0,0,1-4.71-1.47C152.63,9.23,141.9,3.09,129.2.61,107.5-3.63,90.9,15,98.05,35.87c.81,2.36,0,3-1.69,3.91C91.5,42.54,86.67,45.36,82,48.35s-5.86,7.59-3.28,11.4,6.8,4.18,11.52,1.31c5.09-3.1,10.31-6,15.37-9.13,2.29-1.43,3.58-.89,5.2,1.11a129.17,129.17,0,0,1,13.88,20.3c5.39,10.1,9.2,20.7,8.36,32.38-.4,5.69-1.55,11.33-2.15,17a170.85,170.85,0,0,0-.07,30.26c.09,1.31.75,3.07-1.93,2.91-7.79-.47-13.72,3.15-19.06,8.52q-41.69,41.9-83.52,83.64A28.22,28.22,0,0,0,23.6,252c-.78-2-1.11-2.65-1.31-3.35-10.14-35-9.35-69.7,2.61-104.11a168.85,168.85,0,0,1,18.46-36.86c3.39-5.2,1.13-11.26-4.48-12.26-4-.7-6.5,1.46-8.56,4.65-28.52,44.3-37,92.24-25,143.43,16.84,71.8,76.09,126.18,148.83,137.68,4.45.71,9.07.47,13.36,2.16h29.18c.31-1,1.19-.68,1.86-.71A121.5,121.5,0,0,0,218.09,380c35.9-7.26,67.31-23.36,93-49.5,43.73-44.47,60.93-97.86,51.78-159.64-.32-2.12-.07-3.74,1.62-5.3,3.12-2.86,6.14-5.86,9-9C379.26,150.19,382.13,142.59,381,134ZM224.82,38.66,198.18,65.37A165.79,165.79,0,0,0,178.3,33.64C186.65,32.11,209.16,34.58,224.82,38.66ZM95.91,199.74c8.6-8.48,17.1-17.08,25.68-25.59,4.52-4.48,8.57-4.37,13.21.26L214.35,254q7,7,14,14c1.73,1.73,3,3.64,2.77,6.15a7.35,7.35,0,0,1-2.56,6c-8.71,8.72-17.52,17.36-26.1,26.22-2.32,2.4-3.09.29-4.23-.85Q151.43,258.78,104.66,212c-2.9-2.91-5.74-5.89-8.75-8.69C94.46,201.94,94.51,201.12,95.91,199.74Zm50.62,162.52a3.7,3.7,0,0,1-4.2,1.08C90.2,349.51,53,317.92,29.92,269.34c-.88-1.85-.68-3,.81-4.45q25.49-25.27,50.8-50.71c.6-.59,1.24-1.13,2-1.81.95.9,1.77,1.64,2.55,2.42l85.39,85.39c5.55,5.55,11.06,11.15,16.68,16.63,1.38,1.34,1.83,2.08.19,3.7Q167.34,341.29,146.53,362.26ZM301,319.42c-43.52,43.36-99.92,52.92-137.62,47.35,11-10.95,21.54-21.5,32.11-32.07,14.37-14.36,28.69-28.77,43.11-43.09,7.22-7.16,9.63-15.53,6.41-25.19-.8-2.38.59-2.85,1.82-3.7a146.8,146.8,0,0,1,22.45-12.44,125.83,125.83,0,0,0,38.5-27.71c13.28-14,27.2-27.39,40.93-41.13C354.73,221.05,343.45,277.15,301,319.42ZM362.12,146.5c-5.38,5.72-11.05,11.16-16.61,16.72-17.36,17.37-34.83,34.63-52,52.15a95.26,95.26,0,0,1-25.17,18.4c-10.94,5.56-22.25,10.5-32.1,18-1.71,1.3-2.39.2-3.35-.76q-9-9-18-18-32.54-32.52-65.1-65a10.73,10.73,0,0,1-3.52-7.7,322.68,322.68,0,0,1-.46-33.64,104.48,104.48,0,0,1,1.48-12.58c3.46-19.8-2.78-37.26-12.8-53.83a154.44,154.44,0,0,0-19.37-25.09c-2.79-3-4.22-6.5-3.6-10.57,1-6.55,6.83-10.31,13.87-9.19,12.45,2,22.34,8.69,31.22,17.09,12,11.35,20.94,24.9,28,39.74,2.16,4.53,4.91,8.26,9.74,10.25s7,1.68,10.72-2q24.88-24.86,49.72-49.74c3.46-3.47,7.47-5.29,12.41-4.66a13.22,13.22,0,0,1,11.26,8.59A13.34,13.34,0,0,1,276.15,49c-1.79,2.19-3.42,4.37-2.88,7.35a7.57,7.57,0,0,0,12.62,4.42C288,59,289.77,56.87,291.77,55A14,14,0,0,1,312,74.39c-1.55,1.78-3.32,3.38-5,5.07-3.94,4-4.35,8.09-1.16,11.5,3,3.17,7.21,3.1,11.32-.21,5.72-4.59,12-5,17.51-1.14,3.94,2.77,5.89,6.63,5.87,12.12a12.77,12.77,0,0,1-3.85,9.13c-1.79,1.9-3.74,3.67-5.46,5.64-2.91,3.31-2.79,7.44.14,10.4a7.48,7.48,0,0,0,10.16.39c4-3.48,8.42-5.36,13.69-4.06A13.91,13.91,0,0,1,362.12,146.5ZM126.91,208a7.65,7.65,0,0,0,0-15.29,7.65,7.65,0,0,0,0,15.29Zm0-15.29a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Zm0,0a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Z"/>
                                                <path fill="#a2bd30" class="cls-2" d="M51.48,76.79a7.49,7.49,0,1,1,7.37,7.72A7.65,7.65,0,0,1,51.48,76.79Z"/>
                                                <path fill="#a2bd30" class="cls-3" d="M134.5,200.4a7.86,7.86,0,0,1-7.59,7.63,7.65,7.65,0,0,1,0-15.29A7.84,7.84,0,0,1,134.5,200.4Z"/>
                                                <path fill="#a2bd30" class="cls-4" d="M134.5,200.4a7.86,7.86,0,0,1-7.59,7.63,7.65,7.65,0,0,1,0-15.29A7.84,7.84,0,0,1,134.5,200.4Z"/>
                                            </svg>
                                        </div>
                                        <p class="contact-option__title">Valoración y sugerencias</p>
                                    </div>
                                    <div class="contact-option__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25"
                                            viewBox="0 0 14.012 8.25">
                                            <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                                transform="translate(253.099 -245.085) rotate(90)" fill="none"
                                                stroke="#e8e8e8" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" />
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
            <div class="slider__content slider__content--call" @click.away="if (expanded == true) console.log(1)">
                <div class="w-full">
                    <a href="tel:+34900115765">
                        <div class="contact-modal__btn line-row">
                            <span class="mr-7">
                                <svg class="icon--medium" xmlns="http://www.w3.org/2000/svg" width="33.519"
                                    height="33.513" viewBox="0 0 33.519 33.513">
                                    <path
                                        d="M10.907,78.847a3.018,3.018,0,0,0-.136,2,36.811,36.811,0,0,0,10.186,19.562A35.859,35.859,0,0,0,40.469,110.55a3.159,3.159,0,0,0,2-.14.977.977,0,0,0,.482-.606l1.209-5.41a1.456,1.456,0,0,0-.456-1.331c-.184-.185-4.283-1.665-6.221-2.612a1.629,1.629,0,0,0-2.119.487l-.753,1.3a1.912,1.912,0,0,1-1.179.888c-1.9.479-7.766-4.924-9.041-6.2-1.322-1.323-6.908-7.334-6.424-9.23a1.9,1.9,0,0,1,.889-1.181c1.13-.655.824-.477,1.283-.746a1.629,1.629,0,0,0,.5-2.122,33.2,33.2,0,0,1-1.888-5.2,1.7,1.7,0,0,0-1.812-1.29s-.093.023-5.439,1.217A.971.971,0,0,0,10.907,78.847Z"
                                        transform="translate(-10.671 -77.125)" fill="#bfbfbf"></path>
                                </svg>
                            </span>
                            <span>Llamar al 900 115 765</span>
                        </div>
                    </a>
                    <button class="contact-modal__btn" @click="expanded = !expanded">
                        <span class="font-bold">Cancelar</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
