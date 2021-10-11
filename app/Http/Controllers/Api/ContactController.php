<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{

    /**
     * Consulta general
     *
     * @param   Request  $request
     *
     * @return  response
     */
    public function consultation (Request $request)
    {
        $request->validate([
            'name'        => 'required|min:2',
            'lastname'    => 'required|min:2',
            'email'       => 'required|email',
            'phone'       => 'required',
            'province'    => 'required',
            'interested'  => 'required',
            'message'     => 'required'
        ]);

        try {
            $contact = Contact::create($request->all());
        } catch (\Throwable $th) {
            logger('Error al registrar una consulta. MODEL:CONTACT');
        }

        return response()->json(['success' => true]);
    }

    /**
     * Mensaje que requieren que sean contactados
     *
     * @param   Request  $request
     *
     * @return  response
     */
    public function general (Request $request)
    {
        $request->validate([
            'name'        => 'required|min:2',
            'lastname'    => 'required|min:2',
            'phone'       => 'required',
            'message'     => 'required',
            'timezone'    => 'required'
        ]);

        try {
            $contact = Contact::create($request->all());
            $contact->type = 2;
            $contact->save();
        } catch (\Throwable $th) {
            logger('Error al registrar una consulta. MODEL:CONTACT');
        }

        return response()->json(['success' => true]);
    }
}
