@extends('app')

@section('content')
    <div class="container"> 

        <h2 style="text-align: center">
            {{ $notesheet->notesheet_id }}
        </h2>
        <a href = "{{ action('NotesheetController@edit', [$notesheet->id])}}" style="float:right">
                        <button type="button" class="btn btn-primary">
                            Edit
                        </button>
                    </a>
                    <br>
        <hr>



        

            <div class="container-fluid">
                <notesheet>
                <p><strong>Subject: </strong>{{ $notesheet->subject }}</p>
                <p><strong>Creator:</strong>{{ $notesheet->origin }}</p>
                <p><strong>Destination: </strong>{{ $notesheet->destination }}</p>
                <p><strong>Status: </strong>{{ $notesheet->status }}</p>
                <p><strong>Current Holder: </strong>{{ $notesheet->holder }}</p>
                <p><strong>Last Updated At: </strong>{{ $notesheet->updated_at }}</p>

            </div>

        
    </div>
@stop