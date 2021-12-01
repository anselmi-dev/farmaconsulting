@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('contact') }}" class="text-primary">Contacto</a>/<span>Nuestras Oficinas</span>
@endsection

@section('nav-icon')
    <a href="{{ route('contact') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@section('content')
    <div class="main__container">
        <div class="margin-bottom--5xlarge">
            <div class="wrapper--larger">
                <div class="margin-bottom--large">
                    <div class="margin-bottom--xlarge">
                        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                            viewBox="0 0 48 48">
                            <rect width="48" height="48" fill="none" />
                            <path d="M5.186,9.567" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.055" />
                            <g>
                                <path
                                    d="M14.054,20.011H9.713L6.7,41.065l9.023-4.512L24,40.22l8.271-3.666,9.023,4.512L38.287,20.011H33.946"
                                    fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                                <g>
                                    <path
                                        d="M34.269,16.783C34.269,24.192,24,34.52,24,34.52S13.717,24.237,13.73,16.783a10.27,10.27,0,0,1,20.539,0Z"
                                        fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" />
                                    <path d="M28.668,16.437A4.668,4.668,0,1,1,24,11.769,4.668,4.668,0,0,1,28.668,16.437Z"
                                        fill="none" stroke="#A2BD30" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="text-center">
                        <div class="margin-bottom--xlarge">
                            <h2 class="typography--green">¿Concertamos una reunión en nuestras oficinas?</h2>
                        </div>
                        <div class="">
                            <p>Nos pondremos en contacto contigo lo antes posible para ofrecerte las mejores ofertas en
                                compra y venta de farmacias en España.</p>
                        </div>
                    </div>
                </div>
                <div class="margin-bottom--5xlarge">
                    <div class="margin-bottom--4xsmall">
                        <div class="contact__option">
                            <div class="line-row-between">
                                <div class="margin-bottom--4xsmall">
                                    <div class="contact-option__shops">
                                        <p class="margin-bottom--4xsmall">
                                            <span class="typography--dark-green uppercase font-bold">VITORIA</span>
                                        </p>
                                        <p class="margin-bottom--2xlarge">
                                            <span class="typography--small">Avda. Gasteiz 61, 1º Izda.
                                                <br />C.P. 01008</span>
                                        </p>
                                        <div class="">
                                            <a href="tel:+34900565503">
                                                <span class="typography--green font-bold">900 565 503</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-bottom--4xsmall">
                                    <div class="contact-option__shops">
                                        <div class="margin-bottom--2xlarge">
                                            <a href="#">
                                                <div class="line-row">
                                                    <div class="mr-2.5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.104"
                                                            height="25.486" viewBox="0 0 21.104 25.486">
                                                            <g id="Group_328" data-name="Group 328"
                                                                transform="translate(-186.625 -469.469)">
                                                                <path id="Path_2751" data-name="Path 2751"
                                                                    d="M24.222,7.8A9.557,9.557,0,0,0,10.707,21.315l6.758,6.757,6.758-6.757A9.566,9.566,0,0,0,24.222,7.8Z"
                                                                    transform="translate(179.711 465.469)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                                <path id="Path_2752" data-name="Path 2752"
                                                                    d="M21.233,14.286a4.043,4.043,0,1,0,4.044,4.043A4.047,4.047,0,0,0,21.233,14.286Z"
                                                                    transform="translate(175.943 461.696)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <p class="typography--dark-green font-bold">Google maps</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('contact.mail') }}">
                                                <span class="typography--green font-bold">Pide tu cita ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom--4xsmall">
                        <div class="contact__option">
                            <div class="line-row-between">
                                <div class="margin-bottom--4xsmall">
                                    <div class="contact-option__shops">
                                        <p class="margin-bottom--4xsmall">
                                            <span class="typography--dark-green uppercase font-bold">BARCELONA</span>
                                        </p>
                                        <p class="margin-bottom--2xlarge">
                                            <span class="typography--small">Rambla Catalunya
                                                <br />91-93. 5º 3ª
                                                <br />C.P: 08008</span>
                                        </p>
                                        <div class="">
                                            <a href="tel:+34902115765">
                                                <span class="typography--green font-bold">900 115 765</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-bottom--4small">
                                    <div class="contact-option__shops">
                                        <div class="margin-bottom--2xlarge">
                                            <a href="#">
                                                <div class="line-row">
                                                    <div class="mr-2.5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.104"
                                                            height="25.486" viewBox="0 0 21.104 25.486">
                                                            <g id="Group_328" data-name="Group 328"
                                                                transform="translate(-186.625 -469.469)">
                                                                <path id="Path_2751" data-name="Path 2751"
                                                                    d="M24.222,7.8A9.557,9.557,0,0,0,10.707,21.315l6.758,6.757,6.758-6.757A9.566,9.566,0,0,0,24.222,7.8Z"
                                                                    transform="translate(179.711 465.469)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                                <path id="Path_2752" data-name="Path 2752"
                                                                    d="M21.233,14.286a4.043,4.043,0,1,0,4.044,4.043A4.047,4.047,0,0,0,21.233,14.286Z"
                                                                    transform="translate(175.943 461.696)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <p class="typography--dark-green font-bold">Google maps</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('contact.mail') }}">
                                                <span class="typography--green font-bold">Pide tu cita ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom--4xsmall">
                        <div class="contact__option">
                            <div class="line-row-between">
                                <div class="margin-bottom--4xsmall">
                                    <div class="contact-option__shops">
                                        <p class="margin-bottom--4xsmall">
                                            <span class="typography--dark-green uppercase font-bold">VALENCIA</span>
                                        </p>
                                        <p class="margin-bottom--2xlarge">
                                            <span class="typography--small">Edif. Sorolla Center.,
                                                <br />Avda. de las Corts
                                                <br />Valencianes, 58 of. 1106,
                                                <br />C.P: 46015</span>
                                        </p>
                                        <div class="">
                                            <a href="tel:+34902115765">
                                                <span class="typography--green font-bold">900 115 765</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-bottom--4small">
                                    <div class="contact-option__shops">
                                        <div class="margin-bottom--2xlarge">
                                            <a href="#">
                                                <div class="line-row">
                                                    <div class="mr-2.5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.104"
                                                            height="25.486" viewBox="0 0 21.104 25.486">
                                                            <g id="Group_328" data-name="Group 328"
                                                                transform="translate(-186.625 -469.469)">
                                                                <path id="Path_2751" data-name="Path 2751"
                                                                    d="M24.222,7.8A9.557,9.557,0,0,0,10.707,21.315l6.758,6.757,6.758-6.757A9.566,9.566,0,0,0,24.222,7.8Z"
                                                                    transform="translate(179.711 465.469)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                                <path id="Path_2752" data-name="Path 2752"
                                                                    d="M21.233,14.286a4.043,4.043,0,1,0,4.044,4.043A4.047,4.047,0,0,0,21.233,14.286Z"
                                                                    transform="translate(175.943 461.696)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <p class="typography--dark-green font-bold">Google maps</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('contact.mail') }}">
                                                <span class="typography--green font-bold">Pide tu cita ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom--4xsmall">
                        <div class="contact__option">
                            <div class="line-row-between">
                                <div class="margin-bottom--4xsmall">
                                    <div class="contact-option__shops">
                                        <p class="margin-bottom--4xsmall">
                                            <span class="typography--dark-green uppercase font-bold">MADRID</span>
                                        </p>
                                        <p class="margin-bottom--2xlarge">
                                            <span class="typography--small">Plaza de la Lealtad 3,
                                                <br />Entreplanta Izqda.
                                                <br />C.P. 28014</span>
                                        </p>
                                        <div class="">
                                            <a href="tel:+34902115765">
                                                <span class="typography--green font-bold">900 115 765</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-bottom--4small">
                                    <div class="contact-option__shops">
                                        <div class="margin-bottom--2xlarge">
                                            <a href="#">
                                                <div class="line-row">
                                                    <div class="mr-2.5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.104"
                                                            height="25.486" viewBox="0 0 21.104 25.486">
                                                            <g id="Group_328" data-name="Group 328"
                                                                transform="translate(-186.625 -469.469)">
                                                                <path id="Path_2751" data-name="Path 2751"
                                                                    d="M24.222,7.8A9.557,9.557,0,0,0,10.707,21.315l6.758,6.757,6.758-6.757A9.566,9.566,0,0,0,24.222,7.8Z"
                                                                    transform="translate(179.711 465.469)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                                <path id="Path_2752" data-name="Path 2752"
                                                                    d="M21.233,14.286a4.043,4.043,0,1,0,4.044,4.043A4.047,4.047,0,0,0,21.233,14.286Z"
                                                                    transform="translate(175.943 461.696)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <p class="typography--dark-green font-bold">Google maps</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('contact.mail') }}">
                                                <span class="typography--green font-bold">Pide tu cita ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom--4xsmall">
                        <div class="contact__option">
                            <div class="line-row-between">
                                <div class="margin-bottom--4xsmall">
                                    <div class="contact-option__shops">
                                        <p class="margin-bottom--4xsmall">
                                            <span class="typography--dark-green uppercase font-bold">CORUÑA</span>
                                        </p>
                                        <p class="margin-bottom--2xlarge">
                                            <span class="typography--small">C/Enrique Mariñas, 34,
                                                <br />Hotel Attica 21
                                                <br />Sala Cyber3,
                                                <br />C.P. 15009</span>
                                        </p>
                                        <div class="">
                                            <a href="tel:+34902115765">
                                                <span class="typography--green font-bold">900 115 765</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-bottom--4small">
                                    <div class="contact-option__shops">
                                        <div class="margin-bottom--2xlarge">
                                            <a href="#">
                                                <div class="line-row">
                                                    <div class="mr-2.5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.104"
                                                            height="25.486" viewBox="0 0 21.104 25.486">
                                                            <g id="Group_328" data-name="Group 328"
                                                                transform="translate(-186.625 -469.469)">
                                                                <path id="Path_2751" data-name="Path 2751"
                                                                    d="M24.222,7.8A9.557,9.557,0,0,0,10.707,21.315l6.758,6.757,6.758-6.757A9.566,9.566,0,0,0,24.222,7.8Z"
                                                                    transform="translate(179.711 465.469)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                                <path id="Path_2752" data-name="Path 2752"
                                                                    d="M21.233,14.286a4.043,4.043,0,1,0,4.044,4.043A4.047,4.047,0,0,0,21.233,14.286Z"
                                                                    transform="translate(175.943 461.696)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <p class="typography--dark-green font-bold">Google maps</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('contact.mail') }}">
                                                <span class="typography--green font-bold">Pide tu cita ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom--4xsmall">
                        <div class="contact__option">
                            <div class="line-row-between">
                                <div class="margin-bottom--4xsmall">
                                    <div class="contact-option__shops">
                                        <p class="margin-bottom--4xsmall">
                                            <span class="typography--dark-green uppercase font-bold">ZARAGOZA</span>
                                        </p>
                                        <p class="margin-bottom--2xlarge">
                                            <span class="typography--small">P.º de la Independencia, 8 Duplicado
                                                <br />2ª planta
                                                <br />C.P. 50004</span>
                                        </p>
                                        <div class="">
                                            <a href="tel:+34902115765">
                                                <span class="typography--green font-bold">900 115 765</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-bottom--4small">
                                    <div class="contact-option__shops">
                                        <div class="margin-bottom--2xlarge">
                                            <a href="#">
                                                <div class="line-row">
                                                    <div class="mr-2.5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.104"
                                                            height="25.486" viewBox="0 0 21.104 25.486">
                                                            <g id="Group_328" data-name="Group 328"
                                                                transform="translate(-186.625 -469.469)">
                                                                <path id="Path_2751" data-name="Path 2751"
                                                                    d="M24.222,7.8A9.557,9.557,0,0,0,10.707,21.315l6.758,6.757,6.758-6.757A9.566,9.566,0,0,0,24.222,7.8Z"
                                                                    transform="translate(179.711 465.469)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                                <path id="Path_2752" data-name="Path 2752"
                                                                    d="M21.233,14.286a4.043,4.043,0,1,0,4.044,4.043A4.047,4.047,0,0,0,21.233,14.286Z"
                                                                    transform="translate(175.943 461.696)" fill="none"
                                                                    stroke="#405921" stroke-miterlimit="10"
                                                                    stroke-width="2" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <p class="typography--dark-green font-bold">Google maps</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('contact.mail') }}">
                                                <span class="typography--green font-bold">Pide tu cita ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
