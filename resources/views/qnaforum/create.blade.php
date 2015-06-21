@extends('app')

@section('content')
	<div class="container">
		

	    {!! Form::open(['url' => 'nstrack']) !!}
	    	@include('nstrack/form', ['SubmitButton'=>"Create Bottle"])
	    {!! Form::close() !!}


	   	@include('errors/listformerrors')

   </div>
@stop    