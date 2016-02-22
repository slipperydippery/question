<!-- Name Form Input -->
<div class="form-group">
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Comment Form Input -->
<div class="form-group">
	{!! Form::label('comment', 'Comment:') !!}
	{!! Form::text('comment', null, ['class' => 'form-control']) !!}
</div>

<!-- Add Submit Field -->
<div class="form-group">
    {!! Form::submit($submittext, ['class' => 'button form-control']) !!}
</div>