<?php

namespace App\Http\Controllers;

use App\User;
use App\Sheet;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user)
    {
        return view ('sheets.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($quest)
    {
        $users = User::get()->lists('name', 'id');
        return view ('sheets.create', compact('quest', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createforuser($user, $quest)
    {
        $sheet = New Sheet();
        $sheet->user_id = $user->id;
        $sheet->quest_id = $quest->id;
        $sheet->save();

        return Redirect::route('users.sheets', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sheet = New Sheet($request->all());
        $sheet->save();


        foreach($sheet->quest->questions as $question)
        {
            $answer = $sheet->answers()->create([
                    'question_id' => $question->id
                ]);
        }

        return Redirect::route('users.sheets', $request->user_id);        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user, $sheet)
    {
        return view ('sheets.show', compact('user', 'sheet'));
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
