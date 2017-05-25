@extends('layouts.web')

@section('content')
<div class="container">
		<div class="bg-content">
			<div class="row register-content">
				<strong><center>Making a New Term</center></strong>
				<hr class="hr2">
			</div>
			<div class="clearfix"></div>
			<form>
			{{ csrf_field() }}
				<div class="row col-sm-offset-3 register-content5">
					<center>
						<div class="col-sm-4">
							<div class="form-group">
								<input id="textinput" name="date" type="text" value="Title" title="Title"  class="form-control  field">
							</div>							
							<div class="form-group">
								<input name="start-date" type="text" value="Start Date" title="Start Date"  class="form-control  field datep">
							</div>
							<div class="form-group">
								<input id="textinput" name="lastname" type="text" value="Expected Duration" title="Expected Duration"  class="form-control  field">
							</div>
							<div class="form-group">
								<input id="textinput" name="email" type="text" value="Amount of Funding" title="Amount of Funding"  class="form-control  field">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input id="textinput" name="username" type="text" value="Description" title="Description"  class="form-control  field">
							</div>							
							<div class="form-group">
								<input name="end-date" type="text" value="End Date" title="End Date"  class="form-control  field datep">
							</div>
							<div class="form-group">
								<select name="cycling" class="form-control field">
									<option value="Daily">--- Cycling ---</option>
									<option value="Daily">Daily</option>
									<option value="Weekly">Weekly</option>
									<option value="Monthly">Monthly</option>
									<option value="Annually">Annually</option>
								</select>
							</div>
							<div class="form-group">
								<input id="textinput" name="email" type="text" value="Number of Allowance" title="Number of Allowance"  class="form-control  field">
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
						<input type="submit" name="submit" value="Create" class="form-control bg-button">
					</div>
					<div class="col-sm-4 register-content4">
						<input type="submit" name="submit" value="Cancel" class="form-control bg-button">
					</div>
				</div>
			</form>
			<div class="clearfix register-content3"></div>
		</div>
	</div>
@endsection