<?php

namespace App\Http\Requests;

use App\Models\BorrowedBook;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class ReturnedBookRequest extends FormRequest
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
        $borrowed = BorrowedBook::where('book_id', request()->get('book_id'))->where('patron_id', request()->get('patron_id'))->first();

        if (!empty($borrowed)) {
            $copies = $borrowed->copies;
        } else {
            $copies = request()->get('copies');
        }

        return [
            'book_id' => 'bail|required|exists:borrowed_books,book_id',
            'copies' => ['gt:0', "lte: {$copies}", 'required', 'bail'],
            'patron_id' => 'exists:borrowed_books,patron_id'
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
            'book_id.exists' => 'Book doesn\'t exist in the borrowed book',
            'copies.lte' => 'Copies exceeded the total copies of borrowed book',
            'patron_id.exists' => 'Patron doesn\'t exist in the borrowed book'
        ];
    }

    //Returns a json reponse with a status code of 422
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
