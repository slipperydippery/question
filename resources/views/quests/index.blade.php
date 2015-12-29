@extends('layouts.master')

@section('content')

    <h1>index of all quests</h1>

    @foreach($quests as $quest)
        <div>
            <span>{{ $quest->title }}</span>
            <span>{{ $quest->user_id }}</span>
            @can('update', $quest)
                <a href="#">Edit Questionnaire</a>
            @endcan
        </div>

    @endforeach

    {{ $user->id }}


@stop