@extends('app')

@section('content')
    <div class="container"> 

        <h2 style="text-align: center">
            {{ $thread->thread_id }}
        </h2>
        <a href = "{{ action('ThreadsController@edit', [$thread->id])}}" style="float:right">
                        @if($thread->reply == null)
                        <button type="button" class="btn btn-primary">
                            Edit
                        </button>
                        @endif
                    </a>
                    <br>
        <hr>



        

            <div class="container-fluid">
                <thread>
                <p><strong>Question:</strong>{{ $thread->question}}</p>
                <p><strong>Subject: </strong>{{ $thread->subject }}</p>
                <p><strong>Creator:</strong>{{ $thread->origin }}</p>
                <p><strong>Destination: </strong>{{ $thread->destination }}</p>
                <p><strong>Answer: </strong>{{ $thread->reply }}</p>
                

            </div>

        
    </div>
@stop