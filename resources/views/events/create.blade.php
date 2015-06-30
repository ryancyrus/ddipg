@extends('app')
@section('content')
<div class="container">
	{!! Form::open(['url' => 'events']) !!}
		@include('events/form', ['SubmitButton' => 'Create Event'])
	{!! Form::close() !!}

	@include('errors/listformerrors')	
	
</div>

@stop