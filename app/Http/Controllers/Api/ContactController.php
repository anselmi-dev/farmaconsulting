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

    // protected $to_email = 'carlosanselmi2@gmail.com';
    protected $to_email = 'fct@farmaconsulting.es';
    
    /**
     * Consulta general
     * <Contacto / Cuéntanos tu consulta>
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

        Mail::to($this->to_email)->send(new ConsultationMail($contact));

        return response()->json(['success' => true, 'message' => 'Consulta enviada']);
    }

    /**
     * Mensaje que requieren que sean contactados
     * <Contacto / Nosotros te llamamos>
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

        Mail::to($this->to_email)->send(new WeCallYouMail($contact));

        return response()->json(['success' => true, 'message' => 'Nosotros te llamaremos']);
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
            'office'           => 'required'
        ]);

        try {
            $contact = Contact::create($request->all());
            $contact->type = 3;
            $contact->save();
        } catch (\Throwable $th) {
            logger('Error al registrar una consulta. MODEL:CONTACT');
        }

        Mail::to($this->to_email)->send(new AppointmentMail($contact));

        return response()->json(['success' => true, 'message' => 'Cita agendada']);
    }

    /**
     * IPD de la landing 17B y  19
     * {Quiero un informe personalizado IPD}
     * 
     * @param Request $request
     * @return response
     */
    public function IPD (Request $request) {

        Mail::to($this->to_email)->send(new InformeIPDMail(auth()->user()));

        return response()->json(['success' => true, 'message' => 'Informe personalizado IPD® solicitado']);
    }

    public function valoracionPost (Request $request)
    {
        $user = \Auth::user();
        
        $opinion = \App\Models\Opinion::create([
            'name' => $user->name,
            'email' => $user->email,
            'option' => $request->option,
            'message' => $request['message_'.$request->option],
        ]);

        Mail::to($this->to_email)->send(new \App\Mail\VarolacionMail($opinion));

        return response()->json(['success' => true, 'message' => 'Gracias por tu opinión']);
    }
}
