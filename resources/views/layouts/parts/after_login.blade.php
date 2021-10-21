<div id="welcome-modal" class="fixed flex items-center justify-center w-full h-full top-0 right-0 bg-green-600 bg-center bg-no-repeat bg-cover linear-gradient"
    style="background-image: url(/images/backgrounds/intro-slider-1.jpg); z-index: 101;">
    <div class="z-10">
        <div class="text-white text-center mb-10">
            <h1 class="mb-1">¡hola <br> {{ auth()->user()->name }}!</h1>
            <p>Te damos la bienvenida</p>
        </div>
        <button
            onclick="javascript:document.getElementById('welcome-modal').style.display = 'none'"
            class="text-white font-bold px-1 py-2 rounded-2xl bg-primary w-full hover:bg-green-600 transition duration-500 ease-in-out">
            {{ __('COMENZAR') }}
        </button>
    </div>
</div>
