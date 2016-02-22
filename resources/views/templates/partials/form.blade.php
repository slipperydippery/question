<!-- Title Form Input -->
<div class="form-group">
	{!! Form::label('title', 'Template Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Form Input -->
<div class="form-group">
	{!! Form::label('description', 'Description:') !!}
	{!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Add Submit Field -->
<div class="form-group">
    {!! Form::submit($submittext, ['class' => 'button form-control']) !!}
</div>



