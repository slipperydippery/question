@extends('layouts.master')

@section('content')
<div class="row">

	{!! Form::open(['route' => ['questions.store', $quest]]) !!}
		@include('questions.partials.form', ['submittext' => 'Create a new Question'])		
	{!! Form::close() !!}

</div>	
@stop