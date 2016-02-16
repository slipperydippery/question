@extends('layouts.master')

@section('content')
<div class="row">

	<h1>Create a new Answer Type</h1>

	{!! Form::open(['route' => 'answertypes.store']) !!}
		@include('answertypes.partials.form', ['submittext' => 'Create new Answer Type'])
	{!! Form::close() !!}

</div>
@stop
