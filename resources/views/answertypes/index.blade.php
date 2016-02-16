@extends('layouts.master')

@section('content')
<div class="row">

	<h1>The current Answer Types</h1>
	<ul>
	@foreach($answertypes as $answertype)
		<li>
			<ul>
				<li>
					{!! $answertype->name !!}
				</li>
				<li>
					{!! $answertype->comment !!}
				</li>
				<li>
					{!! Form::open(['route' => ['answertypes.destroy', $answertype->id], 'method' => 'delete']) !!}

						<!-- Add Submit Field -->
						    <div class="form-group">
						        {!! Form::submit('Delete this answer', ['class' => 'btn form-control']) !!}
						    </div>    
					{!! Form::close() !!}


				</li>
			</ul>
		</li>
	@endforeach
		<li>
			<a href="{!! URL::route('answertypes.create') !!}">
				Create a new Answertype
			</a>
	</ul>

</div>
@stop
