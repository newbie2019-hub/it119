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
     * @response 200 [
     * {
     *    "id": 3,
     *    "name": "praesentium",
     *    "author": "Dr. Patience Klocko PhD",
     *    "copies": 129,
     *    "category_id": 3,
     *    "created_at": "2021-01-04T14:35:59.000000Z",
     *    "updated_at": "2021-01-04T14:35:59.000000Z",
     *    "category": {
     *        "id": 3,
     *        "category": "Programming"
     *    }
     * },
     * {
     *    "id": 4,
     *    "name": "PHP Basics - Updated",
     *    "author": "Sabay",
     *    "copies": 15,
     *    "category_id": 4,
     *    "created_at": "2021-01-04T14:35:59.000000Z",
     *    "updated_at": "2021-01-04T14:35:59.000000Z",
     *    "category": {
     *        "id": 4,
     *        "category": "Programming - 2"
     *    }
     * },
     * {
     *    "id": 6,
     *    "name": "asperiores",
     *    "author": "Mathias Marks DDS",
     *    "copies": 29,
     *    "category_id": 6,
     *    "created_at": "2021-01-04T14:35:59.000000Z",
     *    "updated_at": "2021-01-04T14:35:59.000000Z",
     *    "category": {
     *        "id": 6,
     *        "category": "Programming - 2"
     *    }
     * },
     * {
     *    "id": 7,
     *    "name": "expedita",
     *    "author": "Vaughn Stamm",
     *    "copies": 181,
     *    "category_id": 7,
     *    "created_at": "2021-01-04T14:36:00.000000Z",
     *    "updated_at": "2021-01-04T14:36:00.000000Z",
     *    "category": {
     *        "id": 7,
     *        "category": "Fiction"
     *    }
     * }
     * ]
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Book::with(['category:id,category'])->get());
    }

    /**
     * [POST] Stores book
     * 
     * @queryParam name required Book name is required. Example: Java Fundamentals 2
     * @queryParam author required Author for the book is required. Example: Master Bucatcat
     * @queryParam copies integer required Copies for the book is required. Must be integer. Example: 15
     * @queryParam category_id integer required Category id must exist in the categories table. Example: 15
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
     * 
     * @urlParam book integer required Book is being retrieved by id. This {book} actually means id of the book. Example: 3
     * 
     * @response 200 {
     * "id": 3,
     * "name": "praesentium",
     * "author": "Dr. Patience Klocko PhD",
     * "copies": 129,
     * "category_id": 3,
     * "created_at": "2021-01-04T14:35:59.000000Z",
     * "updated_at": "2021-01-04T14:35:59.000000Z",
     * "category": {
     *    "id": 3,
     *     "category": "Programming"
     * }
     * }
     * 
     * @response 404 {
     * "message": "Book not found"
     * }
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
     * @urlParam book integer required {book} refers to book id which is required for updating. Example: 3
     * @queryParam name required Book name is required. Example: Java Fundamentals
     * @queryParam author required Author for the book is required. Example: Prof. Ad
     * @queryParam copies integer required Copies for the book is required. Must be integer. Example: 155
     * @queryParam category_id integer required Category id must exist in the categories table. Example: 11
     * 
     * @response 200 {
     * "message": "Book updated successfully!",
     * "book": {
     *   "id": 3,
     *   "name": "Java Fundamentals",
     *   "author": "Prof. Ad",
     *   "copies": "155",
     *   "category_id": "11",
     *   "created_at": "2021-01-04T14:35:59.000000Z",
     *   "updated_at": "2021-01-04T15:31:10.000000Z",
     *   "category": {
     *       "id": 3,
     *       "category": "Programming"
     *   }
     * }
     * }
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
