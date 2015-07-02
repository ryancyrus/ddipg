@extends('app')

@section('content')
<div class="row" >
	<div class="card col s10 offset-s1 m8 offset-m2 l6 offset-l3" id="card-form">
		
		<h2 class="header">Login</h2>
		<div class="row">

			<form class="col s12" role="form" method="POST" action="{{ url('/auth/login') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<div class="row">
					<div class="input-field col s12">
						<input id="email" name="email" type="email" class="validate">
						<label for="email">Email</label>

					</div>

				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" name="password" type="password">
						<label for="password">Password</label>

					</div>

				</div>
				
				{{-- Show Validation Errors --}}
				@if($errors->any())
					<ul class="collection"> 
					@foreach($errors->all() as $error)
						<li class="collection-item red-text">{{ $error }}</li>
					@endforeach
					</ul>
				@endif	
				<div class="row">
					
					<button class="btn waves-effect waves-light col s12" type="submit">Login<i class="material-icons right">send</i></button>
					
					
				</div>
			</form>
		</div>
		
	</div>
</div>
@endsection
