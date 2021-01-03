<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PatronRequest extends FormRequest
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
            'last_name' => 'bail|required|max:255',
            'first_name' => 'bail|required|max:255',
            'middle_name' => 'bail|required|max:255',
            'email' => 'required|unique:patrons|email'
        ];
    }

    //Returns a json reponse with a status code of 422
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([$validator->errors()], 422));
    }
}
