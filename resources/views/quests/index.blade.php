@extends('layouts.master')

@section('content')

    <h1>index of all quests</h1>

    @foreach($quests as $quest)
        <div>
            <span>{{ $quest->title }}</span>
                <a href=" {{ URL::route('quests.show', $quest) }} ">Show Questionnaire</a>
            <span>{{ $quest->user_id }}</span>
                <a href=" {{ URL::route('sheets.create', $quest) }} ">Take Questionnaire</a>
        </div>

    @endforeach

    @if(Auth::check())
        <p> user id = {{ $user->id }} </p>
    @endif


@stop
