<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() 
    {
        $view = view("questions/index");
        return $view;   
    }
    public function show($id) 
    {
        $view = view("questions/show", ["id"=>$id]);
        return $view;
    }
}
