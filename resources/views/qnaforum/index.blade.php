@extends('app')

@section('content')
	{{-- <h2>Threads</h2> --}}
    <div class ="table-responsive">
        <table class="table">
            <caption style='text-align: center'><h3>QnA</h3></caption>
            <div class="btn-toolbar" role="toolbar" style='float:right'>
                <div class="btn-group">
                    <a href = "{{ action('ThreadsController@index')}}">
                        <button type="button" class="btn btn-default">                      
                            All
                        </button>
                    </a>

                    
                    <a href = "{{ action('ThreadsController@receive')}}">
                        <button type="button" class="btn btn-default">                      
                            @if(Auth::user()->type == 'Faculty')
                                Yet To Reply
                            @elseif(Auth::user()->type == 'Student')
                                Reply Awaited
                            @endif    
                        </button>
                    </a>                    
                    
                    @if(Auth::user()->type == 'Student')

                        <a href = "{{ action('ThreadsController@create')}}" >
                            <button type="button" class="btn btn-primary">
                                Ask
                            </button>
                        </a>
                    @endif 
                    
                </div>
            </div>
            <thead style="background-color:#ff5252; color:#ffffff">

                <tr>
                    {{-- <td>Thread ID</td> --}}
                    <td>Question</td>
                    <td>Subject</td>

                    @if(Auth::user()->type == 'Faculty')                    
                        <td>Inquirer</td>
                    @elseif(Auth::user()->type == 'Student')
                        <td>Respondant</td>
                                        
                    @endif
                    
                    <td>Reply</td>
                    
                </tr>
            </thead>
        @foreach($threads as $thread)
            
            <thread>
                
                <tbody>
                    <tr>
                        {{-- <td><a href="{{ action('ThreadsController@show', [$thread->id]) }}">{{ $thread->id }}</a></td> --}}
                        <td><a href="{{ action('ThreadsController@show', [$thread->id]) }}">{{ $thread->question}}</a></td>
                        <td>{{ $thread->subject }}</td>

                        @if(Auth::user()->type == 'Faculty')                        
                            <td>{{ $thread->origin }}</td>
                        @elseif(Auth::user()->type == 'Student')
                            <td>{{ $thread->destination }}</td>
                        
                        @endif

                        <td>{{ $thread->reply }}</td>
                        
                    </tr>
                </tbody>

            </thread>
            
        @endforeach
        </table>
    </div>
@stop