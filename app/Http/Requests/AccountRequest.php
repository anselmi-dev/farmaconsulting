<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone'       =>    'required|min:2',
            'email'       =>    'required|min:2',
            'name'        =>    'required|min:2',
            'lastname'    =>    'required|min:2',
            'lastname2'   =>    'required|min:2'
        ];
    }
}
