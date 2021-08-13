<button data-micromodal-trigger="modal-account" class="bg-gray-600 absolute top-5 right-5 z-10 rounded-full" style="width: 50px">
    <svg class="w-50" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
        <path fill="#6563ff"
            d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z" />
    </svg>
</button>

<div class="modal modal--full micromodal-slide" id="modal-account" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container bg-gray-200" role="dialog" aria-modal="true" aria-labelledby="modal-account-title">
          <header class="modal__header">
              <div class="w-full grid grid-cols-1 items-center justify-center gap-4">
                <div class="w-full relative text-center uppercase flex flex-wrap justify-center">
                    <button class="modal__close absolute top-0 left-0" aria-label="Close modal" data-micromodal-close></button>
                    <span>{{ __('Mi perfil') }}</span>
                </div>
                <svg class="w-20 mx-auto" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                    <path fill="#6563ff"
                        d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z" />
                </svg>
                {{-- <span class="text-center">{{ Auth::user()->full_name }}</span> --}}
            </div>
        </header>

        <main class="modal__content" id="modal-account-content">
            <ul>
                <li class="mb-5">
                    <a href="" class="relative p-3 block bg-white hover:bg-gray-100 rounded uppercase">{{ __('Mis datos') }}</a>
                </li>
                <li class="mb-5">
                    <a href="" class="relative p-3 block bg-white hover:bg-gray-100 rounded uppercase">{{ __('Mi farmacia') }}</a>
                </li>
                <li class="mb-5">
                    <a href="" class="relative p-3 block bg-white hover:bg-gray-100 rounded uppercase">{{ __('Mi asesor') }}</a>
                </li>
                <li class="mb-5">
                    <a href="" class="relative p-3 block bg-white hover:bg-gray-100 rounded uppercase">{{ __('Mi código de catálogo') }}</a>
                </li>
                <li class="mb-5">
                    <a href="" class="relative p-3 block bg-white hover:bg-gray-100 rounded uppercase">{{ __("FAQS") }}</a>
                </li>
            </ul>
        </main>

        <footer class="modal__footer">
            <div class="text-center mt-10">
                <div>
                    Farmaconsulting App Versión 0.1
                </div>
                <a href="{{ route('terms') }}">{{__('Terminos')}}</a> y <a href="{{ route('conditions') }}">{{__('Condificones') }}</a>
            </div>
        </footer>
      </div>
    </div>
  </div>
