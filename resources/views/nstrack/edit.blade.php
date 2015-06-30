@extends('app')

@section('content')
	{!! Form::model( $notesheet, ['method' => 'PATCH', 'action' => ['NotesheetsController@update', $notesheet->id]]) !!}
        @include('nstrack/edit_form', ['SubmitButton' => 'Update Bottle'])


    {!! Form::close() !!}
    	@include('errors/listformerrors')
@stop