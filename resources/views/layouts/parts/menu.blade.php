<div class="menu">
    <div class="menu__content">
        <div class="menu__blink {{ request()->routeIs('farmaconsulting*') ? 'active' : 'opacity-50' }}">
            <a href="{{route('farmaconsulting')}}" class="py-0 px-2 block" title="{{ __('Farmaconsulting') }}">
                {{-- <svg  height="35" xmlns="http://www.w3.org/2000/svg" width="31.099" height="31.085" viewBox="0 0 31.099 31.085">
                    <g transform="translate(1 1)">
                      <path d="M-250.654,31.684l-2.7,2.57h-9.12l8.588-15.844-11.13,5.144V8.285l10.267,3.458h9.8l-4.106,20.665" transform="translate(265.02 -5.169)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"></path>
                      <path d="M-240.68,11.743l10.289-3.458V23.554l-11.128-5.144,8.586,15.844h-9.119l-2.7-2.57" transform="translate(259.49 -5.169)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"></path>
                      <path d="M-242.206,8.573a4.574,4.574,0,0,1-4.575,4.574,4.572,4.572,0,0,1-4.573-4.574A4.572,4.572,0,0,1-246.781,4,4.574,4.574,0,0,1-242.206,8.573Z" transform="translate(261.291 -4)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill-rule="evenodd"></path>
                    </g>
                </svg> --}}
                <svg class="max-w-full mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.1 31.08">
                  <defs>
                    <style>.cls-farmaconsulting{stroke:#405921;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;fill-rule:evenodd;}</style>
                  </defs>
                  <path class="cls-farmaconsulting" d="M19.7,14.6L19,14.2l0.6,1l8,14.8h-9.1l-2.4-2.2l-0.7-0.3L12.7,30H3.5l8.6-15.8L1,19.4V4.1l10.3,3.5h0.1
                  c0.8,1.6,2.3,2.6,4.1,2.6l0,0c1.7,0,3.3-1,4.1-2.6h0.2l10.3-3.5v15.3L19.7,14.6z"/>
              <path class="cls-farmaconsulting" d="M20.1,5.6c0,0.7-0.2,1.4-0.5,2c-0.8,1.6-2.4,2.6-4.1,2.6l0,0c-1.8,0-3.4-1-4.1-2.6c-0.3-0.6-0.5-1.3-0.5-2
                  C10.9,3,13,1,15.5,1S20.1,3,20.1,5.6z"/>
                </svg>
                <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{ __('Farmaconsulting') }}</span>
            </a>
        </div>
        <div class="menu__blink {{ request()->routeIs('news*') ? 'active' : 'opacity-50' }}">
            <a href="{{ route('news') }}" class="py-0 px-2 block" title="{{__('Noticias')}}">
                <svg class="max-w-full mx-auto" height="35" xmlns="http://www.w3.org/2000/svg" width="31.085" height="31.085" viewBox="0 0 31.085 31.085">
                    <g transform="translate(1 1)">
                      <path d="M-119.4,29.666V5.283A1.282,1.282,0,0,1-118.119,4h19.247a1.282,1.282,0,0,1,1.283,1.283V29.666c0,2.126-1.309,3.224-3.849,3.418H-120.47" transform="translate(126.672 -4)" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <path d="M-125.364,37.9h-.428c-.63,0-3.208-.608-3.208-2.776V22.933a1.283,1.283,0,0,1,1.284-1.283h5.987V35.125C-121.729,36.9-123.183,37.9-125.364,37.9Z" transform="translate(129 -8.816)" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <line x1="6.632" transform="translate(3.636 29.085)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      <line x2="11.549" transform="translate(12.445 5.134)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      <line x2="11.549" transform="translate(12.445 10.266)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      <line x2="11.549" transform="translate(12.543 15.255)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                    </g>
                </svg>
                <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{__('Noticias')}}</span>
            </a>
        </div>
        <div class="menu__blink {{ request()->is('/') ? 'active' : 'opacity-50' }}">
            <a href="{{ route('home') }}" class="py-0 px-1 block" title="{{__('Escaner QR')}}">
                <svg class="max-w-full mx-auto" height="35" xmlns="http://www.w3.org/2000/svg" width="40.204" height="40.204" viewBox="0 0 40.204 40.204">
                    <g transform="translate(1 1)">
                      <rect width="14" height="13" transform="translate(20.33 20.537)" fill="#a2bd30"></rect>
                      <rect width="12.313" height="12.348" transform="translate(4.855 4.854)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                      <rect width="4.691" height="6.649" transform="translate(8.654 7.703)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                      <rect width="12.313" height="12.348" transform="translate(4.855 21.001)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                      <rect width="4.691" height="6.649" transform="translate(8.654 23.851)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                      <rect width="12.313" height="12.348" transform="translate(21.002 4.854)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                      <rect width="4.691" height="6.649" transform="translate(24.801 7.703)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                      <path d="M-176.009,26h5.707v4.8" transform="translate(197.002 -4.999)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <path d="M-162.759,30.733H-166V25.688" transform="translate(196.5 -4.983)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <path d="M-169.8,38.534H-176l-.008-.326V29.715" transform="translate(197.002 -5.185)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <path d="M-163.278,38.534v-3.72H-170v-5.1" transform="translate(196.701 -5.185)" fill="#a2bd30" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <g transform="translate(34.3 0.04)">
                        <line y2="3.825" transform="translate(3.904)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                        <line x1="3.823" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      </g>
                      <g transform="translate(0.081 0)">
                        <line x2="3.824" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                        <line y2="3.823" transform="translate(0 0.081)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      </g>
                      <g transform="translate(0 34.34)">
                        <line y1="3.825" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                        <line x2="3.823" transform="translate(0.082 3.825)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      </g>
                      <g transform="translate(34.3 34.299)">
                        <line x1="3.824" transform="translate(0 3.905)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                        <line y1="3.825" transform="translate(3.824)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      </g>
                    </g>
                </svg>
                <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{ __('Escaner QR') }}</span>
            </a>
        </div>
        <div class="menu__blink {{ request()->routeIs('consulting*') ? 'active' : 'opacity-50' }}">
            <a href="{{ route('consulting') }}" class="py-0 px-2 block" title="{{ __('Farmaconsulting responde') }}">
                <svg class="max-w-full mx-auto" height="35" xmlns="http://www.w3.org/2000/svg" width="31.368" height="31.187" viewBox="0 0 31.368 31.187">
                    <g transform="translate(-1.599 -1.574)">
                      <path d="M10.579,19.152a7.64,7.64,0,0,1-2.811-1L4,19.231,5.2,15.65a7.562,7.562,0,0,1-1.2-4.1,7.686,7.686,0,0,1,15.149-1.84C19.973,13.061,10.579,19.152,10.579,19.152Z" transform="translate(-1.401 -1.285)" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <path d="M30.151,33.783l5.626,1.605-1.784-5.346a11.294,11.294,0,0,0,1.784-6.126,11.482,11.482,0,1,0-5.626,9.867Z" transform="translate(-3.811 -3.627)" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <line x1="10.974" transform="translate(15.006 17.219)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      <line x1="10.974" transform="translate(15.006 20.939)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      <line x1="10.974" transform="translate(15.006 24.49)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                      <path d="M11.42,9.512a2.062,2.062,0,1,1,1.869,2.936V13" transform="translate(-3.426 -2.503)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <line y2="0.598" transform="translate(9.776 12.45)" fill="none" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                    </g>
                </svg>
                <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{ __('Farmaconsulting responde') }}</span>
            </a>
        </div>
        <div class="menu__blink {{ request()->routeIs('contact*') ? 'active' : 'opacity-50' }}">
            <a href="{{ route('contact') }}" class="py-0 px-2 block" title="{{  __('Contacto') }}">
                <svg class="max-w-full mx-auto" height="35" xmlns="http://www.w3.org/2000/svg" width="31.221" height="31.221" viewBox="0 0 31.221 31.221">
                    <g transform="translate(-1.602 -1.677)">
                      <path d="M88,17.359a4,4,0,0,1-4.363,3.813A4.092,4.092,0,0,1,80,17.161V16.026a4.092,4.092,0,0,1,3.636-4.011A4,4,0,0,1,88,15.826Z" transform="translate(-69.99 -3.506)" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.972"></path>
                      <path d="M98.772,12.792,95,14.907l2.189-3.656a4.648,4.648,0,0,1-.734-2.525,4.728,4.728,0,1,1,2.317,4.065Z" transform="translate(-74.083 -1.323)" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                      <path d="M92.522,39.634c0-.122.018-.241.018-.364A11.27,11.27,0,1,0,70,39.27c0,.123.014.241.018.364Z" transform="translate(-67.261 -7.872)" stroke="#405921" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.273"></path>
                    </g>
                </svg>
                <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{  __('Contacto') }}</span>
            </a>
        </div>
    </div>
</div>
