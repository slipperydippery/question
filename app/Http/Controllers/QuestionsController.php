<?php

namespace App\Http\Controllers;

use App\Quest;
use App\Question;
use App\Answertype;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class QuestionsController extends Controller
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
     * Show the form for creating a new question
     * 
     * @param  Quest $quest
     * @return \Illuminate\Http\Response        
     */
    public function create($quest)
    {
        $quest = Quest::findOrFail($quest);
        $answertypes = Answertype::lists('name', 'id');
        return view ('questions.create', compact('answertypes', 'quest'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question($request->all());
        $question->order = (null !== $question->quest->questions) ? $question->quest->questions->count() + 1 : 1;
        // $question->order = Question::orderBy('order', 'desc')->first()->order + 1;
        $question->save();
        return Redirect::route('quests.show', $request->quest_id);
    }

    public function reorder($question)
    {
        $input = Input::get('order');
        $i = 1;

        $question = Question::findOrFail($question);

        foreach($input as $order) {
            $question = Question::findOrFail($order);
            $question->order = $i;
            $question->save();
            $i++;
        }

        return Redirect::route('quests.show', $question->quest);

        // $question = Question::findOrFail($request->question_id);
        // if ($request->direction == 'up')
        // {
        //     $question_switch = Question::having('order', '<', $question->order)->orderBy('order', 'desc')->first();
        // }
        // else
        // {
        //     $question_switch = Question::having('order', '>', $question->order)->orderBy('order', 'asc')->first();
        // }
        // $switch_order = $question_switch->order;
        // $question_switch->order = $question->order;
        // $question->order = $switch_order;
        // $question->save();
        // $question_switch->save();
        
        // return Redirect::route('quests.show', $request->quest_id);
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
    public function edit($question)
    {        
        $quest = Quest::findOrFail($question->quest_id);
        $answertypes = Answertype::lists('name', 'id');
        return view ('questions.edit', compact('question', 'answertypes', 'quest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $question)
    {
        $question->update($request->all());
        return Redirect::route('questions.edit', $question);
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
