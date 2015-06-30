<div class="form-group">
	{!! Form::label('Subject') !!}
	{!! Form::text('subject', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Type') !!}
	<br>
	{!! Form::radio('type', 'Problem') !!}
	{!! Form::label('Problem') !!}

	{!! Form::radio('type', 'Suggestion') !!}
	{!! Form::label('Suggestion') !!}

	{!! Form::radio('type', 'Feedback') !!}
	{!! Form::label('Feedback') !!}
</div>

<div class="form-group">
	{!! Form::label('Description') !!}
	{!! Form::textarea('desc', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Email') !!}
	{!! Form::email('email',  null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($SubmitButton, ['class' => 'btn btn-primary form-control'])!!}
</div>