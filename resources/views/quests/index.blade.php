@extends('layouts.master')

@section('content')
<div class="row">
    <h1>Questionnaires</h1>

    @foreach($quests as $quest)
        <div>
            <a href=" {{ URL::route('quests.show', $quest) }} ">{{ $quest->title }}</a> -- 
            <a href=" {{ URL::route('sheets.create', $quest) }} "><i>Assign Questionnaire</i></a>
        </div>
    @endforeach

</div>
@stop
