<!-- Question Form Input -->
<div class="form-group">
	{!! Form::label('question', 'Vraag:') !!}
	{!! Form::text('question', null, ['class' => 'form-control']) !!}
</div>

<!-- clarification Form Input -->
<div class="form-group">
	{!! Form::label('clarification', 'toelichting:') !!}
	{!! Form::text('clarification', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Type Form Input -->
<div class="form-group">
    {!! Form::label('answertype_id', 'Type Antwoord:') !!}
    {!! Form::select('answertype_id', $answertypes, null, ['class' => 'form-control']) !!}
</div>


<!-- Hidden questionable_id Type Form Input -->
{!! Form::hidden('questionable_id', $questionable_id, null) !!}

<!-- Hidden questionable_type Type Form Input -->
{!! Form::hidden('questionable_type', $questionable_type, null) !!}

<!-- Hidden 'template_id' Type Form Input -->
{!! Form::hidden('template_id', null, null) !!}



<!-- Add Submit Field -->
<div class="form-group">
    {!! Form::submit($submittext, ['class' => 'button form-control']) !!}
</div>



