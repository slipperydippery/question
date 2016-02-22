@extends('layouts.master')

@section('content')
<div class="row">

		<h1>Bewerk: <i>{{ $question->question }}</i></h1>
		{!! Form::model($question, ['method' => 'PATCH', 'route' => ['questions.update', $question->id]]) !!}
				@include('questions.partials.form', ['submittext' => 'Update Vraag', 'quest_id' => $question->quest_id])
		{!! Form::close() !!}



</div>
@stop
