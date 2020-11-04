<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DoQuizController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $doQuiz = DB::table('quiz')->where('active', 'true')->first();
        $doQuiz->questions = DB::table('question')->where('quiz_id', $doQuiz->id)->get();

        foreach($doQuiz->questions as $question){
            $question->answers = DB::table('answer')->where('question_id', $question->id)->get();
        }

        return json_encode($doQuiz);
    }
}
