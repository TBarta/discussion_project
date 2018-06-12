<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Answer;
use App\Question;

class QuestionController extends Controller
{
    public function index() 
    {
        $result = Question::latest()->get();
        
        $view = view("questions/index");

        $view->questions = $result;

        return $view;   
    }
    public function show($id) 
    {

        $question = Question::find($id);
        $answers = $question->answers()->latest()->get();


        $view = view("questions/show", ["id"=>$id]);

        $view->answers = $answers;
        $view->question = $question;

        return $view;
    }
}
