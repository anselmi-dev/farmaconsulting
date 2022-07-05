<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiFarmaconsulting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\Landing;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function valoracion ()
    {
        return view('pages.valoracion-y-sugerencias');
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
            $this->RegistraEvento(auth()->user()->email, $landing);
        } catch (\Throwable $th) {
            logger('Error RegistraEvento ' . auth()->user()->email  . ':QR' .  $landing);
        }

        $model_landing = Landing::where('qr', $landing)->where('active', true)->first();

        if ($model_landing) {
            if ($model_landing->redirect)
                return redirect()->route($model_landing->redirect_url);

            return view('pages.landings.nova', ['landing' => $model_landing]);
        }

        $view = 'pages.landings.'.$landing;

        if (view()->exists($view)) {
            return view($view);
        }

        abort(404);
    }

    /**
     * Muestra todas las landings creada en el directorio /resources/views/pages/landings
     *
     * @return view
     */
    public function landings ()
    {
        $views = Storage::disk('views')->allFiles('/');

        return view('pages.landings', compact('views'));
    }

    public function QRS ()
    {
        return view('pages.qrs', ['landings' => \App\Models\Landing::orderByDesc('sort_order')->get()]);
    }
}
