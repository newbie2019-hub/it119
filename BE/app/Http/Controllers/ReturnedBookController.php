<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReturnedBookRequest;
use App\Models\BorrowedBook;
use App\Models\ReturnedBook;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * @group Returned Book Controller
 * 
 */
class ReturnedBookController extends Controller
{
    /**
     * [GET] Retrieves all returned book.
     * 
     * Retrieves all returned book data from the database.
     * 
     * @response [{
     *    "id": 1,
     *    "book_id": 10,
     *    "copies": 16,
     *    "patron_id": 4,
     *    "created_at": "2021-01-04T14:36:00.000000Z",
     *    "updated_at": "2021-01-04T14:36:00.000000Z",
     *    "book": {
     *        "id": 10,
     *        "name": "a",
     *        "author": "Candice Vandervort",
     *        "copies": 89,
     *        "category_id": 10,
     *        "created_at": "2021-01-04T14:36:00.000000Z",
     *        "updated_at": "2021-01-04T14:36:00.000000Z",
     *        "category": {
     *            "id": 10,
     *            "category": "Biography",
     *            "created_at": "2021-01-04T14:36:00.000000Z",
     *            "updated_at": "2021-01-04T14:36:00.000000Z"
     *        }
     *    },
     *    "patron": {
     *        "id": 4,
     *        "last_name": "Hintz",
     *        "first_name": "Chauncey",
     *        "middle_name": "Yundt",
     *        "email": "jast.virgie@gmail.com",
     *        "created_at": "2021-01-04T14:36:00.000000Z",
     *        "updated_at": "2021-01-04T14:36:00.000000Z"
     *    }
     * },
     * {
     *    "id": 2,
     *    "book_id": 13,
     *    "copies": 13,
     *    "patron_id": 7,
     *    "created_at": "2021-01-04T14:36:00.000000Z",
     *    "updated_at": "2021-01-04T14:36:00.000000Z",
     *    "book": {
     *        "id": 13,
     *        "name": "pariatur",
     *        "author": "Jeffery Smith PhD",
     *        "copies": 68,
     *        "category_id": 13,
     *        "created_at": "2021-01-04T14:36:00.000000Z",
     *        "updated_at": "2021-01-04T14:36:00.000000Z",
     *        "category": {
     *            "id": 13,
     *            "category": "Science",
     *            "created_at": "2021-01-04T14:36:00.000000Z",
     *            "updated_at": "2021-01-04T14:36:00.000000Z"
     *        }
     *    },
     *    "patron": {
     *        "id": 7,
     *        "last_name": "Turcotte",
     *        "first_name": "Davin",
     *        "middle_name": "Hoeger",
     *        "email": "rdurgan@yahoo.com",
     *        "created_at": "2021-01-04T14:36:00.000000Z",
     *        "updated_at": "2021-01-04T14:36:00.000000Z"
     *    }
     *  }
     * ]
     */
    public function index()
    {
        return response()->json(ReturnedBook::with(['book', 'patron', 'book.category'])->get());
    }

     /**
     * [POST] Stores Returned book.
     * 
     * Stores returned book data and updates the borrowed book and book copies as well.
     * 
     * @bodyParam book_id integer required Book id must exist in the borrowed book table. Example: 12
     * @bodyParam patron_id integer Must exist in the borrowed books table. Example: 10
     * @bodyParam copies integer required Must not exceed copies of book. Example: 10
     * 
     * @response 200 {
     *  "message": "Book returned successfully!"
     * }
     */
    public function store(ReturnedBookRequest $request)
    {
        //Retrieve first the borrowed book
        $borrowedbook = BorrowedBook::where([
            ['book_id', $request->book_id],
            ['patron_id', $request->patron_id],
        ])->firstOrFail();
        
        if(!empty($borrowedbook))
        {
            if($borrowedbook->copies == $request->copies){
                //Delete the borrowed book data if copies from request and record are the same
                $borrowedbook->delete();
            }
            else
            {
                //Update copies of borrowed book 
                $borrowedbook->update(['copies' => $borrowedbook->copies - $request->copies]);
            }   
            
            $create_returned = ReturnedBook::create($request->only(['book_id', 'copies', 'patron_id']));
            $returnedbook = ReturnedBook::with(['book'])->find($create_returned->id);
            $copies = $returnedbook->book->copies + $request->copies;
            
            //Update the available copies for the book
            $returnedbook->book->update(['copies' => $copies]);
            return response()->json(['message' => 'Book returned successfully!']);
        }  

    }

    /**
     * [GET] Retrieves a returned book.
     * 
     * Retrieves a returned book data by id from the database.
     * 
     * @response 200 {
     * "id": 8,
     * "book_id": 12,
     * "copies": 10,
     * "patron_id": 10,
     * "created_at": "2021-01-05T00:14:25.000000Z",
     * "updated_at": "2021-01-05T00:14:25.000000Z",
     * "book": {
     *    "id": 12,
     *    "name": "rerum",
     *    "author": "Garnet Parisian",
     *    "copies": 110,
     *    "category_id": 12,
     *    "created_at": "2021-01-04T14:36:00.000000Z",
     *    "updated_at": "2021-01-05T00:14:25.000000Z",
     *    "category": {
     *        "id": 12,
     *        "category": "Science",
     *        "created_at": "2021-01-04T14:36:00.000000Z",
     *        "updated_at": "2021-01-04T14:36:00.000000Z"
     *    }
     * },
     * "patron": {
     *    "id": 10,
     *    "last_name": "Auer",
     *    "first_name": "Jeanie",
     *    "middle_name": "Hansen",
     *    "email": "nwiza@block.com",
     *    "created_at": "2021-01-04T14:36:00.000000Z",
     *    "updated_at": "2021-01-04T14:36:00.000000Z"
     * }
     * }   
     * 
     * @response 404 {
     * "message": "Returned book not found"
     * }
     * 
     */
    public function show($id)
    {
        try {
            $returnedbook = ReturnedBook::with(['book', 'book.category', 'patron'])->findOrfail($id);
            return response()->json($returnedbook); 
        } catch (ModelNotFoundException $exception) {
            return response()->json(['message' => 'Returned book not found'], 404);
        }
    }
}
