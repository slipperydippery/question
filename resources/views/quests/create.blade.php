@extends('layouts.master')

@section('content')

    {!! Form::open([ 'route' => 'quests.store']) !!}
        <!-- Title Form Input -->
        <div class="form-group">
        	{!! Form::label('title', 'Title:') !!}
        	{!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Description Form Input -->
        <div class="form-group">
        	{!! Form::label('description', 'Description:') !!}
        	{!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Create Questionnaire Submit Field -->
        <div class="form-group">
            {!! Form::submit('Create Questionnaire', ['class' => 'btn form-control']) !!}
        </div>
    {!! Form::close() !!}


@stop