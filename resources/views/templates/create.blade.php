@extends('layouts.master')

@section('content')
<div class="row">

	<h1>Create a new Question Template</h1>

	{!! Form::open(['route' => 'templates.store']) !!}
		@include('templates.partials.form', ['submittext' => 'Create new template'])
	{!! Form::close() !!}

</div>
@stop