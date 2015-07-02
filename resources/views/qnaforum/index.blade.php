@extends('app')

@section('content')

        <table class="responsive-table">
            <caption style='text-align: center'><h3 class="header">QnA</h3></caption>
            <div style='float:right'>
                {{-- <div class="btn-group"> --}}
                    <a class="waves-effect waves-light btn" href = "{{ action('ThreadsController@index')}}">
                        {{-- <button type="button" class="btn btn-default">                       --}}
                            All
                        {{-- </button> --}}
                    </a>

                    
                    <a class="waves-effect waves-light btn" href = "{{ action('ThreadsController@receive')}}">
                        {{-- <button type="button" class="btn btn-default">                       --}}
                            @if(Auth::user()->type == 'Faculty')
                                Yet To Reply
                            @elseif(Auth::user()->type == 'Student')
                                Reply Awaited
                            @endif    
                        {{-- </button> --}}
                    </a>                    
                    
                    @if(Auth::user()->type == 'Student')

                        <a class="waves-effect waves-light btn" href = "{{ action('ThreadsController@create')}}" >
                            {{-- <button type="button" class="btn btn-primary"> --}}
                                Ask
                            {{-- </button> --}}
                        </a>
                    @endif 
                    
                {{-- </div> --}}
            </div>
            <thead>

                <tr>
                    {{-- <td>Thread ID</td> --}}
                    <th>Question</th>
                    <th>Subject</th>

                    @if(Auth::user()->type == 'Faculty')                    
                        <th>Inquirer</th>
                    @elseif(Auth::user()->type == 'Student')
                        <th>Respondant</th>
                                        
                    @endif
                    
                    <th>Reply</th>
                    
                </tr>
            </thead>
        
                
                <tbody>
                    @foreach($threads as $thread)
            
            <thread>
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
                    </thread>
            
        @endforeach
                </tbody>

            
        </table>
    
@stop