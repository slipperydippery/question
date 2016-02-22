@extends('layouts.master')

@section('content')
<div class="row">

	<h1>Wijs <i>{{ $quest->title }}</i> toe aan:</h1>
	{!! Form::open(['route' => 'sheets.store']) !!}
		<!-- User Form Input -->
		<div class="form-group large-6 small-12">
		    {!! Form::label('user_id', 'Gebruiker:') !!}
		    {!! Form::select('user_id', $users, false, ['class' => 'form-control']) !!}
		</div>

		<!-- Hidden quest_id Type Form Input -->
		{!! Form::hidden('quest_id', $quest->id, null) !!}
		
		<!-- Add Submit Field -->
		<div class="form-group">
		    {!! Form::submit('Wijs toe', ['class' => 'button form-control']) !!}
		</div>

	{!! Form::close() !!}

</div>
@stop