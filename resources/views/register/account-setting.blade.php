@extends('layouts.web-home')

@section('content')
<div class="container">
		<div class="bg-content">
			<div class="row register-content">
				<strong><center>Setting Account</center></strong>
				<hr class="hr2">
			</div>
			<div class="clearfix"></div>
			<div class="row col-sm-offset-3 register-content5">
				<div class="clearfix"></div>
					<div class="col-sm-8">
						@include('flash::message')
					</div>
				<div class="clearfix"></div>
					<form role="form" method="POST" action="{{ url('/account/'.$user->id.'/update') }}">
					{{ csrf_field() }}					
						<div class="form-group">						
                        	<label for="email" class="control-label col-sm-4" ">E-mail address</label>                          
							<div class="col-sm-4 form-group">	
								<input id="textinput" name="email" type="text" @if(isset($user)) value="{!! $user->email !!}" title="{!! $user->email !!}" @endif class="form-control input-md field">
							</div>
						</div>

						<!-- <div class="form-group">
							<input id="textinput" name="password" type="password" @if(isset($user)) value="{!! $user->password !!}" title="{!! $user->password !!}" @endif class="form-control input-md field">
						</div> -->

						<div class="clearfix"></div>
						<div class="form-group">
                        	<label for="password" class="control-label col-sm-4">New Password</label>
							<div class="col-sm-4 form-group">
								<input id="textinput" name="password" type="password" class="form-control input-md field">
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="form-group">
                        	<label for="password-confirm" class="control-label col-sm-4">Confirm New Password</label>
							<div class="col-sm-4 form-group">
								<input id="password-confirm" type="password" class="form-control input-md field" name="password_confirmation">
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