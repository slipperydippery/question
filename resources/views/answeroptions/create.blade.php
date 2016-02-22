@extends('layouts.master')

@section('content')
<div class="row">

	Creeer een antwoord voor <i>{{ $question->question }}</i>

	{!! Form::open(['route' => 'answeroptions.store']) !!}
		@include('answeroptions.partials.form', ['submittext' => 'Voeg antwoord toe'])
	{!! Form::close() !!}

</div>
@stop