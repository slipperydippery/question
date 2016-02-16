@extends('layouts.master')

@section('content')
<div class="row">
	{!! Form::model($quest, ['method' => 'PATCH', 'route' => ['quests.update' , $quest->id]]) !!}
		@include('quests.partials.form', ['submittext' => 'Update Title Fields'])
	{!! Form::close() !!}
</div>
@stop