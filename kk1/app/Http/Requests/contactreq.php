<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\contactrule;

class contactreq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'name'  =>  'required',
           'email'  =>  'required',
           'message'  =>  'required',
           // 'age'  => [ 'required', new bookingrule() ]

           

           // $request->validate('bookingdate' => 'after_or_equals:2/23/2023')  
        ];
    }
}
