@extends('front.layout.layout')

@section('content')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="{{route('home')}}">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	
	<div class="well">
		@if($errors->any()) 
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
        </div>
		@endif
    <form class="form-horizontal" method="post" action="{{route('loginCheck')}}">
		@csrf
		<div class="control-group">
		<label class="control-label">Email <sup>*</sup></label>
		<div class="controls">
        <input type="text" id="email" placeholder="Email" name="email">
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="password">Password <sup>*</sup></label>
			<div class="controls">
			  <input type="password" id="password" placeholder="******" name="password">
			</div>
		 </div>
		 
	<div class="control-group">
			<div class="controls">
				<input type="submit" value="Login" class="btn btn-success"/>
			</div>
		</div>		
	</form>
</div>

<h3>Registration</h3>	
	<div class="well">
    <form class="form-horizontal" method="post" action="{{route('user_store')}}">
        @csrf
		<div class="control-group">
		<label class="control-label" for="firstname">First Name <sup>*</sup></label>
		<div class="controls">
        <input type="text" id="firstname" placeholder="Firstname" name="firstname" required="">
		</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="lastname">Last Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="lastname" placeholder="Lastname" name="lastname" required="">
			</div>
		 </div>

         <div class="control-group">
		<label class="control-label">Email <sup>*</sup></label>
		<div class="controls">
        <input type="text" id="email" placeholder="Email" name="email" required="">
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="password">Password <sup>*</sup></label>
			<div class="controls">
			  <input type="password" id="password" name="password" placeholder="******" required="">
			</div>
		 </div>
		 
	<div class="control-group">
			<div class="controls">
				<input type="submit" value="Register" class="btn btn-success"/>
			</div>
		</div>		
	</form>
</div>
</div>
@endsection