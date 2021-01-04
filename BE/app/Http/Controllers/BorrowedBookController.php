<?php

namespace App\Http\Controllers;

use App\Http\Requests\BorrowedBookRequest;
use App\Models\BorrowedBook;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

/**
 * @group Borrowed Book Controller
 */
class BorrowedBookController extends Controller
{
    /**
     * [GET] Retrieve all borrowed book record
     * 
     * @response 200 [
     *  [
     * {
     *    "id": 3,
     *    "patron_id": 3,
     *    "copies": 11,
     *    "book_id": 9,
     *    "created_at": "2021-01-04T05:53:36.000000Z",
     *    "updated_at": "2021-01-04T05:53:36.000000Z",
     *    "patron": {
     *        "id": 3,
     *        "last_name": "Gaylord",
     *        "first_name": "Tristian",
     *        "middle_name": "Berge",
     *        "email": "aleen54@gmail.com",
     *        "created_at": "2021-01-04T05:53:36.000000Z",
     *        "updated_at": "2021-01-04T05:53:36.000000Z"
     *    },
     *    "book": {
     *        "id": 9,
     *        "name": "ut",
     *        "author": "Prof. Russel Cartwright II",
     *        "copies": 168,
     *        "category_id": 9,
     *        "created_at": "2021-01-04T05:53:36.000000Z",
     *        "updated_at": "2021-01-04T05:53:36.000000Z",
     *        "category": {
     *            "id": 9,
     *            "category": "Novel",
     *            "created_at": "2021-01-04T05:53:36.000000Z",
     *            "updated_at": "2021-01-04T05:53:36.000000Z"
     *        }
     *    }
     * },
     * {
     *    "id": 4,
     *    "patron_id": 5,
     *    "copies": 19,
     *    "book_id": 11,
     *    "created_at": "2021-01-04T05:53:36.000000Z",
     *    "updated_at": "2021-01-04T05:53:36.000000Z",
     *    "patron": {
     *        "id": 5,
     *        "last_name": "Green",
     *        "first_name": "Pasquale",
     *        "middle_name": "Dicki",
     *        "email": "skiles.jayme@yahoo.com",
     *        "created_at": "2021-01-04T05:53:36.000000Z",
     *        "updated_at": "2021-01-04T05:53:36.000000Z"
     *    },
     *    "book": {
     *        "id": 11,
     *        "name": "officia",
     *        "author": "Hiram Hettinger",
     *        "copies": 126,
     *        "category_id": 11,
     *        "created_at": "2021-01-04T05:53:36.000000Z",
     *        "updated_at": "2021-01-04T05:53:36.000000Z",
     *        "category": {
     *            "id": 11,
     *            "category": "Science",
     *            "created_at": "2021-01-04T05:53:36.000000Z",
     *            "updated_at": "2021-01-04T05:53:36.000000Z"
     *        }
     *    }
     * }
     * ]
     * 
     */
    public function index(){
        return response()->json(BorrowedBook::with([
            'patron', 'book', 'book.category'
        ])->get());
    }


     /**
     * [GET] Retrieve specific borrowed book by id
     * 
     * @response 404 {
     * "message": "Borrowed book not found"
     * }
     * 
     */
    public function show($id)
    {
        try
        {
            $borrowedbook = BorrowedBook::with(['patron', 'book', 'book.category'])->where('id', $id)->firstOrFail();
            return response()->json($borrowedbook);
        } 
        catch (ModelNotFoundException $exception)
        {
            return response()->json(['message' => 'Borrowed book not found'], 404);
        }
    }

    /**
     * [POST] Stores Borrowedbook.
     * 
     * @bodyParam book_id integer required Book id must exist in the book table. Example: 1
     * @bodyParam patron_id integer required Must exist in the patron table.
     * @bodyParam copies integer required Must not exceed copies of book.
     * 
     */
    public function store(BorrowedBookRequest $request){
        //Store to database
        $create_borrowed = BorrowedBook::create($request->only(['book_id', 'copies', 'patron_id']));
        
        //Retrieve from db and update book copy
        $borrowedbook = BorrowedBook::with(['book'])->find($create_borrowed->id);
        $copies = $borrowedbook->book->copies - $request->copies;
        $borrowedbook->book->update(['copies' => $copies]);

        return response()->json(['message' => 'Book borrowed successfully', 'borrowedbook' => $borrowedbook]);
    }
}
