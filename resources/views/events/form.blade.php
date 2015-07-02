<div class="row"><div class="input-field col s12">
	{!! Form::label('Event Name') !!}
	{!! Form::text('event_name', null) !!}
</div></div>

<div class="row"><div class="input-field col s12">
	{!! Form::label('Event Type') !!}
	{!! Form::text('event_type', null) !!}
</div></div>

<div class="row"><div class="input-field col s12">
	{!! Form::label('Event Description') !!}
	{!! Form::textarea('event_desc', null, ['class' => 'materialize-textarea']) !!}
</div></div>

<div class="row"><div class="input-field col s12">
	{!! Form::label('Event Date') !!}
	{!! Form::input('date', 'event_date', date('d-m-Y'), ['class' => 'datepicker']) !!}
</div></div>

<div class="row"><div class="input-field col s12">
	{!! Form::submit($SubmitButton, ['class' => 'btn'])!!}
</div></div>