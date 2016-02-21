@extends('layouts.master')

@section('content')
<div class="row">

	<h1>All Question Templates</h1>
	@foreach($templates as $template)
		<div>
			<a href=" {{ URL::route('templates.show', $template) }} "> {{$template->title}}</a>
		</div>
	@endforeach

	<a href=" {{ URL::route('templates.create') }} ">Add a new template</a>

</div>
@stop