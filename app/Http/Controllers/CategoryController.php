<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index () 
    {
                // select all rows from table categories
        $categories = DB::table('categories')->get();
        
        // prepare the view
        $view = view('categories/index');
        
        // insert the selected categories into the view
        $view->categories = $categories;
        
        // return the view
        return $view;
    }
}
