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
        $doQuiz = null;
        $doQuiz = DB::table('quiz')->where('active', 1)->first();

        if($doQuiz == null){
            return redirect()->route('surveyed.create');
        }

        $doQuiz->questions = DB::table('question')->where([
            ['quiz_id', $doQuiz->id],
            ['question_number',$request->question+1]
            ])->first();

        $doQuiz->questions->answers = DB::table('answer')->where('question_id', $doQuiz->questions->id)->get();
        $doQuiz->questions->registry = request('registry');
        return view('doQuiz',[
            'doQuiz'=>$doQuiz
            ]);
        
    }
}
