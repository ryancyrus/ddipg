@extends('app')

@section('content')
<div class="row">
	{!! Form::model( $notesheet, ['method' => 'PATCH', 'class' => 'col s10 offset-s1 m6 offset-m3 l4 offset-l4', 'action' => ['NotesheetsController@update', $notesheet->id]]) !!}
        @include('nstrack/edit_form', ['SubmitButton' => 'Update Bottle'])


    {!! Form::close() !!}
    	@include('errors/listformerrors')
</div>    	
@stop