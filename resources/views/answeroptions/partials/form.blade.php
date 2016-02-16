<!-- Answer Form Input -->
<div class="form-group">
	{!! Form::label('answer', 'Answer:') !!}
	{!! Form::text('answer', null, ['class' => 'form-control']) !!}
</div>

<!-- Clarification Form Input -->
<div class="form-group">
	{!! Form::label('clarification', 'Clarification:') !!}
	{!! Form::text('clarification', null, ['class' => 'form-control']) !!}
</div>

<!-- Hidden question_id Type Form Input -->
{!! Form::hidden('question_id', $question->id, null) !!}

<!-- Add Submit Field -->
<div class="form-group">
    {!! Form::submit($submittext, ['class' => 'btn form-control']) !!}
</div>