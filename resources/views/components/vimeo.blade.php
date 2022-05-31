@if (!is_null($src))
    <div id="vimeo-screen-{{ $key }}">
        <div id="div-screen-{{ $key }}" class="div-screen w-full mx-auto">
            @if(isset($title) && !is_null($title))
                <div class="div-screen-title text-2xl md:text-4xl text-center text-white text-white mt-10 mb-1">
                    {{ $title }}
                </div>
            @endif
            <div class="max-w-7xl mx-auto px-4 sm:px-6 pb-10">
                <div class="relative" style="padding:56.25% 0 0 0;">
                    <div id="playbtn-{{ $key }}" class="absolute flex items-center justify-center w-full h-full cursor-pointer top-0 left-0 m-auto z-10">
                        <img id="playbtn-icon-{{ $key }}" src="{{ asset('images/pay.png') }}" class="max-w-full max-h-full w-10 md:w-20">
                    </div>
                    <div id="fullscreenbtn-{{ $key }}" class="absolute flex items-center justify-center cursor-pointer bottom-2 left-2 m-auto bg-opacity-25 bg-gray-100 rounded-sm p-1" style="z-index: 11">
                        <svg class="fullscreenbtn_expand max-w-full max-h-full w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9.29,13.29,4,18.59V17a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,3,22H7a1,1,0,0,0,0-2H5.41l5.3-5.29a1,1,0,0,0-1.42-1.42ZM5.41,4H7A1,1,0,0,0,7,2H3a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,2,3V7A1,1,0,0,0,4,7V5.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM21,16a1,1,0,0,0-1,1v1.59l-5.29-5.3a1,1,0,0,0-1.42,1.42L18.59,20H17a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,21V17A1,1,0,0,0,21,16Zm.92-13.38a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H17a1,1,0,0,0,0,2h1.59l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V7a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/>
                        </svg>
                        <svg class="fullscreenbtn_compress max-w-full max-h-full w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M10.38,13.08A1,1,0,0,0,10,13H6a1,1,0,0,0,0,2H7.59l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L9,16.41V18a1,1,0,0,0,2,0V14a1,1,0,0,0-.08-.38A1,1,0,0,0,10.38,13.08ZM10,5A1,1,0,0,0,9,6V7.59L3.71,2.29A1,1,0,0,0,2.29,3.71L7.59,9H6a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,11,10V6A1,1,0,0,0,10,5Zm3.62,5.92A1,1,0,0,0,14,11h4a1,1,0,0,0,0-2H16.41l5.3-5.29a1,1,0,1,0-1.42-1.42L15,7.59V6a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38A1,1,0,0,0,13.62,10.92ZM16.41,15H18a1,1,0,0,0,0-2H14a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,13,14v4a1,1,0,0,0,2,0V16.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/>
                        </svg>
                    </div>
                    <iframe id="video-player-{{ $key }}"
                        class="top-0 absolute left-0 w-full h-full bg-gray-800"
                        src="{{ $src }}"
                        videoframeborder="0"
                        allow="autoplay; fullscreen; picture-in-picture"
                        frameborder="0"
                        webkitallowfullscreen
                        mozallowfullscreen
                        allowfullscreen
                        allow="autoplay">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endif

@push('scripts')
    <script>
        const playbtnIcon{{ $key }} = document.getElementById('playbtn-icon-{{ $key }}');
        const playbtn{{ $key }} = document.getElementById('playbtn-{{ $key }}');
        const player{{ $key }} = document.getElementById('video-player-{{ $key }}');
        const bottonScreen{{ $key }} = document.getElementById('fullscreenbtn-{{ $key }}');
        const vimeoPlayer{{ $key }} = new Vimeo.Player(player{{ $key }});
        playbtn{{ $key }}.onclick = function() {
            if (playbtnIcon{{ $key }}.style.display == 'none') {
                playbtnIcon{{ $key }}.style.display = "block";
                bottonScreen{{ $key }}.style.display = "block";
                vimeoPlayer{{ $key }}.pause();
            }
            else {
                playbtnIcon{{ $key }}.style.display = "none";
                vimeoPlayer{{ $key }}.play();
                if (bottonScreen) {
                    bottonScreen{{ $key }}.style.display = "none";
                }
            }
        }
        vimeoPlayer{{ $key }}.on('pause', function() {
            playbtnIcon{{ $key }}.style.display = "block";
        });
        vimeoPlayer{{ $key }}.on('play', function() {
            playbtnIcon{{ $key }}.style.display = "none";
        });

        if (bottonScreen{{ $key }}) {
            bottonScreen{{ $key }}.addEventListener("click", function () {
                document.getElementById('vimeo-screen-{{ $key }}').classList.toggle('fullscreen');
            })
        }
    </script>
@endpush
