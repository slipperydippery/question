@extends('layouts.master')

@section('content')
<div class="row">

	<h1>{{ $question->question }}</h1>
	<h3>{{ $question->clarification }}</h3>
	<a href=" {{ URL::route('questions.edit', $question) }} " class="edit">bewerk vraag</a><br />
	
	@if($question->answertype->id == 1)
		<!-- Answer Form Input -->
		<div class="form-group">
			{!! Form::label('answer', 'Answer:') !!}
			{!! Form::text('answer', null, ['class' => 'form-control']) !!}
		</div>
	@endif
	@if($question->answertype->id == 2)
		<fieldset class="large-12 columns sortable">
      	<legend>Uw antwoord</legend>
			@foreach($question->answeroptions->sortBy('order') as $answeroption)
				<div class="large-12 form-group handle" id="{{ $answeroption->id }}">
					<!-- Answer Form Input -->
					{!! Form::radio('answer', $answeroption->id, null, ['class' => 'field']) !!}	
					{!! Form::label('answer', $answeroption->answer) !!}
				</div>
			@endforeach
		</fieldset>
	@endif
	@if($question->answertype->id == 3)
		<fieldset class="large-12 columns sortable">
      	<legend>Uw antwoord</legend>
			@foreach($question->answeroptions as $answeroption)
				<div class="form-group">
					<!-- Answer Form Input -->
					{!! Form::checkbox('answer', $answeroption->id, null, ['class' => 'field']) !!}	
					{!! Form::label('answer', $answeroption->answer) !!}
				</div>
			@endforeach
		</fieldset>
	@endif

	<a href=" {{ URL::route('answeroptions.createforquestion', $question) }} " class="edit">Voeg antwoord toe</a>

	<br />
	<br />
	<a href=" {{ URL::to($question->questionable->route()) }} " class="button secondary button-back">&larr; Terug naar Vragenlijst </a>


</div>
@stop

@section('additional-scripts')
	<input type="hidden" id="token" value="{{ csrf_token() }}">

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
		$('.sortable').sortable().bind('sortupdate', function(e, ui) {
		var order = $('.sortable .handle').map(function(){
			console.log($(this).attr("id"));
        	return $(this).attr("id");
        }).get();
        $.post("{{ URL::route('answeroptions.reorder') }}", { order: order });
		});

	</script>
@stop