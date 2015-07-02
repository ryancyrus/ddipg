@extends('app')

@section('content')
	<div class="row">
	{!! Form::model( $thread, ['method' => 'PATCH', 'class' => 'col s10 offset-s1 m8 offset-m2 l6 offset-l3', 'action' => ['ThreadsController@update', $thread->id]]) !!}
        @include('qnaforum/edit_form', ['SubmitButton' => 'Update Query'])


    {!! Form::close() !!}
    	@include('errors/listformerrors')
   </div> 	
@stop