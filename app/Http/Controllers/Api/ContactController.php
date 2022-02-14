<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\WeCallYouMail;
use App\Mail\ConsultationMail;
use App\Mail\InformeIPDMail;
use App\Mail\AppointmentMail;

use App\Models\Contact;

class ContactController extends Controller
{

    // protected $to_email = 'info@farmaconsulting.es';
    protected $to_email = 'fct@farmaconsulting.es';
    
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

        Mail::to($this->to_email)->send(new WeCallYouMail($contact));

        return response()->json(['success' => true, 'message' => 'Consulta enviada']);
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

        Mail::to($this->to_email)->send(new ConsultationMail($contact));

        return response()->json(['success' => true, 'message' => 'Consulta enviada']);
    }

    public function appointment_create(Request $request, $oficina) {
        return view('pages.appointment', compact('oficina'));
    }

    public function appointment(Request $request) {
        $request->validate([
            'name'        => 'required|min:2',
            'lastname'    => 'required|min:2',
            'phone'       => 'required',
            'message'     => 'required',
            'timezone'    => 'required',
            'appointment_date' => 'required',
            'office' => 'required'
        ]);

        try {
            $contact = Contact::create($request->all());
            $contact->type = 3;
            $contact->save();
        } catch (\Throwable $th) {
            logger('Error al registrar una consulta. MODEL:CONTACT');
        }

        Mail::to($this->to_email)->send(new AppointmentMail($contact));

        return response()->json(['success' => true, 'message' => 'Cita concertada']);
    }

    public function IPD (Request $request) {

        Mail::to($this->to_email)->send(new InformeIPDMail(auth()->user()));

        return response()->json(['success' => true, 'message' => 'Informe personalizado IPDª solicitado']);
    }
}
