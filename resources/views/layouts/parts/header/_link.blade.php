<a href="{{ $href ?? '#' }}" class="nav__link">
    <span class="icon">
        @includeIf($icon)
    </span>
    <span class="label">
        {{ $label ?? NULL }}
    </span>
    <svg xmlns="http://www.w3.org/2000/svg" width="14.012" height="8.25" viewBox="0 0 14.012 8.25">
        <path d="M246.5,251.685l5.836-5.592L246.5,240.5" transform="translate(253.099 -245.085) rotate(90)" fill="none" stroke="#a2bd30" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
    </svg>
</a>
