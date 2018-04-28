<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeekerForm extends FormRequest
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
            'phone'=>['required','regex: /(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/'],
            'bloodGroup'=>'required',
            'city'=>'required',
            'requiredDate'=>'required',
            //'weight'=>'required|regex:/[5-9][0-9]{1}/|regex:/(1)[0-9]{2}/',alpha_num
            'seekerName'=>'required|alpha_num',
            'patientName'=>'required|alpha_num',
            'seekerName'=>'required|alpha_num',
            'hospitalName'=>'required|alpha_num',
            'address'=>'required|alpha_num',
        ];
    }
}
