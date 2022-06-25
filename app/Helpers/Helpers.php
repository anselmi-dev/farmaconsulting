<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Cookie;

if (!function_exists('getCookiesAuth')) {
    /**
     * @return array
     */
    function getCookiesAuth ()
    {
        return Arr::where(Cookie::get(), function ($value, $key) {
            return Str::contains($key, 'auth_attempt_');
        });
    }
}

if (!function_exists('getOpiniones')) {
    /**
     * @return array
     */
    function getOpiniones ()
    {
        return [
            1 => __('Le gusta la página'),
            2 => __('No le gusta la página'),
            3 => __('Dió una opinión'),
        ];
    }
}
