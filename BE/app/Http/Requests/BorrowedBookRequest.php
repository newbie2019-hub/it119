<?php

namespace App\Http\Requests;

use App\Models\Book;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Factory as ValidationFactory;
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
     * [POST] Stores Borrowedbook.
     * 
     * @bodyParam book_id integer required Book id must exist in the book table. Example: 1
     * @bodyParam patron_id integer required Must exist in the patron table.
     * @bodyParam copies integer required Must not exceed copies of book.
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
            'copies' => ["lte: {$copies}", 'required', 'bail', 'gt:0'],
            'patron_id' => 'exists:patrons,id',
        ];
    }

    public function bodyParameters()
    {
        return [
            'book_id' => [
                'description' => 'ID of the book.',
                'example' => 1,
            ],
            'copies' => [
                'description' => 'Copies to be borrowed',
                'example' => 15,
            ],
            'patron_id' => [
                'description' => 'ID of the patron that borrowes the book',
            ],
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
        throw new HttpResponseException(response()->json([$validator->errors()], 422));
    }
}
