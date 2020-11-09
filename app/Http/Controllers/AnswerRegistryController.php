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

        $pastQuestion = DB::table('question')->where([
            ['quiz_id',request('quiz')],
            ['question_number',request('question')-1]
        ])->first();

        $answer = null;
        $answer = DB::table('answer')->where([
            ['question_id', $question->id],
            ['answer_number',request('answer')+1]
            ])->first();

        if(request('question') > 1){
            $pastTime = DB::table('answer_registry')->where([
                ['registry_id', request('registry')],
                ['question_id',$pastQuestion->id]
                ])->first();
        }else{
            $pastTime = DB::table('registry')->where([
                ['id', request('registry')]
            ])->first();
        }

        $pastTime = date_create($pastTime->created_at);
        $ldate = date_create(date('Y-m-d H:i:s'));
        $time = date_diff($pastTime,$ldate);
        $seconds = null;
        $seconds = ($time->y * 31557600) + ($time->m * 2629800)+ ($time->d * 86400)+ ($time->h * 3600)+($time->i * 60) + $time->s;

        AnswerRegistry::create([
            'registry_id'=>request('registry'),
            'question_id'=>$question->id,
            'answer_id'=>$answer->id,
            'response_time' => $seconds
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
