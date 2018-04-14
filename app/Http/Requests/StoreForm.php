<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'phoneNumber'=>'required|regex:/(01)[0-9]{9}/',
            'bloodGroup'=>'required',
            'city'=>'required',
            //'weight'=>'required|regex:/[5-9][0-9]{1}/|regex:/(1)[0-9]{2}/',
            'weight'=>'required'



        ];

    }
}
