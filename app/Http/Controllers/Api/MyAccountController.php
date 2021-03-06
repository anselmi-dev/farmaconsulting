<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountRequest;
use App\Traits\ApiFarmaconsulting;

class MyAccountController extends Controller
{
    use ApiFarmaconsulting;

    public function updateAccount (AccountRequest $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->lastname2 = $request->lastname2;
        $user->phone = $request->phone;
        $user->save();

        $datosUsuario = $this->DatosUsuarioUpdate($user);

        if ($datosUsuario['Error']) {
            if($request->ajax())
                return response()->json(['error' => false], 500);

            return back()->withInput()->withErrors(['error' => 'Ocurrió un error inesperado']);
        }

        if($request->ajax())
            return response()->json(['success' => true, 'user' => $request->all()]);

        return back()->withInput()->withErrors(['success' => 'Datos actualizados']);
    }

    /**
     * Actualizar las preferencias del usuario
     *
     * @param   Request  $request
     *
     * @return  response
     */
    public function updatePreferences (Request $request)
    {
        $fc_provincias = NULL;

        if(!empty($request->fc_provincias)) {
            foreach ($request->fc_provincias as $province) {
                if (is_null($fc_provincias))
                    $fc_provincias = '-' . $province . '-';
                else
                    $fc_provincias = $fc_provincias . $province . '-';
            }
        }

        $fc_facturacion = NULL;

        if (!empty($request->fc_facturacion)) {
            foreach ($request->fc_facturacion as $facturacion) {
                if (is_null($fc_facturacion))
                    $fc_facturacion = '-' . $facturacion . '-';
                else
                    $fc_facturacion = $fc_facturacion . $facturacion . '-';
            }
        }

        $inversor = null;

        if(empty($request->fc_facturacion) && empty($request->fc_provincias)) {
            $inversor = 0;
        } else {
            $inversor = 1;
        }

        $user = auth()->user();

        $user->inversor = $inversor;

        $user->fc_facturacion = $fc_facturacion;

        $user->fc_provincias = $fc_provincias;

        $user->save();

        $datosUsuario = $this->DatosUsuarioUpdate($user);

        if ($datosUsuario['Error'])
            return response()->json(['error' => false], 500);

        return response()->json(['success' => true, 'user' => $request->all()]);
    }

    /**
     * Lanza el envío de un email al cliente con una nueva contraseña
     *
     * @param   Request  $request
     * @return  response
     */
    public function updateClave (Request $request)
    {
        if ($request->new_password != $request->repeat_password) {
            return response()->json(['error' => true, 'message' => 'La contraseña nueva no coincide.'], 500);
        }

        if (!\Hash::check($request->actual_password, auth()->user()->password)) {
            return response()->json(['error' => true, 'message' => 'La contraseña actual es incorrecta.'], 500);
        }

        $response = $this->ClaveUpdate(auth()->user()->email, $request->new_password);

        $response['msg'] = isset($response['msg']) ? $response['msg'] : 'Contraseña actualizada';

        if (isset($response['Error']) && $response['Error']) {
            // if($request->ajax())
                return response()->json(['error' => true, 'message' => $response['msg']], 500);

            return back()->withInput()->withErrors(['error' => 'Ocurrió un error inesperado']);
        }

        auth()->user()->password = \Hash::make($request->new_password);

        auth()->user()->save();

        // if($request->ajax())
            return response()->json(['success' => true, 'message' => $response['msg']]);

        return back()->withInput()->withErrors(['success' => true, 'message' => $response['msg']]);
    }

    /**
     * Lanza el envío de un email al cliente con una nueva contraseña
     *
     * @param   Request  $request
     * @return  response
     */
    public function getNewPassword (Request $request)
    {
        $response = $this->EnvioNuevaClave(auth()->user()->email);

        if ($response['Error']) {
            if($request->ajax())
                return response()->json(['error' => false, 'message' => $response['msg']], 500);

            return back()->withInput()->withErrors(['error' => 'Ocurrió un error inesperado']);
        }

        if($request->ajax())
            return response()->json(['success' => true, 'user' => $request->all(), 'message' => $response['msg']]);

        return back()->withInput()->withErrors(['success' => true, 'message' => $response['msg']]);
    }
}
