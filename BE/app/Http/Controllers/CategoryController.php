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
     */
    public function index(){
        $category = Category::all();
        return response()->json($category);
    }
}
