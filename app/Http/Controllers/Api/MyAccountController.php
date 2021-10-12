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
        auth()->user()->update($request->all());

        $datosUsuario = $this->DatosUsuarioUpdate(auth()->user());

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

        foreach ($request->fc_provincias as $province) {
            if (is_null($fc_provincias))
                $fc_provincias = '-' . $province . '-';
            else
                $fc_provincias = $fc_provincias . $province . '-';
        }

        $fc_facturacion = NULL;

        foreach ($request->fc_facturacion as $facturacion) {
            if (is_null($fc_facturacion))
                $fc_facturacion = '-' . $facturacion . '-';
            else
                $fc_facturacion = $fc_facturacion . $facturacion . '-';
        }

        $user = auth()->user();

        $user->fc_facturacion = $fc_facturacion;

        $user->fc_provincias = $fc_provincias;

        $user->save();

        $datosUsuario = $this->DatosUsuarioUpdate($user);

        if ($datosUsuario['Error'])
            return response()->json(['error' => false], 500);

        return response()->json(['success' => true, 'user' => $request->all()]);
    }
}
