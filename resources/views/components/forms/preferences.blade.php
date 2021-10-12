<form  action="{{ route('update-preferences') }}" method="POST" id="form-preferences" class="options__preferences">
    @csrf
    <div class="margin-bottom--medium">
        <div class="options__description">
            <h2 class="typography--green">{{ __('¿Estás interesado/a en comprar Farmacia?') }}</h2>
        </div>
        <div class="line-row margin-bottom--2xsmall">
            <div class="options__item">
                <label class="custom-radio-btn__container">
                    {{ __('Sí') }}
                    <input type="radio" name="preferences-option">
                    <span class="custom-radio-btn__item"></span>
                </label>
            </div>
            <div class="options__item ml-3">
                <label class="custom-radio-btn__container">
                    {{ __('No') }}
                    <input type="radio" name="preferences-option">
                    <span class="custom-radio-btn__item"></span>
                </label>
            </div>
        </div>
        <div class="options__item">
            <div class="margin-bottom--2xsmall">
                <p class="typography--xsmall">
                    {{ __('Provincias de mi interés') }}
                </p>
            </div>
            {{-- <div class="custom-select__selected">
                <span class="typography--green">
                    {{ __('A Coruña, Albacete') }}
                </span>
            </div> --}}
            <div>
                <div class="custom-select__container">
                    <div class="line-row-between">
                        <div class="custom-select__subtitle">
                            <p class="typography--dark-green">
                                {{ __('Preferencia de provincias') }}
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
                        <p class="typography--small">
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
                <p class="typography--xsmall">Preferencia de facturación</p>
            </div>
            <div class="custom-select__selected">
                <span class="typography--green">Uno, Dos</span>
            </div>
            <div>
                <div class="custom-select__container">
                    <div class="line-row-between">
                        <div class="custom-select__subtitle">
                            <p class="typography--dark-green">Tramos de facturación</p>
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
            // var button = document.getElementById("my-form-button");
            var status = document.getElementById("status-preferences");

            // Success and Error functions for after the form is submitted
            function success(response, responseType) {
                try {
                    const parse = JSON.parse(response);
                    document.getElementById('full-name-profile').innerHTML = parse.user.name + ' ' + parse.user.lastname;
                } catch (error) {
                    console.error(error);
                }
                form.classList.remove('loading');
                status.classList.add("success");
                status.innerHTML = "Datos actualizados";
            }

            function error() {
                form.classList.remove('loading');
                status.classList.add("error");
                status.innerHTML = "¡UPS! Hay un problema.";
            }

            // handle the form submission event
            form.addEventListener("submit", function (ev) {
                ev.preventDefault();
                status.innerHTML = "";
                try {
                    status.classList.remove("error");
                    status.classList.remove("success");
                } catch (error) {}
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

    </script>
@endpush
