@extends('app')

@section('content')
	{!! Form::model( $thread, ['method' => 'PATCH', 'action' => ['ThreadsController@update', $thread->id]]) !!}
        @include('qnaforum/edit_form_reply', ['SubmitButton' => 'Reply Query'])


    {!! Form::close() !!}
    	@include('errors/listformerrors')
@stop