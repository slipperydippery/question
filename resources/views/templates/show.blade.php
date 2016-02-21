@extends('layouts.master')

@section('content')
<div class="row">

	<h1>{{ $template->title }}</h1>

	<span> {{ $template->clarification }} </span>

	<ul class="sortable questionables">
	@foreach($template->questions as $question)
		<li class="handle questionable" id="{{ $question->id }}">
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

	<a href=" {{ URL::route('questions.createfortemplate', $template) }} ">Add a new question</a>

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