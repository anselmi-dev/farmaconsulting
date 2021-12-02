<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountRequest;
use App\Traits\ApiFarmaconsulting;

class QrController extends Controller
{
    use ApiFarmaconsulting;

    /**
     * Registrar evento de lectura del QR
     *
     * @param   Request  $request
     * @return  response
     */
    public function register (Request $request)
    {
        $datosUsuario = $this->RegistraEvento(auth()->user(), $request->code);

        return response()->json(['success' => true, 'message' => 'Consulta enviada']);
    }
}
