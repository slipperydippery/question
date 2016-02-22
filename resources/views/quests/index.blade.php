@extends('layouts.master')

@section('content')
<div class="row">
    <h1>Vragenlijsten</h1>

    @foreach($quests as $quest)
        <div>
            <a href=" {{ URL::route('quests.show', $quest) }} "><h2>{{ $quest->title }}</h2></a> 
            {{ $quest->description }} <br />
            <a href=" {{ URL::route('sheets.create', $quest) }} "><i>&rarr; Wijs toe aan deelnemer</i></a>
        </div>
    @endforeach

</div>
@stop
