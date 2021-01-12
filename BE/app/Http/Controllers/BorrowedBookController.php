<?php

namespace App\Http\Controllers;

use App\Models\BorrowedBook;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class BorrowedBookController extends Controller
{
    public function index(){
        return response()->json(BorrowedBook::with([
            'patron', 'book', 'book.category'
        ])->get());
    }
    
    public function show($id)
    {
        $borrowedbook = BorrowedBook::with(['patron', 'book', 'book.category'])->where('id', $id)->firstOrFail();
        return response()->json($borrowedbook);
    }

    /**
     * [POST] Stores Borrowedbook.
     * 
     */
    public function store(Request $request){
        //Store to database
        $create_borrowed = BorrowedBook::create($request->only(['book_id', 'copies', 'patron_id']));
        
        //Retrieve from db and update book copy
        $borrowedbook = BorrowedBook::with(['book'])->find($create_borrowed->id);
        $copies = $borrowedbook->book->copies - $request->copies;
        $borrowedbook->book->update(['copies' => $copies]);

        return response()->json(['message' => 'Book borrowed successfully', 'borrowedbook' => $borrowedbook]);
    }
}
