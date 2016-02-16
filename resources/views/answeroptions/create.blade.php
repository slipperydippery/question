@extends('layouts.master')

@section('content')
<div class="row">

	Create an answer for {{ $question->title }}

	{!! Form::open(['route' => 'answeroptions.store']) !!}
		@include('answeroptions.partials.form', ['submittext' => 'Add an answer option'])
	{!! Form::close() !!}

</div>
@stop