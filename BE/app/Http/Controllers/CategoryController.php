<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

/**
 * @group Categories Controller
 */
class CategoryController extends Controller
{
    /**
     * [GET] Retrieves all categories.
     * 
     * @response 200 [
     * {
     *    "id": 3,
     *    "category": "Programming",
     *    "created_at": "2021-01-06T23:39:19.000000Z",
     *    "updated_at": "2021-01-06T23:39:19.000000Z"
     * },
     * {
     *    "id": 7,
     *    "category": "Fiction",
     *    "created_at": "2021-01-06T23:39:19.000000Z",
     *    "updated_at": "2021-01-06T23:39:19.000000Z"
     * },
     * {
     *    "id": 8,
     *    "category": "Horror",
     *    "created_at": "2021-01-06T23:39:19.000000Z",
     *    "updated_at": "2021-01-06T23:39:19.000000Z"
     * },
     * {
     *    "id": 9,
     *    "category": "Novel",
     *    "created_at": "2021-01-06T23:39:19.000000Z",
     *    "updated_at": "2021-01-06T23:39:19.000000Z"
     * },
     * {
     *    "id": 12,
     *    "category": "Science",
     *    "created_at": "2021-01-06T23:39:19.000000Z",
     *    "updated_at": "2021-01-06T23:39:19.000000Z"
     * },
     * {
     *    "id": 16,
     *    "category": "Biography",
     *    "created_at": "2021-01-06T23:39:19.000000Z",
     *    "updated_at": "2021-01-06T23:39:19.000000Z"
     * }
     * ]
     * 
     */
    public function index(){
        $category = Category::all();
        return response()->json($category);
    }
}
