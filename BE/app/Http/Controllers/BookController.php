<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Book::with(['category:id,category'])->get());
    }

    /**
     * [POST] Stores book
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(BookRequest $request)
    {
        return response()->json(Book::create($request->all()));
    }

    /**
     * [GET] Retrieve book by id
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $book = Book::with(['category:id,category'])->where('id', $id)->firstOrFail();
            return response()->json($book);
        } catch (ModelNotFoundException $exception) {
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
    public function update(BookRequest $request, $id)
    {
        try {
            $book = Book::with(['category:id,category'])->where('id', $id)->firstOrFail();
            $book->update($request->validated());

            $updated_book = Book::with(['category:id,category'])->where('id', $id)->firstOrFail();
            return response()->json(['message' => 'Book updated successfully!', 'book' => $updated_book]);
            
        } catch (ModelNotFoundException $exception) {
            return response()->json(['message' => 'Book not found'], 404);
        }
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
        try {
            $book = Book::where('id', $id)->firstOrFail();
            $book->delete();

            return response()->json(['message' => 'Book deleted successfully!']);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }
}
