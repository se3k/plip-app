<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerCreationRequest extends FormRequest
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
            'email' => 'required|unique:users',
            'password' => 'nullable',
            'name' => 'required|string',
            'sobrenome' => 'required|string',
            'personal_email' => 'nullable|unique:volunteers',
            'telephone' => 'nullable|min:9',
            'volunteer_since' => 'required',

        ];
    }
}
