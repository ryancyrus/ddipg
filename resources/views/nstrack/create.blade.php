@extends('app')

@section('content')
	<div class="row">
		

	    {!! Form::open(['url' => 'nstrack', 'class' => 'col s10 offset-s1 m6 offset-m3 l4 offset-l4']) !!}
	    	@include('nstrack/form', ['SubmitButton'=>"Create Bottle"])
	    	@include('errors/listformerrors')
	    {!! Form::close() !!}


	   	

   </div>
@stop    