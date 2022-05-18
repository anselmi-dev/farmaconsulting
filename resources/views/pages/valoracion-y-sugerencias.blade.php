@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('contact') }}" class="text-primary">Contacto</a>/<span>Valoración y sugerencias</span>
@endsection

@section('nav-icon')
    <a href="{{ route('contact') }}">
        @includeIf('layouts.icons.back')
    </a>
@endsection

@section('content')
    <div class="main__container">
        <div class="wrapper--larger">
            <div class="margin-bottom--xlarge">
                <svg class="mx-auto" width="48" height="48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 381.24 383.32">
                    <path fill="#a2bd30" d="M126.94,192.74a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Zm0,0a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Zm0,0a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Zm0,0a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29ZM381,134c-1.84-13.91-10-22.7-23.69-25.8-2.22-.5-2.26-1.31-1.88-2.92a19.11,19.11,0,0,0,.22-7.42c-2.18-13.62-9.92-22.13-23.34-25.36-1.63-.4-2.37-.65-2-2.8a26.08,26.08,0,0,0-.13-10.41C326.8,44,314.1,34.67,298.44,36.14c-3.07.29-4-.33-4.76-3.5-3.34-14.63-18.47-24-33.3-21.42C252,12.7,246,17.62,240.56,23.61c-2,2.2-3.74,2.67-6.67,1.81a175.93,175.93,0,0,0-66.79-6.58,5.88,5.88,0,0,1-4.71-1.47C152.63,9.23,141.9,3.09,129.2.61,107.5-3.63,90.9,15,98.05,35.87c.81,2.36,0,3-1.69,3.91C91.5,42.54,86.67,45.36,82,48.35s-5.86,7.59-3.28,11.4,6.8,4.18,11.52,1.31c5.09-3.1,10.31-6,15.37-9.13,2.29-1.43,3.58-.89,5.2,1.11a129.17,129.17,0,0,1,13.88,20.3c5.39,10.1,9.2,20.7,8.36,32.38-.4,5.69-1.55,11.33-2.15,17a170.85,170.85,0,0,0-.07,30.26c.09,1.31.75,3.07-1.93,2.91-7.79-.47-13.72,3.15-19.06,8.52q-41.69,41.9-83.52,83.64A28.22,28.22,0,0,0,23.6,252c-.78-2-1.11-2.65-1.31-3.35-10.14-35-9.35-69.7,2.61-104.11a168.85,168.85,0,0,1,18.46-36.86c3.39-5.2,1.13-11.26-4.48-12.26-4-.7-6.5,1.46-8.56,4.65-28.52,44.3-37,92.24-25,143.43,16.84,71.8,76.09,126.18,148.83,137.68,4.45.71,9.07.47,13.36,2.16h29.18c.31-1,1.19-.68,1.86-.71A121.5,121.5,0,0,0,218.09,380c35.9-7.26,67.31-23.36,93-49.5,43.73-44.47,60.93-97.86,51.78-159.64-.32-2.12-.07-3.74,1.62-5.3,3.12-2.86,6.14-5.86,9-9C379.26,150.19,382.13,142.59,381,134ZM224.82,38.66,198.18,65.37A165.79,165.79,0,0,0,178.3,33.64C186.65,32.11,209.16,34.58,224.82,38.66ZM95.91,199.74c8.6-8.48,17.1-17.08,25.68-25.59,4.52-4.48,8.57-4.37,13.21.26L214.35,254q7,7,14,14c1.73,1.73,3,3.64,2.77,6.15a7.35,7.35,0,0,1-2.56,6c-8.71,8.72-17.52,17.36-26.1,26.22-2.32,2.4-3.09.29-4.23-.85Q151.43,258.78,104.66,212c-2.9-2.91-5.74-5.89-8.75-8.69C94.46,201.94,94.51,201.12,95.91,199.74Zm50.62,162.52a3.7,3.7,0,0,1-4.2,1.08C90.2,349.51,53,317.92,29.92,269.34c-.88-1.85-.68-3,.81-4.45q25.49-25.27,50.8-50.71c.6-.59,1.24-1.13,2-1.81.95.9,1.77,1.64,2.55,2.42l85.39,85.39c5.55,5.55,11.06,11.15,16.68,16.63,1.38,1.34,1.83,2.08.19,3.7Q167.34,341.29,146.53,362.26ZM301,319.42c-43.52,43.36-99.92,52.92-137.62,47.35,11-10.95,21.54-21.5,32.11-32.07,14.37-14.36,28.69-28.77,43.11-43.09,7.22-7.16,9.63-15.53,6.41-25.19-.8-2.38.59-2.85,1.82-3.7a146.8,146.8,0,0,1,22.45-12.44,125.83,125.83,0,0,0,38.5-27.71c13.28-14,27.2-27.39,40.93-41.13C354.73,221.05,343.45,277.15,301,319.42ZM362.12,146.5c-5.38,5.72-11.05,11.16-16.61,16.72-17.36,17.37-34.83,34.63-52,52.15a95.26,95.26,0,0,1-25.17,18.4c-10.94,5.56-22.25,10.5-32.1,18-1.71,1.3-2.39.2-3.35-.76q-9-9-18-18-32.54-32.52-65.1-65a10.73,10.73,0,0,1-3.52-7.7,322.68,322.68,0,0,1-.46-33.64,104.48,104.48,0,0,1,1.48-12.58c3.46-19.8-2.78-37.26-12.8-53.83a154.44,154.44,0,0,0-19.37-25.09c-2.79-3-4.22-6.5-3.6-10.57,1-6.55,6.83-10.31,13.87-9.19,12.45,2,22.34,8.69,31.22,17.09,12,11.35,20.94,24.9,28,39.74,2.16,4.53,4.91,8.26,9.74,10.25s7,1.68,10.72-2q24.88-24.86,49.72-49.74c3.46-3.47,7.47-5.29,12.41-4.66a13.22,13.22,0,0,1,11.26,8.59A13.34,13.34,0,0,1,276.15,49c-1.79,2.19-3.42,4.37-2.88,7.35a7.57,7.57,0,0,0,12.62,4.42C288,59,289.77,56.87,291.77,55A14,14,0,0,1,312,74.39c-1.55,1.78-3.32,3.38-5,5.07-3.94,4-4.35,8.09-1.16,11.5,3,3.17,7.21,3.1,11.32-.21,5.72-4.59,12-5,17.51-1.14,3.94,2.77,5.89,6.63,5.87,12.12a12.77,12.77,0,0,1-3.85,9.13c-1.79,1.9-3.74,3.67-5.46,5.64-2.91,3.31-2.79,7.44.14,10.4a7.48,7.48,0,0,0,10.16.39c4-3.48,8.42-5.36,13.69-4.06A13.91,13.91,0,0,1,362.12,146.5ZM126.91,208a7.65,7.65,0,0,0,0-15.29,7.65,7.65,0,0,0,0,15.29Zm0-15.29a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Zm0,0a7.65,7.65,0,0,0,0,15.29,7.65,7.65,0,0,0,0-15.29Z"/>
                    <path fill="#a2bd30" class="cls-2" d="M51.48,76.79a7.49,7.49,0,1,1,7.37,7.72A7.65,7.65,0,0,1,51.48,76.79Z"/>
                    <path fill="#a2bd30" class="cls-3" d="M134.5,200.4a7.86,7.86,0,0,1-7.59,7.63,7.65,7.65,0,0,1,0-15.29A7.84,7.84,0,0,1,134.5,200.4Z"/>
                    <path fill="#a2bd30" class="cls-4" d="M134.5,200.4a7.86,7.86,0,0,1-7.59,7.63,7.65,7.65,0,0,1,0-15.29A7.84,7.84,0,0,1,134.5,200.4Z"/>
                </svg>
            </div>
            <div class="text-center">
                <div >
                    <h2 class="typography--green">Valoración y sugerencias</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="margin-bottom--4xlarge">
            <form x-data="items" method="POST" action="{{ route('valoracion.post') }}" name="form-valoracion" class="line-col-center callback-form">
                @csrf
                <div class="margin-bottom--medium w-full form-group">
                    <label for="option1" class="relative block border border-gray-200 p-3 rounded overflow-hidden">
                        <input class="hidden" x-model="toggle" type="radio" id="option1" name="option" value="1">
                        <div class="absolute top-0 left-0 w-full h-full bg-green-100 pointer-events-none opacity-30 hidden"></div>
                        <div class="block cursor-pointer">
                            <div class="flex items-center -mx-2">
                                <div class="mx-2">
                                    <svg class="h-10" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.36,14.23a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm6-2a1,1,0,1,0,1,1A1,1,0,0,0,15,9ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>
                                </div>
                                <div class="mx-2 text-lg">
                                    Me gusta
                                </div>
                            </div>
                            <div class="mt-2">
                                Nos gusta oir lo que estamos haciendo bien.
                            </div>
                            <div :class="{ 'h-0' : toggle != 1}" class="overflow-hidden">
                                <textarea class="mt-2 p-3 rounded-lg bg-white z-11 relative" name="message_1" cols="30" rows="4" placeholder="Escribe algo..."></textarea>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="margin-bottom--medium w-full form-group">
                    <label for="option2" class="relative block border border-gray-200 p-3 rounded overflow-hidden">
                        <input class="hidden" x-model="toggle" type="radio" id="option2" name="option" value="2">
                        <div class="absolute top-0 left-0 w-full h-full bg-green-100 pointer-events-none opacity-30 hidden"></div>
                        <div class="block cursor-pointer">
                            <div class="flex items-center -mx-2">
                                <div class="mx-2">
                                    <svg class="h-10" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path  d="M10,11a1,1,0,0,0,.89-.55,1,1,0,0,0-.44-1.34l-2-1a1,1,0,1,0-.9,1.78l2,1A.93.93,0,0,0,10,11Zm2-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM8.36,15.33a1,1,0,0,0-.13,1.4,1,1,0,0,0,1.41.13,3.76,3.76,0,0,1,4.72,0,1,1,0,0,0,.64.23,1,1,0,0,0,.64-1.76A5.81,5.81,0,0,0,8.36,15.33Zm7.19-7.22-2,1a1,1,0,0,0-.44,1.34A1,1,0,0,0,14,11a.93.93,0,0,0,.45-.11l2-1a1,1,0,0,0-.9-1.78Z"/></svg>
                                </div>
                                <div class="mx-2 text-lg">
                                    No me gusta
                                </div>
                            </div>
                            <div class="mt-2">
                                Si algo no está bien, queremos saberlo.
                            </div>
                            <div :class="{ 'h-0' : toggle != 2}" class="overflow-hidden">
                                <textarea class="mt-2 p-3 rounded-lg bg-white z-11 relative" name="message_2" cols="30" rows="4" placeholder="Escribe algo..."></textarea>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="margin-bottom--medium w-full form-group">
                    <label for="option3" class="relative block border border-gray-200 p-3 rounded overflow-hidden">
                        <input class="hidden" x-model="toggle" type="radio" id="option3" name="option" value="3" >
                        <div class="absolute top-0 left-0 w-full h-full bg-green-100 pointer-events-none opacity-30 hidden"></div>
                        <div class="block cursor-pointer">
                            <div class="flex items-center -mx-2">
                                <div class="mx-2">
                                    <svg class="h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.29,3.71a1,1,0,0,0,1.42,0,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,21,3a1,1,0,0,0-.29-.71l-.15-.12a.76.76,0,0,0-.18-.09,1,1,0,0,0-1.09.21A1,1,0,0,0,19,3a1,1,0,0,0,.08.38A1.15,1.15,0,0,0,19.29,3.71ZM20,5a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V6A1,1,0,0,0,20,5Zm.06,8a1,1,0,0,0-1.11.87A7,7,0,0,1,12,20H6.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,12,6a6.91,6.91,0,0,1,3.49.94,1,1,0,0,0,1-1.72A8.84,8.84,0,0,0,12,4,9,9,0,0,0,5,18.62L3.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,4,22h8a9,9,0,0,0,8.93-7.88A1,1,0,0,0,20.06,13Z"/></svg>
                                </div>
                                <div class="mx-2 text-lg">
                                    Tengo una sugerencia
                                </div>
                            </div>
                            <div class="mt-2">
                                Comparte una idea o mejora.
                            </div>
                        </div>
                        <div :class="{ 'h-0' : toggle != 3}" class="overflow-hidden">
                            <textarea class="mt-2 p-3 rounded-lg bg-white z-11 relative" name="message_3" cols="30" rows="4" placeholder="Escribe algo..."></textarea>
                        </div>
                    </label>
                </div>

                <div class="message-form" id="from-general__status"></div>

                <div class="w-full">
                    <button class="btn--primary" @clik="reset()">
                        {{ __('ENVIAR') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <style>
        [name="form-valoracion"] input:checked ~ div {
            display: block;
        }
    </style>
@endpush

@push('scripts-head')
    <script>
        const items = () => {
            return {
                toggle: '',
                init () {
                    console.log('init')
                    this.$watch('toggle', () => {
                        switch (this.toggle) {
                            case '1':
                                document.querySelector('[name="message_2"]').value = null;
                                document.querySelector('[name="message_3"]').value = null;
                                break;

                            case '2':
                                document.querySelector('[name="message_1"]').value = null;
                                document.querySelector('[name="message_3"]').value = null;
                                break;

                            case '3':
                                document.querySelector('[name="message_1"]').value = null;
                                document.querySelector('[name="message_2"]').value = null;
                                break;

                            default:
                                break;
                        }
                    })
                },
                reset () {
                    this.toggle = ''
                },
            }
        }
    </script>
@endpush

@push('scripts')
    <script>
        (function() {
             const constraints = {
                 message_1: {
                     presence: function(value, attribute, validatorOptions, attributes, globalOptions) {
                         if (attribute['option'] == '1' && attribute['message'] == null) {
                             return '^Campo obligatorio';
                         }
                         return false;
                     },
                     length: {
                         minimum: 3,
                         message: 'El mensaje es demasiado corto (mínimo 3 caracteres)'
                     }
                 },
                 message_2: {
                     presence: function(value, attribute, validatorOptions, attributes, globalOptions) {
                         if (attribute['option'] == '2' && attribute['message'] == null) {
                             return '^Campo obligatorio';
                         }
                         return false;
                     },
                     length: {
                         minimum: 3,
                         message: 'El mensaje es demasiado corto (mínimo 3 caracteres)'
                     }
                 },
                 message_3: {
                     presence: function(value, attribute, validatorOptions, attributes, globalOptions) {
                         if (attribute['option'] == '3' && attribute['message'] == null) {
                             return '^Campo obligatorio';
                         }
                         return false;
                     },
                     length: {
                         minimum: 3,
                         message: 'El mensaje es demasiado corto (mínimo 3 caracteres)'
                     }
                 },
                 option: {
                     presence: {
                         message: '^Campo obligatorio',
                     }
                 },
             };

             const form = document.querySelector('form[name="form-valoracion"]');

             form.addEventListener("submit", function(ev) {
                 ev.preventDefault();
                 handleFormSubmit(form, ajaxForm, constraints);
             });

             // Hook up the inputs to validate on the fly
             var inputs = form.querySelectorAll('input, textarea, select');
             for (var i = 0; i < inputs.length; ++i) {
                 inputs.item(i).addEventListener("change", function(ev) {
                     var errors = validate(form, constraints) || {};
                     showErrorsForInput(this, errors[this.name])
                 });
             }
        })();
    </script>
@endpush
