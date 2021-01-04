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
     *Retrieve all books from the database
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Book::with(['category:id,category'])->get());
    }

    /**
     *[POST] Stores book record to the database.
     *
     * @queryParam name required Book name is required.
     * @queryParam author required Author for the book is required.
     * @queryParam copies integer required Copies for the book is required. Must be integer.
     * @queryParam category_id integer required Category id must exist in the categories table.
     *
     * @response 200 {
     * "name": "Java Fundamentals 2",
     * "author": "Master Bucatcat",
     * "copies": "15",
     * "category_id": "15",
     * "updated_at": "2021-01-03T06:00:07.000000Z",
     * "created_at": "2021-01-03T06:00:07.000000Z",
     * "id": 17
     * }
     * 
     * @response 422 [{
     *  "category_id": [
     *       "Category doesn't exist"
     *   ]
     * }]
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(BookRequest $request)
    {
        return response()->json(Book::create($request->validated()));
    }

    /**
     * [GET] Retrieve book by id
     * 
     * @queryParam id required integer Book is retrieved by id.
     * 
     * @response 200 {
     * "id": 15,
     * "name": "aperiam",
     * "author": "Malachi Fritsch",
     * "copies": 152,
     * "category_id": 15,
     * "created_at": "2021-01-03T05:47:54.000000Z",
     *  "updated_at": "2021-01-03T05:47:54.000000Z",
     * "category": {
     *     "id": 15,
     *     "category": "Sci-fi"
     * }
     * }
     *
     * @response 404 {
     *   "message": "Book not found"
     * }
     * 
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
     * @urlParam book integer required Book id is required for updating.
     * @queryParam name required Book name is required.
     * @queryParam author required Author for the book is required.
     * @queryParam copies integer required Copies for the book is required. Must be integer.
     * @queryParam category_id integer required Category id must exist in the categories table.
     *
     * @response 200 {
     * "message": "Book updated successfully!",
     * "book": 1
     * }
     * 
     * @response 422 [{
     *  "field": [
     *       "Field Message"
     *   ]
     * }]
     * 
     * @response 404 {
     *  "message": "Book not found
     * }
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
            return response()->json(['message' => 'Book updated successfully!', 'book' => $book]);
            
        } catch (ModelNotFoundException $exception) {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    /**
     * [DELETE] Delete book by id.
     * 
     * @urlParam book integer required {book} refers to the id of the book.
     *
     * @response 200 {
     *  "message": "Book deleted successfully!"
     * }
     * 
     * @response 404 {
     *   "message": "Book not found"
     * }
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
