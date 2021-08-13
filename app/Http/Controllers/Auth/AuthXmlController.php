<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
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
        $xml = $this->catalogoLogin($request->email, $request->password, $request->catalogue);

        if ($xml['Error'] == -1) {
            return \Redirect::back()->withInput($request->all())->withErrors(array('message' => $xml['Msg']));
        }

        $user = $this->createOrUpdate($request->email, $request->password, $request->catalogue);

        \Auth::login($user);

        return redirect()->route('home');
    }

    protected function createOrUpdate ($email, $password, $catalogue)
    {
        $datosUsuario = $this->datosUsuario($email);

        $data = [
            'email'     =>  $datosUsuario['Email'],
            'password'  =>  \Hash::make($password),
            'name'      =>  $datosUsuario['Nombre'],
            'lastname'  =>  $datosUsuario['Apellido1'],
            'lastname2' =>  $datosUsuario['Apellido2'],
            'inversor'  =>  (boolean)$datosUsuario['Inversor'],
            'fcia'      =>  (boolean)$datosUsuario['TieneFcia'],
            'fcia_name'         =>  $datosUsuario['Fcia_Name'],
            'fc_provincias'     =>  $datosUsuario['FC_Provincias'],
            'fc_facturacion'    =>  $datosUsuario['FC_Facturacion'],
            'catalogue'         =>  $catalogue
        ];

        if ($user = User::findEmail($email)->first()) {

            $user->update($data);

            return $user;
        }

        return User::create($data);
    }
}
