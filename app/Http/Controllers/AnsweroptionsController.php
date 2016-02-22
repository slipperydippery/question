<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answeroption;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AnsweroptionsController extends Controller
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
    public function create($question)
    {
        $question = Question::findOrFail($question);
        return view ('answeroptions.create', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $answeroption = New Answeroption($request->all());
        $answeroption->save();
        $question = $request->question_id;

        return Redirect::route('questions.show', compact('question'));

    }

    /**
     * Dynamically reorder the display of questions through jquery's drag and drop with post
     * 
     * @return Illuminate\Http\Response
     */
    public function reorder()
    {
        $input = Input::get('order');
        $i = 1;
        // return $input;

        foreach($input as $order) {
            $answeroption = Answeroption::findOrFail($order);
            $answeroption->order = $i;
            $answeroption->save();
            $i++;
        }
        return Redirect::route('questions.show', $answeroption->question);
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
