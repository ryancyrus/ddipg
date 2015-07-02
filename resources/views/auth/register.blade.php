@extends('app')
@section('content')
<div class="row">
	<div class="card col s10 offset-s1 m6 offset-m3 l4 offset-l4" id="card-form">
		<h2 class="header">Register</h2>
		<div class="row">
			<form class="col s12" role="form" method="POST" action="{{ url('/auth/register') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="input-field col s12">
						<input id="name" type="text" name="name">
						<label for="name">Name</label>							
					</div>						 
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="identif" type="text" name="identif" length="12" >
						<label for="identif">Identification No.</label>

					</div>

				</div>
				<div class="row">
					<div class="input-field col s12">

						
							<label>Type</label><br>
							<p>
								<input name='type' type="radio" id="user_type1" value="Student">
								<label for="user_type1">Student</label>
							</p>
							<p>
								<input name='type' type="radio" id = "user_type2" value="Facutly">
								<label for="user_type2">Faculty</label>
							</p>
						

					</div>

				</div>

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
				<div class="row">
					<div class="input-field col s12">
						<input id="password" name="password_confirmation" type="password">
						<label for="password"> Confirm Password</label>

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
					
					<button class="btn waves-effect waves-light col s12" type="submit">Register<i class="material-icons right">send</i></button>
					
					
				</div>
			</form>
		</div>
	</div>
</div>
@endsection