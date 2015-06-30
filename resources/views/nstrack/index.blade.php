@extends('app')

@section('content')
	{{-- <h2>Notesheets</h2> --}}
    <div class ="table-responsive">
        <table class="table">
            <caption style='text-align: center'><h3>Notesheets</h3></caption>
            <div class="btn-toolbar" role="toolbar" style='float:right'>
                <div class="btn-group">
                    <a href = "{{ action('NotesheetsController@index')}}">
                        <button type="button" class="btn btn-default">                      
                            All
                        </button>
                    </a>

                    <a href = "{{ action('NotesheetsController@sent')}}">
                        <button type="button" class="btn btn-default">                      
                            Sent
                        </button>
                    </a>

                    <a href = "{{ action('NotesheetsController@receive')}}">
                        <button type="button" class="btn btn-default">                      
                            Receive
                        </button>
                    </a>                    
                    
                    <a href = "{{ action('NotesheetsController@create')}}" >
                        <button type="button" class="btn btn-primary">
                            Create
                        </button>
                    </a>
                    
                </div>
            </div>
            <thead style="background-color:#ff5252; color:#ffffff">

                <tr>
                    <td>Notesheet ID</td>
                    <td>Created At</td>
                    <td>Subject</td>
                    <td>Origin</td>
                    <td>Destination</td>
                    <td>Status</td>
                    <td>Holder</td>
                    <td>Updated At</td>
                </tr>
            </thead>
        @foreach($notesheets as $notesheet)
            
            <notesheet>
                
                <tbody>
                    <tr>
                        <td><a href="{{ action('NotesheetsController@show', [$notesheet->id]) }}">{{ $notesheet->notesheet_id }}</a></td>
                        <td>{{ $notesheet->created_at }}</td>
                        <td>{{ $notesheet->subject }}</td>
                        <td>{{ $notesheet->origin }}</td>
                        <td>{{ $notesheet->destination }}</td>
                        <td>{{ $notesheet->status }}</td>
                        <td>{{ $notesheet->holder }}</td>
                        <td>{{ $notesheet->updated_at }}</td>
                    </tr>
                </tbody>

            </notesheet>
            
        @endforeach
        </table>
    </div>
@stop