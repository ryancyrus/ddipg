@extends('app')
@section('content')
	<div class="row">
			<h3>Events</h3>
			{{-- <ul class="collection"> --}}
			@foreach($events as $event)
				<event>
					
						<div class="card-panel">
							<h3>{{ $event->event_name}}</h3>
							<h5>Event Type:</h5>
							<p>{{ $event->event_type}}</p>
							<h5>Event Date:</h5>
							<p>{{ $event->event_date}}</p>
							<h5>Event Description:</h5>
							<p>{{ $event->event_desc}}</p>
						</div>

				
				</event>
			@endforeach
			{{-- </ul> --}}
		
		
	</div>

@stop