<div class="relative my-4 lg:my-0 lg:py-5">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="text-center">
            @if(isset($content->title) && !is_null($content->title))
                <h1 class="font-bold text-white">
                    <span class="block text-2xl lg:text-4xl leading-tight">
                        {{ $content->title }}
                    </span>
                </h1>
            @endif

            @if(isset($content->subtitle) && !is_null($content->subtitle))
                <div class="block w-full text-lg text-gray-100">
                    <span>{{ $content->subtitle }}</span>
                </div>
            @endif
            <hr class="my-5 block">
        </div>
    </div>
</div>
