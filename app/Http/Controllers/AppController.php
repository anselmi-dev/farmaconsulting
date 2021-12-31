<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiFarmaconsulting;

class AppController extends Controller
{
    use ApiFarmaconsulting;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function account ()
    {
        return view('pages.account');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terms ()
    {
        return view('pages.terms');
        // return \Redirect::to('https://www.farmaconsulting.es/terminos-uso/');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact ()
    {
        return view('pages.contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function farmaconsulting ()
    {
        return view('pages.farmaconsulting');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function consulting ()
    {
        return view('pages.consulting');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function conditions ()
    {
        return \Redirect::to('https://www.farmaconsulting.es/politica-privacidad/');
        // return view('pages.conditions');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faqs ()
    {
        return view('pages.faqs');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news ()
    {
        return view('pages.news');
    }

    /**
     * Registrar el evento del QR antes de ir a la landing
     *
     * @param string $landing
     * @return Redirect
     */
    public function landingEvent ($landing)
    {
        $response = $this->RegistraEvento(\Auth::user()->email, $landing);

        return redirect()->route('landing', ['landing' => $landing]);
    }

    /**
     * Show landing QR
     *
     * @param string $landing
     * @return view
     */
    public function landing ($landing)
    {
        try {
            return view('pages.landings.'.$landing);
        } catch (\Throwable $th) {
            abort(404);
        }
    }

}
