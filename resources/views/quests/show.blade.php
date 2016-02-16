@extends('layouts.master')

@section('content')
<div class="row">


	<h1 class="header">{{ $quest->title }}</h1>
	<h3><i>{{  $quest->description }}</i></h3>
	<a href=" {{ URL::route('quests.edit', $quest) }} ">edit title</a>

	<ul class="questions">
	@foreach($quest->questions as $key => $question)
		<li class="question">
			{{ $question->question }}<br />
			@if($question->answertype->name == "text")
				<div class="form-group">
					{!! Form::text('dummy', null, ['class' => 'form-control']) !!}
				</div>
			@endif
			<a href=" {{ URL::route('questions.edit', $question) }} ">edit question</a>
			<ul>
				@foreach($question->answeroptions as $answeroption)
					<li>
						{{ $answeroption->answer }}
					</li>
				@endforeach
			</ul>
			@if ($key != 0)
				{!! Form::open(['route' => 'questions.reorder']) !!}
					{!! Form::hidden('direction', 'up', null) !!}
					{!! Form::hidden('quest_id', $quest->id, null) !!}
					{!! Form::hidden('question_id', $question->id, null) !!}
				    {!! Form::submit('up', ['class' => 'btn form-control question_order question_order--up']) !!}
				{!! Form::close() !!}
			@endif
			@if ($key != $quest->questions->count() - 1 )
				{!! Form::open(['route' => 'questions.reorder']) !!}
					{!! Form::hidden('direction', 'down', null) !!}
					{!! Form::hidden('quest_id', $quest->id, null) !!}
					{!! Form::hidden('question_id', $question->id, null) !!}
				    {!! Form::submit('down', ['class' => 'btn form-control question_order question_order--down']) !!}
				{!! Form::close() !!}
			@endif			
		</li>
	@endforeach
		<li class="question">
			<a href=" {{ URL::route('questions.createforquest', $quest) }} ">add a question</a>
		</li>
	</ul>

</div>
@stop