<form name="form-password" action="{{ route('update-password') }}" method="POST" id="form-password" class="options__password">
    @csrf
    <div class="margin-bottom--medium">
        <div class="options__description">
            <p>Si lo deseas puedes cambiar la contraseña proporcionada por la que tu
                consideres y cuando tu quieras.</p>
            {{-- <div class="w-full text-center mt-2">
                <a href="" class="text-primary font-bold border p-2 rounded border-primary">Solicitar nueva contraseña</a>
            </div> --}}
        </div>

        <div >
            <div class="options__item">
                <label for="actual_password">CONTRASEÑA ACTUAL</label>
                <div class="options__input-container form-group form-group--bottom">
                    <input class="options__input" type="password" name="actual_password"
                        placeholder="*********">
                    <button class="options__close-btn" type="button">
                        <svg class="icon-xsmall mx-auto" xmlns="http://www.w3.org/2000/svg"
                            width="19.092" height="19.092" viewBox="0 0 19.092 19.092">
                            <g transform="translate(-950.954 -1943.454)">
                                <line x1="23"
                                    transform="translate(952.368 1944.868) rotate(45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="23"
                                    transform="translate(952.368 1961.132) rotate(-45)"
                                    fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></line>
                            </g>
                        </svg>
                    </button>
                    <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                </div>
                <div class="options__sub-label p-0">
                </div>
            </div>
            <div class="options__item">
                <label for="new_password">NUEVA CONTRASEÑA</label>
                <div class="line-row-between">
                    <div class="options__input-container form-group form-group--bottom">
                        <input class="options__input" type="password" name="new_password" placeholder="*********">
                        <button class="options__close-btn" type="button">
                            <svg class="icon-xsmall mx-auto"
                                xmlns="http://www.w3.org/2000/svg" width="19.092"
                                height="19.092" viewBox="0 0 19.092 19.092">
                                <g transform="translate(-950.954 -1943.454)">
                                    <line x1="23"
                                        transform="translate(952.368 1944.868) rotate(45)"
                                        fill="none" stroke="#ffffff" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"></line>
                                    <line x1="23"
                                        transform="translate(952.368 1961.132) rotate(-45)"
                                        fill="none" stroke="#ffffff" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"></line>
                                </g>
                            </svg>
                        </button>
                        <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                    </div>
                </div>
                <div class="options__sub-label">
                    <p class="typography--small">Tu nueva contraseña debe tener: X o más
                        caracteres, mayúsculas, minúsculas, letras y números.</p>
                </div>
            </div>
            <div class="options__item">
                <label for="repeat_password">REPITE TU NUEVA CONTRASEÑA</label>
                <div class="line-row-between">
                    <div class="options__input-container form-group form-group--bottom">
                        <input class="repeat-password" type="password" name="repeat_password" placeholder="*********">
                        <button class="options__close-btn" type="button">
                            <svg class="icon-xsmall mx-auto"
                                xmlns="http://www.w3.org/2000/svg" width="19.092"
                                height="19.092" viewBox="0 0 19.092 19.092">
                                <g transform="translate(-950.954 -1943.454)">
                                    <line x1="23"
                                        transform="translate(952.368 1944.868) rotate(45)"
                                        fill="none" stroke="#ffffff" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"></line>
                                    <line x1="23"
                                        transform="translate(952.368 1961.132) rotate(-45)"
                                        fill="none" stroke="#ffffff" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"></line>
                                </g>
                            </svg>
                        </button>
                        <p class="typography--small form-group-messages text-red-600 pl-5"></p>
                    </div>
                </div>
                <div class="options__sub-label">
                    <p class="typography--small">Tu nueva contraseña debe tener: X o más
                        caracteres, mayúsculas, minúsculas, letras y números.</p>
                </div>
            </div>
        </div>
        <div id="status-password" class="message-form"></div>
        <div class="margin-bottom--medium">
            <button class="options__save-btn">GUARDAR CAMBIOS</button>
        </div>
    </div>
</form>

@push('scripts')
    <script>
        (function() {
            const constraints = {
                actual_password: {
                    presence: {
                        message: '^Campo obligatorio',
                    }
                },
                new_password: {
                    presence: {
                        message: '^Campo obligatorio',
                    },
                },
                repeat_password: {
                    presence: {
                        message: '^Campo obligatorio',
                    },
                }
            };
            const form = document.querySelector('form[name="form-password"]');

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
