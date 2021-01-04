<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BookRequest extends FormRequest
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
            'name' => 'bail|required|max:255',
            'author' => 'bail|required|max:255',
            'copies' => 'bail|required|integer',
            'category_id' => 'bail|required|exists:categories,id',
        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name of book is required',
            'author.required' => 'Author of book is required',
            'copies.required' => 'Copies of book is required',
            'copies.integer' => 'Number of copies must be integer',
            'category_id.required' => 'A book must belong to a category', 
            'category_id.exists' => 'Category doesn\'t exist', 
        ];
    }

    //Returns a json reponse with a status code of 422
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
