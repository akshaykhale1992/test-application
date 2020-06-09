<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'name'               => 'required|max:255|string',
            'email'              => 'required|email',
            'mobile'             => 'required|digits:10',
            'birthday'           => 'required|date|before:' . today('Asia/Kolkata'),
            'gender'             => 'required|in:male,female',
            'state_id'           => 'required|max:255|exists:states,id',
            'city_id'            => 'required|max:255|exists:cities,id',
            'education'          => 'required|max:255',
            'year_of_completion' => 'required',
            'profile_picture'    => 'image',
            'skill'              => 'required|max:255',
            'certificate_file'   => 'file|mimes:pdf,jpg,jpeg,png|max:20000',
            'profession'         => 'required|in:salaried,self_employed',
            'company_name'       => 'required_if:profession,salaried|max:255',
            'joining_date'       => 'required_if:profession,salaried',
            'business_name'      => 'required_if:profession,self_employed|max:255',
            'location'           => 'required_if:profession,self_employed|max:255',
        ];
    }
}
