<div class="row"><div class="input-field col s12">
	{!! Form::label('Subject') !!}
	{!! Form::text('subject', null ) !!}
</div></div>

<div class="row"><div class="input-field col s12">
	{!! Form::label('type','Type') !!}
	<br>

	<p>
								<input name='type' type="radio" id="type1" value="Suggestion">
								<label for="type1">Suggestion</label>
							</p>
							<p>
								<input name='type' type="radio" id = "type2" value="Complaint">
								<label for="type2">Complaint</label>
							</p>
							<p>
								<input name='type' type="radio" id = "type3" value="Feedback">
								<label for="type3">Feedback</label>
							</p>
</div></div>

<div class="row"><div class="input-field col s12">
	{!! Form::label('Description') !!}
	{!! Form::textarea('desc', null, ['class' => 'materialize-textarea']) !!}
</div></div>

<div class="row"><div class="input-field col s12">
	{!! Form::label('Email') !!}
	{!! Form::email('email',  null, ['class' => 'validate']) !!}
</div></div>

<div class="row"><div class="input-field col s12">
	{!! Form::submit($SubmitButton, ['class' => 'btn'])!!}
</div></div>