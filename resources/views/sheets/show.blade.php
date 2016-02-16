@extends('layouts.master')

@section('content')
<div class="row">

	<h1>{{ $sheet->quest->title }}</h1>

	<h3>list all the questions</h3>
	@foreach($sheet->quest->questions as $question)
		{{ $question->question }}<br />
	@endforeach

</div>
@stop