<!-- Question Form Input -->
<div class="form-group">
	{!! Form::label('question', 'Question:') !!}
	{!! Form::text('question', null, ['class' => 'form-control']) !!}
</div>

<!-- clarification Form Input -->
<div class="form-group">
	{!! Form::label('clarification', 'clarification:') !!}
	{!! Form::text('clarification', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Type Form Input -->
<div class="form-group">
    {!! Form::label('answertype_id', 'Answer Type:') !!}
    {!! Form::select('answertype_id', $answertypes, null, ['class' => 'form-control']) !!}
</div>

<!-- Hidden quest_id Type Form Input -->
{!! Form::hidden('quest_id', $quest->id, null) !!}

<!-- Hidden 'template_id' Type Form Input -->
{!! Form::hidden('template_id', null, null) !!}



<!-- Add Submit Field -->
<div class="form-group">
    {!! Form::submit($submittext, ['class' => 'btn form-control']) !!}
</div>



