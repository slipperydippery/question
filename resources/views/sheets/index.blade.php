@extends('layouts.master')

@section('content')
<div class="row">

	<h1>All the Answer Sheets</h1>
	<ul>
		@foreach($user->sheets as $sheet)
			<li>
				{{ $sheet->user->name }}<br />
				<a href=" {{ URL::route('users.sheets.show', [$user, $sheet]) }} ">
					{{ $sheet->quest->title }}
				</a>
				Questions: {{ $sheet->quest->questions->count() }}
				Answers: {{ $sheet->answers->count() }}
				Answered: {{ $sheet->answers->where('answered','=' , true)->count() }}
			</li>
		@endforeach
	</ul>

</div>
@stop