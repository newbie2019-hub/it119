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
     */
    public function index(){
        return response()->json(BorrowedBook::with([
            'patron', 'book', 'book.category'
        ])->get());
    }
    

     /**
     * [GET] Retrieve specific borrowed book by id.
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
