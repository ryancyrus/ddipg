@extends('app')

@section('content')
	<table class="responsive-table striped centered">
            <caption style='text-align: center'><h3 class="header">Notesheets</h3></caption>
            <div style='float:right'>
                
                    <a  class="waves-effect waves-light btn" href = "{{ action('NotesheetsController@index')}}">
                        {{-- <button type="button" class="btn btn-default">                       --}}
                            All
                        {{-- </button> --}}
                    </a>

                    <a class="waves-effect waves-light btn" href = "{{ action('NotesheetsController@sent')}}">
                        {{-- <button type="button" class="btn btn-default">                       --}}
                            Sent
                        {{-- </button> --}}
                    </a>

                    <a class="waves-effect waves-light btn" href = "{{ action('NotesheetsController@receive')}}">
                        {{-- <button type="button" class="btn btn-default">                       --}}
                            Receive
                        {{-- </button> --}}
                    </a>                    
                    
                    <a class="waves-effect waves-light btn" href = "{{ action('NotesheetsController@create')}}" >
                        {{-- <button type="button" class="btn btn-primary"> --}}
                            Create
                        {{-- </button> --}}
                    </a>
                    
            </div>
            <thead>

                <tr>
                    <th>Notesheet ID</th>
                    <th>Created At</th>
                    <th>Subject</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Status</th>
                    <th>Holder</th>
                    <th>Updated At</th>
                </tr>
            </thead>
        {{-- @foreach($notesheets as $notesheet) --}}
            
            {{-- <notesheet> --}}
                
                <tbody>
                    @foreach($notesheets as $notesheet)
            
                        <notesheet>
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

                         </notesheet>
            
                    @endforeach
                </tbody>

            {{-- </notesheet>
            
        @endforeach --}}
     </table>
    
@stop