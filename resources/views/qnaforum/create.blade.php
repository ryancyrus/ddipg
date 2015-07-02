@extends('app')

@section('content')
	<div class="row">
		

	    {!! Form::open(['url' => 'qnaforum', 'class' => 'col s10 offset-s1 m8 offset-m2 l6 offset-l3']) !!}
	    	@include('qnaforum/form', ['SubmitButton'=>"Create Query"])
	    	@include('errors/listformerrors')
	    {!! Form::close() !!}


	   	

   </div>
@stop    