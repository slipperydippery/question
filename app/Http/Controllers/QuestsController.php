<?php

namespace App\Http\Controllers;

use App\Quest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestsController extends Controller
{
    public function index ()
    {
        $quests = Quest::latest()->get();
        $user = Auth::user();

        return view('quests.index', compact('quests', 'user'));
    }

    public function show($id)
    {
        //auth()->loginUsingId(6);

        $quest = Quest::findOrFail($id);

        $this->authorize('update', $quest);


        return ($quest->title);
    }

    public function create()
    {
        return view('quests.create');
    }


    public function store(Request $request)
    {
        $user = Auth::user();

        $quest = new \App\Quest($request->all());
        $quest->user_id = $user->id;
        $quest->save();
        return redirect('home');
    }
}
