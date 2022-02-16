<form  action="{{ route('update-preferences') }}" method="POST" id="form-preferences" class="options__preferences">
    @csrf
    <input type="hidden" name="inversor" value="{{ auth()->user()->inversor }}">
    <div class="margin-bottom--medium">
        <div class="options__description">
            <h2 class="typography--green">{{ __('Si estás interesado en comprar farmacia, detalla aquí tus preferencias') }}</h2>
        </div>
        {{-- <div class="line-row margin-bottom--2xsmall">
            <div class="options__item">
                <label class="custom-radio-btn__container">
                    {{ __('Sí') }}
                    <input type="radio" name="inversor" disabled value="1" {{ auth()->user()->inversor ? 'checked' : NULL }}>
                    <span class="custom-radio-btn__item"></span>
                </label>
            </div>
            <div class="options__item ml-3">
                <label class="custom-radio-btn__container">
                    {{ __('No') }}
                    <input type="radio" name="inversor" disabled value="0" {{ auth()->user()->inversor ? : 'checked' }}>
                    <span class="custom-radio-btn__item"></span>
                </label>
            </div>
        </div> --}}
        <div class="options__item">
            <div class="margin-bottom--2xsmall">
                <p class="typography--small">
                    {{ __('Provincias de mi interés') }}
                </p>
            </div>
            <div>
                <div class="custom-select__container">
                    <div class="line-row-between gap-2">
                        <div class="custom-select__subtitle">
                            <p class="typography--dark-green leading-none">
                                {{ __('Preferencia de provincias') }}
                                <span id="fc_provincias_count" class="text-xs text-gray-400 inline-block"></span>
                            </p>
                        </div>
                        <div class="custom-select__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.012"
                                height="8.25" viewBox="0 0 14.012 8.25">
                                <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                    transform="translate(253.099 -245.085) rotate(90)"
                                    fill="none" stroke="#e8e8e8" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="custom-select__options-container pt-0">
                    <div class="custom-select__options-subtitle">
                        <p class="typography--small custom-select__label" id="fc_provincias" default="{{ __('Selecciona las provincias que te interesen') }}">
                            {{ __('Selecciona las provincias que te interesen') }}
                        </p>
                    </div>
                    <ul>
                        @php
                            $old_provincias = auth()->user()->provincias;
                        @endphp
                        @foreach (\App\Models\Province::all() as $province)
                            <li>
                                <label class="custom-select__option" for="fc_provincias_{{ $province->id }}">
                                    <span class="uppercase">
                                        {{ $province->name }}
                                    </span>
                                    <input
                                        type="checkbox"
                                        name="fc_provincias[]"
                                        id="fc_provincias_{{ $province->id }}"
                                        value="{{ $province->id }}"
                                        label="{{ $province->name }}"
                                        {{ in_array($province->id, $old_provincias) ? 'checked' : NULL }}
                                        class="custom-select__option-input">
                                    <span class="custom-select__option-check">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12.362"
                                            height="8.25" viewBox="0 0 12.362 8.25">
                                            <path d="M248.916,250.037l3.419-3.945L246.5,240.5"
                                            transform="translate(251.448 -245.085) rotate(90)"
                                            fill="none" stroke="#a2bd30"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"></path>
                                        </svg>
                                    </span>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="options__item">
            <div class="margin-bottom--2xsmall">
                <p class="typography--small">
                    {{ __('Preferencia de facturación') }}
                </p>
            </div>
            <div class="custom-select__selected">
                <span class="typography--green"></span>
            </div>
            <div>
                <div class="custom-select__container">
                    <div class="line-row-between">
                        <div class="custom-select__subtitle">
                            <p class="typography--dark-green leading-none">
                                Tramos de facturación
                                <span id="fc_facturacion_count" class="text-xs text-gray-400 inline-block"></span>
                            </p>
                        </div>
                        <div class="custom-select__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.012"
                                height="8.25" viewBox="0 0 14.012 8.25">
                                <path d="M246.5,251.685l5.836-5.592L246.5,240.5"
                                    transform="translate(253.099 -245.085) rotate(90)"
                                    fill="none" stroke="#e8e8e8" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="custom-select__options-container">
                    <div class="custom-select__options-subtitle">
                        <p class="typography--small custom-select__label" id="fc_facturacion" default="{{ __('Selecciona los tramos') }}">
                            {{ __('Selecciona los tramos') }}
                        </p>
                    </div>
                    @php
                        $facturacions = [
                            'A' => 'hasta 150.00 €',
                            'B' => '150.000 a 300.000 €',
                            'C' => '300.000 a 500.000 €',
                            'D' => '500.000 a 700.000 €',
                            'E' => '700.000 a 1.000.000 €',
                            'F' => '1.000.000 a 1.500.000 €',
                            'G' => '1.500.000 a 2.000.000 €',
                            'H' => 'más de 2.000.000 €'
                        ];
                        $old_facturacions = auth()->user()->fc_facturacion;
                    @endphp
                    <ul>
                        @foreach ($facturacions as $key => $factura)
                            <li>
                                <label for="fc_facturacion_{{ $key }}" class="custom-select__option">
                                    <span class="uppercase">{{ $factura }}</span>
                                    <input
                                        type="checkbox"
                                        name="fc_facturacion[]"
                                        id="fc_facturacion_{{ $key }}"
                                        value="{{ $key }}"
                                        label="{{ $factura }}"
                                        {{ strpos($old_facturacions, $key) ? 'checked' : NULL }}
                                        class="custom-select__option-input">
                                    <span class="custom-select__option-check">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12.362"
                                        height="8.25" viewBox="0 0 12.362 8.25">
                                            <path d="M248.916,250.037l3.419-3.945L246.5,240.5"
                                            transform="translate(251.448 -245.085) rotate(90)"
                                                fill="none" stroke="#a2bd30"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"></path>
                                        </svg>
                                    </span>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div id="status-preferences" class="message-form"></div>
        <div class="margin-bottom--medium">
            <button class="options__save-btn">GUARDAR CAMBIOS</button>
        </div>
    </div>
</form>

@push('scripts')
    <script>
        window.addEventListener("DOMContentLoaded", function () {
            // get the form elements defined in your form HTML above

            var form = document.getElementById("form-preferences");

            // Success and Error functions for after the form is submitted
            function success(response, responseType) {
                try {
                    const parse = JSON.parse(response);
                } catch (error) {
                    console.error(error);
                }
                form.classList.remove('loading');
                showNotification("Preferencias actualizadas");
            }

            function error() {
                form.classList.remove('loading')
                showNotification("¡UPS! Hay un problema.", 'error');
            }

            // handle the form submission event
            form.addEventListener("submit", function (ev) {
                ev.preventDefault();
                var data = new FormData(form);
                form.classList.add('loading');
                ajax(form.method, form.action, data, success, error);
            });
        });

        // helper function for sending an AJAX request
        function ajax(method, url, data, success, error) {
            var xhr = new XMLHttpRequest();
            xhr.open(method, url);
            xhr.setRequestHeader("Accept", "application/json");
            xhr.onreadystatechange = function () {
                if (xhr.readyState !== XMLHttpRequest.DONE)
                    return;
                if (xhr.status === 200) {
                    success(xhr.response, xhr.responseText);
                } else {
                    error(xhr.status, xhr.response, xhr.responseType);
                }
            };
            xhr.send(data);
        }

        selectorChangeLabel ('fc_facturacion', 'fc_facturacion[]');
        selectorChangeLabel ('fc_provincias', 'fc_provincias[]');
    </script>
@endpush
