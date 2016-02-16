@extends('layouts.master')

@section('content')
<div class="row">
    {!! Form::open([ 'route' => 'quests.store']) !!}
        @include('quests.partials.form', ['submittext' => 'Create new Quest'])
    {!! Form::close() !!}

</div>
@stop