<?php

namespace App\Http\Controllers;

use App\Models\BorrowedBook;
use App\Models\ReturnedBook;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ReturnedBookController extends Controller
{
    public function index()
    {
        return response()->json(ReturnedBook::with(['book', 'patron', 'book.category'])->get());
    }

    public function store(Request $request)
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

    public function show($id)
    {
        $returnedbook = ReturnedBook::with(['book', 'book.category', 'patron'])->findOrfail($id);
        return response()->json($returnedbook); 
    }
}
