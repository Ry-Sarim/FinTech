@extends('layouts.web')

@section('content')
<div class="container">
		<div class="bg-content">
			<div class="row register-content">
				<strong><center>Invitation to New Term</center></strong>
				<hr class="hr2">
			</div>
			<div class="clearfix"></div>
			<div class="row col-sm-offset-3">
				<div class="col-sm-8">
					<ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#all" class="btn3">All</a></li>
						<li><a data-toggle="pill" href="#elite" class="btn3">Elite</a></li>
					</ul>
				</div>
			</div>
			<div class="tab-content">
				<div id="all" class="tab-pane fade in active">
					<form>
					{{ csrf_field() }}
						<div class="row col-sm-offset-3 register-content1">
							<center>
								<div class="col-sm-4">
									<div class="form-group">
										<input id="textinput" name="username" type="text" value="Title" title="Title"  class="form-control field">
									</div>							
									<div class="form-group">
										<input id="textinput" name="email" type="text" value="Amount of Funding" title="Amount of Funding"  class="form-control field">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input id="textinput" name="firstname" type="text" value="Start Date" title="Start Date"  class="form-control field">
									</div>
									<div class="form-group">
										<input id="textinput" name="email" type="text" value="Number of Allowance" title="Number of Allowance"  class="form-control field">
									</div>
								</div>
							</center>
						</div>
						<div class="clearfix"></div>
						<div class="row col-sm-offset-3">
							<center>
								<div class="col-sm-8">		
									<div class="form-group">
										<input id="textinput" name="email" type="text" value="invitation list" title="invitation list"  class="form-control field">
									</div>
								</div>						
							</center>
						</div>
						<div class="clearfix"></div>
						<div class="row register-content2 col-sm-offset-3">
							<center>
								<div class="col-sm-8">		
									<hr class="hr2">
								</div>
								
							</center>
						</div>
						<div class="row col-sm-offset-3 ">
							<div class="col-sm-4 register-content4">
								<input type="submit" name="submit" value="Invite" class="form-control bg-button">
							</div>
							<div class="col-sm-4 register-content4">
								<input type="submit" name="submit" value="Cancel" class="form-control bg-button">
							</div>
						</div>
					</form>
				</div>
				<div id="elite" class="tab-pane fade">
					<form>
					{{ csrf_field() }}
						<div class="row col-sm-offset-3 register-content1">
							<center>
								<div class="col-sm-4">
									<div class="form-group">
										<input id="textinput" name="username" type="text" value="Title" title="Title"  class="form-control field">
									</div>							
									<div class="form-group">
										<input id="textinput" name="email" type="text" value="Amount of Funding" title="Amount of Funding"  class="form-control field">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input id="textinput" name="firstname" type="text" value="Start Date" title="Start Date"  class="form-control field">
									</div>
									<div class="form-group">
										<input id="textinput" name="email" type="text" value="Number of Allowance" title="Number of Allowance"  class="form-control field">
									</div>
								</div>
							</center>
						</div>
						<div class="clearfix"></div>
						<div class="row col-sm-offset-3">
							<center>
								<div class="col-sm-8">		
									<div class="form-group">
										<input id="textinput" name="email" type="text" value="invitation list" title="invitation list"  class="form-control field">
									</div>
								</div>						
							</center>
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix register-content3"></div>
		</div>
	</div>
@endsection