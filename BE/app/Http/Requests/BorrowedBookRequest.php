<?php

namespace App\Http\Requests;

use App\Models\Book;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class BorrowedBookRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $book = Book::find($request->book_id);
        if(!empty($book)){
            $copies = $book->copies;
        }
        else{
            $copies = $request->copies;
        }
        
        return [
            'book_id' => 'bail|required|exists:books,id',
            'copies' => ['required',"lte: {$copies}", 'bail', 'gt:0'],
            'patron_id' => 'exists:patrons,id',
        ];
    }

    /**
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'book_id.exists' => 'Book doesn\'t exist in the database',
            'copies.lte' => 'Copies exceeded the total copies of book',
            'patron_id.exists' => 'Patron doesn\'t exist in the database'
        ];
    }

    //Returns a json reponse with a status code of 422
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
