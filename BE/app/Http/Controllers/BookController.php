<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

/**
 * @group Book Controller
 */
class BookController extends Controller
{
    /**
     *[GET] All Books
     *
     *Retrieve all books from the database
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Book::with(['category:id,category'])->get());
    }

    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        return response()->json(Book::create($request->all()));
    }

    /**
     * [GET] Retrieve book by id
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $book = Book::with(['category:id,category'])->where('id', $id)->firstOrFail();
            return response()->json($book);
        } catch (ModelNotFoundException $exception){
            return response()->json(['message' => 'Book not found'], 404);
        }
        
    }

    /**
     * [PUT] Update Book
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, $id)
    {
        $book = Book::with(['category:id,category'])->where('id', $id)->update($request->all());
        return response()->json(['message' => 'Book updated successfully!', 'book' => $book]);
    }

    /**
     * [DELETE] Delete book by id.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function destroy($id)
    {
        try{
            $book = Book::where('id', $id)->firstOrFail();
            $book->delete();

            return response()->json(['message' => 'Book deleted successfully!']);
        } catch (ModelNotFoundException $exception){
            return response()->json(['message' => 'Book not found'], 404);
        }
        
    }
}
