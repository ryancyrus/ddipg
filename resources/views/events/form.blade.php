<div class="form-group">
	{!! Form::label('Event Name') !!}
	{!! Form::text('event_name', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Event Type') !!}
	{!! Form::text('event_type', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Event Description') !!}
	{!! Form::textarea('event_desc', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Event Date') !!}
	{!! Form::input('date', 'event_date', date('Y-m-d'), ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($SubmitButton, ['class' => 'btn btn-primary form-control'])!!}
</div>