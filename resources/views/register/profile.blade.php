@extends('layouts.web-home')

@section('content')
<div class="container">
		<div class="bg-content">
			<div class="row register-content">
				<strong><center>Profile's Information</center></strong>
				<hr class="hr2">
			</div>
			<div class="clearfix"></div>
			<div class="row col-sm-offset-3 register-content5">
				<div class="clearfix"></div>
					<div class="col-sm-8">
						@include('flash::message')
					</div>
				<div class="clearfix"></div>
					<form role="form" method="POST" action="{{ url('/profile/'.$user->id.'/update') }}" enctype="multipart/form-data">
					{{ csrf_field() }}

						<div class="col-sm-4">
							<div class="form-group">
						        <center>
						        	<!-- Preview image --> 
									<label for="username">Profile</label>
									<div class="clearfix"></div>
						        	<label class="btn btn-default field" for="upload-file-selector">
							            <input id="upload-file-selector" type="file" data-image-preview="image-preview" name="photo_url" accept="image/*" class="image-preview-option hidden form-control">
							            
							        	@if(empty(Auth::user()->photo_url))
							        	<img class="oldImage img" src='{{ asset("/img/avatar.png") }}' alt="Preview image">
							        	@else
							        	<img class="oldImage img img-thumbnail" src='{{ asset("$user->photo_url") }}' alt="Preview image">
							        	@endif
							        	<img class="hide image-preview img img-thumbnail" src="#" alt="Preview image">
							            <div class="clearfix"></div>							           
							            <i class="fa fa-camera" aria-hidden="true"></i> Choose Image
							        </label>
						        </center>
		    				</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="username">User Name</label>
								<input id="textinput" name="username" type="text" @if(isset($user)) value="{!! $user->user_name !!}" title="{!! $user->user_name !!}" @endif class="form-control input-md field">
							</div>							
							<div class="form-group">
								<label for="username">First Name</label>
								<input id="textinput" name="firstname" type="text" @if(isset($user)) value="{!! $user->first_name !!}" title="{!! $user->first_name !!}" @endif class="form-control input-md field">
							</div>
							<div class="form-group">
								<label for="username">Last Name</label>
								<input id="textinput" name="lastname" type="text" @if(isset($user)) value="{!! $user->last_name !!}" title="{!! $user->last_name !!}" @endif class="form-control input-md field">
							</div>
							<!-- <div class="form-group">
								<input id="textinput" name="email" type="text" @if(isset($user)) value="{!! $user->email !!}" title="{!! $user->email !!}" @endif class="form-control input-md field">
							</div>
							<div class="form-group">
								<input id="textinput" name="password" type="password" @if(isset($user)) value="{!! $user->password !!}" title="{!! $user->password !!}" @endif class="form-control input-md field">
							</div> -->
							<div class="form-group">
								<label for="username">Phone Number</label>
								<input id="textinput" name="phone_number" type="text" @if(isset($user)) value="{!! $user->phone_number !!}" title="{!! $user->phone_number !!}" @endif class="form-control input-md field">
							</div>
						</div>
						<div class="clearfix"></div>

						<div class="form-group register-content2">
							<center>
								<div class="col-sm-8">		
									<hr class="hr2">
								</div>
								
							</center>
						</div>
						<div class="clearfix"></div>
						<div class="form-group">
							<div class="col-sm-4 register-content4">
								<input type="submit" name="submit" value="Update" class="form-control bg-button">
							</div>
							<div class="col-sm-4 register-content4">
								<input type="button" name="submit" value="Cancel" class="form-control bg-button">
							</div>
						</div>
					</form>
			<div class="clearfix register-content3"></div>
			</div>
		</div>
	</div>
@endsection