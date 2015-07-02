@extends('app')

@section('content')
<div class="row">
<div class="col s10 offset-s1 m6 offset-m3 l4 offset-l4">
        <h5 class="header" style="text-align: center">
            {{ $thread->subject }}
        </h5>
        </div>
        @if($thread->reply == null)

        <div class="col s4 offset-s8">
        <a class="waves-effect waves-light btn" href = "{{ action('ThreadsController@edit', [$thread->id])}}" style="float:right">
                                                
                            Edit
                        
                        
                    </a>
                    </div> 
        @endif            
     



        

            <div class="col s8 offset-s2">
                <thread>
                <p><strong>Question:</strong>{{ $thread->question}}</p>
                {{-- <p><strong>Subject: </strong>{{ $thread->subject }}</p> --}}
                <p><strong>Creator:</strong>{{ $thread->origin }}</p>
                <p><strong>Destination: </strong>{{ $thread->destination }}</p>
                <p><strong>Answer: </strong>{{ $thread->reply }}</p>
                </thread>

            </div>

        
    </div>
@stop