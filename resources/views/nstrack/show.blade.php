@extends('app')

@section('content')
<div class="row">
<div class="col s10 offset-s1 m6 offset-m3 l4 offset-l4"> 

       <h2 class="header"style="text-align: center">
        {{ $notesheet->notesheet_id }}
    </h2>
</div>

<div class="col s4 offset-s8">
    <a class="waves-effect waves-light btn" href = "{{ action('NotesheetsController@edit', [$notesheet->id])}}">
        {{-- <button type="button" class="btn btn-primary"> --}}
        Edit
        {{-- </button> --}}
    </a>
</div>            






<div class="col s8 offset-s2">
    <notesheet>
        <p><strong>Subject: </strong>{{ $notesheet->subject }}</p>
        <p><strong>Creator: </strong>{{ $notesheet->origin }}</p>
        <p><strong>Destination: </strong>{{ $notesheet->destination }}</p>
        <p><strong>Status: </strong>{{ $notesheet->status }}</p>
        <p><strong>Current Holder: </strong>{{ $notesheet->holder }}</p>
        <p><strong>Last Updated At: </strong>{{ $notesheet->updated_at }}</p>
    </notesheet>    
    </div>

</div>
@stop