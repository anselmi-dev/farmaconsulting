<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class PreventLandingInstall
{
    /**
     *
     * @var string
     */
    protected $browser = 'Safari';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        $agent = new Agent();
        
        if (str_contains($request->getRequestUri(), 'safari')) {
            if ($agent->browser() == $this->browser)
                return $next($request);

            return redirect(route('landingChrome'));
        } else {
            if ($agent->browser() != $this->browser)
                return $next($request);

            return redirect(route('landingSafari'));
        }
    }
}
