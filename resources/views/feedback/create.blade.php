@extends('app')
@section('content')
<div class="container">
	{!! Form::open(['url' => 'feedback']) !!}
		@include('feedback/form', ['SubmitButton' => 'Send Feedback'])
	{!! Form::close() !!}

	@include('errors/listformerrors')	
	
</div>

@stop