@extends('layouts.master')

@section('content')
<div class="row">

	<h1>Open questionnaire <i>{{ $quest->title }}</i> for:</h1>
	{!! Form::open(['route' => 'sheets.store']) !!}
		<!-- User Form Input -->
		<div class="form-group">
		    {!! Form::label('user_id', 'User:') !!}
		    {!! Form::select('user_id', $users, false, ['class' => 'form-control']) !!}
		</div>

		<!-- Hidden quest_id Type Form Input -->
		{!! Form::hidden('quest_id', $quest->id, null) !!}
		
		<!-- Add Submit Field -->
		<div class="form-group">
		    {!! Form::submit('Open questionnaire', ['class' => 'btn form-control']) !!}
		</div>

	{!! Form::close() !!}

</div>
@stop