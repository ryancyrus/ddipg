@extends('app')

@section('content')
	<div class="container">
		

	    {!! Form::open(['url' => 'qnaforum']) !!}
	    	@include('qnaforum/form', ['SubmitButton'=>"Create Query"])
	    {!! Form::close() !!}


	   	@include('errors/listformerrors')

   </div>
@stop    