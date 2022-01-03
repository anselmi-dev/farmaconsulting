<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiFarmaconsulting;
use Illuminate\Support\Facades\Mail;

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

    public function valoracionPost (Request $request)
    {
        $user = \Auth::user();
        
        $opinion = \App\Models\Opinion::create([
            'name' => $user->name,
            'email' => $user->email,
            'option' => $request->option,
            'message' => $request->message,
        ]);

        Mail::to('carlosanselmi2@gmail.com')->send(new \App\Mail\VarolacionMail($opinion));

        return response()->json(['success' => true, 'message' => 'Gracias por tu opinión']);
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
