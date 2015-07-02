@extends('app')
@section('content')
<div class="row">
	{!! Form::open(['url' => 'events', 'class' => 'col s10 offset-s1 m6 offset-m3 l6 offset-l3']) !!}
		@include('events/form', ['SubmitButton' => 'Create Event'])
		@include('errors/listformerrors')	
		@include('diagtoasts/diagtost')
	{!! Form::close() !!}

	
	
</div>

@stop