<?php

namespace App\Http\Controllers;

use App\AnswerRegistry;
use Illuminate\Http\Request;
use DB;

class AnswerRegistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = DB::table('question')->where([
            ['quiz_id',request('quiz')],
            ['question_number',request('question')]
        ])->first();

        $answer = DB::table('answer')->where([
            ['question_id', $question->id],
            ['answer_number',request('answer')+1]
            ])->first();

        $registry = AnswerRegistry::create([
            'registry_id'=>request('registry'),
            'question_id'=>request('question'),
            'answer_id'=>$answer->id,
            'response_time' => 1
            ]);
        
        $Contar = DB::table('question')->where('quiz_id', request('quiz'))->get()->count();
        if($Contar  == request('question') ){
            return redirect()->route('surveyed.create');
        }else{
            return redirect()->route('doQuiz',[
                'registry'=>request('registry'),
                'quiz'=>request('quiz'),
                'question'=>request('question')
                ]);
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
