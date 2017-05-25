@extends('layouts.web')

@section('content')
<div class="container">
		<div class="bg-content">
			<div class="row register-content">
				<strong><center>Member's Registration</center></strong>
				<hr class="hr2">
			</div>
			<div class="clearfix"></div>
			<div class="row col-sm-offset-3 register-content5">
				<center>
					<form>
					{{ csrf_field() }}
						<div class="col-sm-4">
							<div class="form-group">
						        <!-- Preview image --> 
		    					<input type="file" class="image-preview-option field form-control" data-image-preview="image-preview" name="image" accept="image/*">
		    					<img class="hide image-preview img" src="#" alt="Preview image" >
		    				</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input id="textinput" name="username" type="text" value="Username" title="Username"  class="form-control input-md field">
							</div>							
							<div class="form-group">
								<input id="textinput" name="firstname" type="text" value="First name" title="First name"  class="form-control input-md field">
							</div>
							<div class="form-group">
								<input id="textinput" name="lastname" type="text" value="Last name" title="Last name"  class="form-control input-md field">
							</div>
							<div class="form-group">
								<input id="textinput" name="email" type="text" value="E-mail address" title="E-mail address"  class="form-control input-md field">
							</div>
							<div class="form-group">
								<input id="textinput" name="password" type="text" value="Password" title="Password"  class="form-control input-md field">
							</div>
							<div class="form-group">
								<a type="submit" name="submit" class="btn btn-block btn-social btn-facebook">
							    	<span class="fa fa-registered"></span>Register Me In
							  	</a>
								<!-- <input   value="Register Me In" class="bg-button btn-primary form-control"> -->
							</div>
						</div>
					</form>
				</center>
			</div>
			<div class="clearfix"></div>
			<div class="row register-content2 col-sm-offset-3">
				<center>
					<div class="col-sm-8">		
						<strong>OR</strong>
						<hr class="hr2">
					</div>
					
				</center>
			</div>
			<div class="row col-sm-offset-3 ">
				<div class="col-sm-4 register-content4">
					<a class="btn btn-block btn-social btn-facebook">
				    	<span class="fa fa-facebook"></span> Sign in with Facebook
				  	</a>
				</div>
				<div class="col-sm-4 register-content4">
					<a class="btn btn-block btn-social btn-facebook">
				    	<span class="fa fa-google"></span> Sign in with Google
				  	</a>
				</div>
			</div>
			<div class="clearfix register-content3"></div>
		</div>
	</div>
@endsection