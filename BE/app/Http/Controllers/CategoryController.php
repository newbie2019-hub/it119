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
     * @reponse 200
     * [
     * {
     *    "id": 15,
     *    "category": "Sci-fi",
     *    "created_at": "2021-01-03T05:47:54.000000Z",
     *    "updated_at": "2021-01-03T05:47:54.000000Z"
     * },
     * {
     *    "id": 16,
     *    "category": "Biography",
     *   "created_at": "2021-01-03T05:47:54.000000Z",
     *   "updated_at": "2021-01-03T05:47:54.000000Z"
     * }
     * ]
     */
    public function index(){
        $category = Category::all();
        return response()->json($category);
    }
}
