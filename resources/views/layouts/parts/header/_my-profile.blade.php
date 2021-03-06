<div class="w-full grid grid-cols-1 items-center justify-center gap-2 lg:gap-1">
    <div class="w-full relative text-center uppercase flex flex-wrap justify-center text-2xl lg:text-lg mt-5">
        <span>{{ __('Mi perfil') }}</span>
    </div>
    <svg class="w-20 mx-auto" xmlns="http://www.w3.org/2000/svg" width="63" height="64" viewBox="0 0 63 64">
        <g transform="translate(-0.14 0.407)">
            <path d="M27.644,0A27.644,27.644,0,1,1,0,27.644,27.644,27.644,0,0,1,27.644,0Z" transform="translate(3.785 3.949)" fill="#a2bd30" stroke="#a2bd30" stroke-linecap="round" stroke-width="2"></path>
            <path d="M32.98,18.7a7.232,7.232,0,0,1-7.9,6.9A7.408,7.408,0,0,1,18.5,18.344V16.289a7.408,7.408,0,0,1,6.582-7.262,7.234,7.234,0,0,1,7.9,6.9Z" transform="translate(5.688 2.847)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            <path d="M48.973,42.072a20.407,20.407,0,0,0-40.269.02" transform="translate(2.589 7.909)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.273"></path>
            <rect width="63" height="64" transform="translate(0.14 -0.407)" fill="none"></rect>
        </g>
    </svg>
    <span id="full-name-profile" class="text-center">{{ auth()->user()->full_name }}</span>
    <div class="w-full text-center text-gray-600 text-sm mb-5">
        <a href="{{ route('logout') }}">Cerrar sesión</a>
    </div>
</div>
