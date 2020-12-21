<?php

namespace App\Http\Controllers;

use App\Quiz;
use DB;
use App\Surveyed;
use App\Registry;
use Illuminate\Http\Request;

class SurveyedController extends Controller
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
        return view('surveyed.home',[
            'quiz'=>Quiz::where('active','1')->get()->first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $fields = request()->validate([
            'id' => 'required'
        ],[
            'id.required' => 'Identificación requerida'
        ]);

        $surveyed = Surveyed::where('id', '=', request('id'))->first();
        if ($surveyed === null) {
            Surveyed::create(request()->only('id'));
        }

        $quiz = DB::table('quiz')->where('active', 1)->first();
        $registry = Registry::create(['surveyed_id'=>request('id'),'quiz_id'=>$quiz->id]);

        return redirect()->route('doQuiz',['registry'=>$registry->id,'quiz'=>$quiz->id,'question'=>0]);
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
