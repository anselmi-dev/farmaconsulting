<div class="fixed w-full bottom-0 bg-white border-t border-gray-200" style="height: 90px">
    <div class="w-full grid grid-cols-5 items-center justify-center gap-4">
        <div class="text-center {{ request()->routeIs('farmaconsulting*') ? null : 'opacity-50' }}">
            <a href="{{route('farmaconsulting')}}" class="py-5 px-2 block" title="{{ __('Farmaconsulting') }}">
                <svg class="max-w-full mx-auto" width="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#6563ff" d="M8,20H5a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H8a1,1,0,0,0,0-2ZM3,9A1,1,0,0,0,4,8V5A1,1,0,0,1,5,4H8A1,1,0,0,0,8,2H5A3,3,0,0,0,2,5V8A1,1,0,0,0,3,9ZM19,2H16a1,1,0,0,0,0,2h3a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,19,2ZM16,12a1,1,0,0,0-1-1H13V9a1,1,0,0,0-2,0v2H9a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V13h2A1,1,0,0,0,16,12Zm5,3a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H16a1,1,0,0,0,0,2h3a3,3,0,0,0,3-3V16A1,1,0,0,0,21,15Z"/></svg>
            </a>
            <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{ __('Farmaconsulting') }}</span>
        </div>
        <div class="text-center {{ request()->routeIs('news*') ? null : 'opacity-50' }}">
            <a href="{{ route('news') }}" class="py-5 px-2" title="{{__('Noticias')}}">
                <svg class="max-w-full mx-auto" width="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#6563ff" d="M17,11H16a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm0,4H16a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2ZM11,9h6a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2ZM21,3H7A1,1,0,0,0,6,4V7H3A1,1,0,0,0,2,8V18a3,3,0,0,0,3,3H18a4,4,0,0,0,4-4V4A1,1,0,0,0,21,3ZM6,18a1,1,0,0,1-2,0V9H6Zm14-1a2,2,0,0,1-2,2H7.82A3,3,0,0,0,8,18V5H20Zm-9-4h1a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Zm0,4h1a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Z"/></svg>
            </a>
            <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{__('Noticias')}}</span>
        </div>
        <div class="text-center {{ request()->is('/') ? null : 'opacity-50' }}">
            <a href="{{ route('home') }}" class="py-5 px-1" title="{{__('Escaner QR')}}">
                <svg class="max-w-full mx-auto" width="50" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#6563ff" d="M8,21H4a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H8a1,1,0,0,0,0-2Zm14-6a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H16a1,1,0,0,0,0,2h4a3,3,0,0,0,3-3V16A1,1,0,0,0,22,15ZM20,1H16a1,1,0,0,0,0,2h4a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V4A3,3,0,0,0,20,1ZM2,9A1,1,0,0,0,3,8V4A1,1,0,0,1,4,3H8A1,1,0,0,0,8,1H4A3,3,0,0,0,1,4V8A1,1,0,0,0,2,9Zm8-4H6A1,1,0,0,0,5,6v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V6A1,1,0,0,0,10,5ZM9,9H7V7H9Zm5,2h4a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H14a1,1,0,0,0-1,1v4A1,1,0,0,0,14,11Zm1-4h2V9H15Zm-5,6H6a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,17H7V15H9Zm5-1a1,1,0,0,0,1-1,1,1,0,0,0,0-2H14a1,1,0,0,0-1,1v1A1,1,0,0,0,14,16Zm4-3a1,1,0,0,0-1,1v3a1,1,0,0,0,0,2h1a1,1,0,0,0,1-1V14A1,1,0,0,0,18,13Zm-4,4a1,1,0,1,0,1,1A1,1,0,0,0,14,17Z"/></svg>
            </a>
            <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{ __('Escaner QR') }}</span>
        </div>
        <div class="text-center {{ request()->routeIs('consulting*') ? null : 'opacity-50' }}">
            <a href="{{ route('consulting') }}" class="py-5 px-2" title="{{ __('Farmaconsulting responde') }}">
                <svg class="max-w-full mx-auto" width="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#6563ff" d="M17,7H7A1,1,0,0,0,7,9H17a1,1,0,0,0,0-2Zm0,4H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm2-9H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>
            </a>
            <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{ __('Farmaconsulting responde') }}</span>
        </div>
        <div class="text-center {{ request()->routeIs('contact*') ? null : 'opacity-50' }}">
            <a href="{{ route('contact') }}" class="py-5 px-2" title="{{  __('Contacto') }}">
                <svg class="max-w-full mx-auto" width="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#6563ff" d="M14.81,12.28a3.73,3.73,0,0,0,1-2.5,3.78,3.78,0,0,0-7.56,0,3.73,3.73,0,0,0,1,2.5A5.94,5.94,0,0,0,6,16.89a1,1,0,0,0,2,.22,4,4,0,0,1,7.94,0A1,1,0,0,0,17,18h.11a1,1,0,0,0,.88-1.1A5.94,5.94,0,0,0,14.81,12.28ZM12,11.56a1.78,1.78,0,1,1,1.78-1.78A1.78,1.78,0,0,1,12,11.56ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>
            </a>
            <span class="text-center w-full hidden md:block text-xs border-t border-gray-100 bg-white">{{  __('Contacto') }}</span>
        </div>
    </div>
</div>
