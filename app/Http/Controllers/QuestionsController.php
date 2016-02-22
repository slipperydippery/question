<?php

namespace App\Http\Controllers;

use App\Quest;
use App\Question;
use App\Template;
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
        $questionable_type = 'App\\Quest';
        $questionable_id = $quest->id;
        return view ('questions.create', compact('answertypes', 'questionable_id', 'questionable_type'));
    }

    public function createfortemplate($template)
    {
        $template = Template::findOrFail($template);
        $answertypes = Answertype::lists('name', 'id');
        $questionable_type = 'App\\Template';
        $questionable_id = $template->id;
        return view ('questions.create', compact('answertypes', 'questionable_id', 'questionable_type'));
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
        $question->order = ($question->questionable->questions->count() > 0) ? $question->questionable->questions->sortByDesc('order')->first()->order + 1 : 1;
        $question->save();
        return redirect($question->questionable->route());
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

        foreach($input as $order) {
            $question = Question::findOrFail($order);
            $question->order = $i;
            $question->save();
            $i++;
        }
        return Redirect::route('quests.show', $question->quest);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($question)
    {
        return view ('questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($question)
    {        
        $answertypes = Answertype::lists('name', 'id');
        $questionable_id = $question->questionable->id;
        $questionable_type = $question->questionable->type();
        return view ('questions.edit', compact('question', 'answertypes', 'questionable_id', 'questionable_type'));
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
        return Redirect::route('questions.show', $question);
        // return redirect($question->questionable->route());
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
