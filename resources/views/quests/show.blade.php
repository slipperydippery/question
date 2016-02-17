@extends('layouts.master')

@section('content')
<div class="row">


	<h1 class="header">{{ $quest->title }}</h1>
	<h3><i>{{  $quest->description }}</i></h3>
	<a href=" {{ URL::route('quests.edit', $quest) }} ">edit title</a>

	<ul class="questions sortable" id="sortable">
	@foreach($quest->questions as $key => $question)
		<li class="question handle" id="{{ $question->id }}">
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
		
		</li>
	@endforeach
	</ul>
	<ul class="questions">
		<li class="question">
			<a href=" {{ URL::route('questions.createforquest', $quest) }} ">add a question</a>
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
        console.log(order);
        $.post("{{ URL::route('questions.reorder', $question->id) }}", { order: order });
        console.log('2');
		});

	</script>
@stop