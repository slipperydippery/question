@extends('layouts.master')

@section('content')
<div class="row">


	<h1 class="header">{{ $quest->title }}</h1>
	<h3><i>{{  $quest->description }}</i></h3>
	<a href=" {{ URL::route('quests.edit', $quest) }} " class="edit">Bewerk titel</a><br /><br /><br />

	<ul class="questionables sortable" id="sortable">
	@foreach($quest->questions as $key => $question)
		<li class="questionable handle" id="{{ $question->id }}">
			<h4>{{ $question->question }}</h4>
			@if($question->answertype->id == 1)
				<div class="form-group">
					{!! Form::text('dummy', null, ['class' => 'form-control']) !!}
				</div>
			@endif
			@if($question->answertype->id == 2)
				<fieldset class="large-12 columns">
		          	<legend>Uw antwoord</legend>
					@foreach($question->answeroptions as $answeroption)
						<div class="form-group large-12">
							<!-- Answer Form Input -->
							{!! Form::radio('answer', $answeroption->id, null, ['class' => 'field']) !!}	
							{!! Form::label('answer', $answeroption->answer) !!}
						</div>
					@endforeach
				</fieldset>
          	@endif
          	@if($question->answertype->id ==3)
				<fieldset class="large-12 columns">
		          	<legend>Uw antwoord</legend>
					@foreach($question->answeroptions as $answeroption)
						<div class="form-group large-12"">
							<!-- Answer Form Input -->
							{!! Form::checkbox('answer', $answeroption->id, null, ['class' => 'field']) !!}	
							{!! Form::label('answer', $answeroption->answer) !!}
						</div>
					@endforeach
				</fieldset>

          	@endif
			<ul>
			</ul>
			<a href=" {{ URL::route('questions.show', $question) }} " class="edit">Bewerk vraag</a>
		</li>
	@endforeach
	</ul>
	<ul class="questionables">
		<li class="questionable">
			<a href=" {{ URL::route('questions.createforquest', $quest) }} "> + voeg een vraag toe</a>
		</li>
	</ul>


</div>
@stop

@section('additional-scripts')
	<input type="hidden" id="token" value="{{ csrf_token() }}">

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
		$('.sortable').sortable().bind('sortupdate', function(e, ui) {
		var order = $('ul.sortable li').map(function(){
			console.log($(this).attr("id"));
        	return $(this).attr("id");
        }).get();
        $.post("{{ URL::route('questions.reorder') }}", { order: order });
		});

	</script>
@stop