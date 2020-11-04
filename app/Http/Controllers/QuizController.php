<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuizController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $quiz = DB::table('quiz')->get();
        return view('quiz',compact('quiz'));
    }
}
