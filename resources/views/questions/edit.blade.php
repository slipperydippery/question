@extends('layouts.master')

@section('content')
<div class="row">

		<h1>Edit "{{ $question->question }}"</h1>
		{!! Form::model($question, ['method' => 'PATCH', 'route' => ['questions.update', $question->id]]) !!}
				@include('questions.partials.form', ['submittext' => 'Update Question', 'quest_id' => $question->quest_id])
		{!! Form::close() !!}


		@if($question->answertype->id == 1)
			<!-- Answer Form Input -->
			<div class="form-group">
				{!! Form::label('answer', 'Answer:') !!}
				{!! Form::text('answer', null, ['class' => 'form-control']) !!}
			</div>
		@endif
		@if($question->answertype->id == 2)
			@foreach($question->answeroptions as $answeroption)
				<div class="form-group">
					<!-- Answer Form Input -->
					{!! Form::label('answer', $answeroption->answer) !!}
					{!! Form::radio('answer', $answeroption->id, null, ['class' => 'field']) !!}	
				</div>
			@endforeach
		@endif
		@if($question->answertype->id == 3)
			@foreach($question->answeroptions as $answeroption)
				<div class="form-group">
					<!-- Answer Form Input -->
					{!! Form::label('answer', $answeroption->answer) !!}
					{!! Form::checkbox('answer', $answeroption->id, null, ['class' => 'field']) !!}	
				</div>
			@endforeach
		@endif

		<a href=" {{ URL::route('answeroptions.createforquestion', $question) }} ">Add a new answeroption</a>

		<br />
		<br />
		<br />
		<a href=" {{ URL::route('quests.show', $quest) }} ">Back to Questionnaire </a>

</div>
@stop