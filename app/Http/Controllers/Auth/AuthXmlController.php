<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Traits\ApiFarmaconsulting;

use App\Models\User;

class AuthXmlController extends Controller
{
    use ApiFarmaconsulting;

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Autenticación mediante XML
     *
     * @param   Request  $request
     *
     * @return  void
     */
    public function authXml (LoginRequest $request)
    {
        $remember = (!empty( $request->remember)) ? TRUE : FALSE;

        $xml = $this->catalogoLogin($request->email, md5($request->password), $request->catalogue);

        if ($xml['Error'] == -1 || $xml['Error'] == -10) {
            return \Redirect::back()->withInput($request->all())->withErrors([$xml['Msg']]);
        }

        $user = $this->createOrUpdate($request->email, $request->password, $request->catalogue);

        \Auth::login($user, $remember);
        // \Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember);

        if ($rollback = $request->input('rollback')) {
            return \Redirect::to($rollback)->with('after_login', 'Te damos la bienvenida');
        }

        return redirect()->route('home')->with('after_login', 'Te damos la bienvenida');
    }

    protected function createOrUpdate ($email, $password, $catalogue = NULL)
    {
        $datosUsuario = $this->datosUsuario($email);

        $data = [
            'email'     =>  $datosUsuario['Email'],
            'password'  =>  \Hash::make($password),
            'name'      =>  $datosUsuario['Nombre'],
            'lastname'  =>  isset($datosUsuario['Apellido1']) ?  $datosUsuario['Apellido1'] : NULL,
            'lastname2' =>  isset($datosUsuario['Apellido2']) ?  $datosUsuario['Apellido2'] : NULL,
            'phone'     =>  isset($datosUsuario['TfnoMovil']) ?  $datosUsuario['TfnoMovil'] : NULL,
            'inversor'  =>  isset($datosUsuario['Inversor']) ? (boolean)$datosUsuario['Inversor'] : NULL,
            'fcia'      =>  isset($datosUsuario['TieneFcia']) ? (boolean)$datosUsuario['TieneFcia'] : NULL,
            'fcia_name'         =>  isset($datosUsuario['Fcia_Name']) ? $datosUsuario['Fcia_Name'] : NULL,
            'fc_provincias'     =>  $datosUsuario['FC_Provincias'],
            'fc_facturacion'    =>  $datosUsuario['FC_Facturacion'],
            'catalogue'         =>  $datosUsuario['Catalogo']
        ];

        if ($user = User::findEmail($email)->first()) {

            $user->update($data);

            return $user;
        }

        return User::create($data);
    }

    public function resetPassword (Request $request)
    {
        return view('auth.passwords.email');
    }

    public function resetPasswordPost (ResetPasswordRequest $request)
    {
        // $this->ClaveUpdate($request->email, 'ABC113355');
        // $this->ClaveUpdate('ismael@martinezgomez.es', 'ABC113355');

        $response = $this->EnvioNuevaClave($request->email);
        if ($response['Codigo'] != 0)
            return back()->withInput()->withErrors(['error' => $response['Msg']]);

        return redirect()->route('login')->with(['success' => $response['Msg']]);
    }
}
