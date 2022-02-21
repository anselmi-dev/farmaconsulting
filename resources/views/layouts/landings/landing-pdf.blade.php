@extends('layouts.app')

@section('breadcrumbs')
    <a href="{{ route('home') }}" class="text-primary">Escaner</a>/
    <span class="inline-block">Informe de la demanda</span>
@endsection

@section('content')
    <div>
        <div class="max-w-xl px-3 md:px-10 md:py-10 space-y-10 mx-auto">
            <div class="text-center">
                <div class="margin-bottom--xlarge">
                    <h2 class="typography--green">Informe de la demanda de farmacia en España</h2>
                </div>
            </div>
            <div>
                <div class="space-y-10">
                    <div class="flex items-center gap-2 lg:gap-10">
                        <div class="w-7/12">
                            <div class="max-w-sm mx-auto">
                                <a href="{{ asset('files/Informe_Demanda_Farmacia_EspanÞa_FCT_2021.pdf') }}"
                                    download="Informe_Demanda_Farmacia_EspanÞa_FCT_2021.pdf"
                                    class="btn--primary flex px-5 text-base text-center items-center justify-center">
                                    <span>{{ __('DESCARGAR EL INFORME') }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="w-5/12">
                            <img src="{{ asset('images/MOCK UP PORTADA INFORME DEMANDA.png') }}" class="max-w-full mx-auto">
                        </div>
                    </div>
                    <div>
                        <div class="text-center">
                            <p>
                                Y si quieres un Informe Personalizado de la Demanda de tu farmacia IPD®, te lo podemos presentar personalmente sin ningún compromiso
                            </p>
                        </div>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('IPD') }}" name="form-IPD" class="line-col-center callback-form">
                            @csrf
                            <button class="btn--primary px-5">
                                {{ __('Quiero un informe personalizado IPD') }}<small>®</small>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <div class="text-center">
                    <p>
                        ¿Quieres conocer un breve resumen del estado de la demanda en tu comunidad autónoma? Nuestros expertos te lo presentan en estos vídeos.
                    </p>
                </div>
            </div>
            <div>
                @foreach ($videos as  $key => $video)
                    @php
                        $title = isset($video['title']) ? $video['title'] : null;
                    @endphp
                    @component('components.vimeo', ['src' => $video['vimeo'], 'key' => $key, 'title' => $title])
                    @endcomponent
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        (function() {
            const form = document.querySelector('form[name="form-IPD"]');

            form.addEventListener("submit", function(ev) {
                ev.preventDefault();
                handleFormSubmit(form, ajaxForm, {});
            });

            // Hook up the inputs to validate on the fly
            var inputs = form.querySelectorAll('input, textarea, select');
            for (var i = 0; i < inputs.length; ++i) {
                inputs.item(i).addEventListener("change", function(ev) {
                    var errors = validate(form, {}) || {};
                    showErrorsForInput(this, errors[this.name])
                });
            }
        })();
    </script>
@endpush