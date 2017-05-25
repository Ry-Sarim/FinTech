@extends('layouts.web-welcome')

@section('content')
<div class="container">
		<div class="bg-content">
		<div class="clearfix"></div>
			<div class="row register-content4">
				<div class="container">
				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				      <div class="item active">
				        <img src="{{ asset('/img/flower.jpg') }}" alt="Los Angeles" style="width:100%; height: 300px;">
				      </div>

				      <div class="item">
				        <img src="{{ asset('/img/mountant.jpg') }}" alt="Chicago" style="width:100%; height: 300px;">
				      </div>
				    
				      <div class="item">
				        <img src="{{ asset('/img/river.jpg') }}" alt="New york" style="width:100%; height: 300px;">
				      </div>
				    </div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
				</div>
			</div>
			<hr>		
			<div class="col-sm-4">
				<div class="form-group">
				    <div class="panel panel-default">
				      	<div class="panel-body">
				      		<a href="">
				      			<img class="panel-image" src="{{ asset('/img/river.jpg') }}" alt="New york">
				      		</a>
							<br><br><p class="panel-text">Trust Your Partner to Do More Trust Your Partner to Do More Trust Your Partner to Do More Trust Your Partner to Do More</p>
				      	</div>
				    </div>
				</div>
			</div>
			<div class="form-group col-sm-4">
				<div class="form-group">
				    <div class="panel panel-default">
				      	<div class="panel-body">
				      		<a href="">
				      			<img class="panel-image" src="{{ asset('/img/mountant.jpg') }}" alt="New york">
				      		</a>
							<br><br><p class="panel-text">Trust Your Partner to Do More Trust Your Partner to Do More Trust Your Partner to Do More Trust Your Partner to Do More</p>
				      	</div>
				    </div>
				</div>
			</div>
			<div class="form-group col-sm-4">
				<div class="form-group">
				    <div class="panel panel-default">
				      	<div class="panel-body">
				      		<a href="">
				      			<img class="panel-image" src="{{ asset('/img/flower.jpg') }}" alt="New york">
				      		</a>
							<br><br><p class="panel-text">Trust Your Partner to Do More Trust Your Partner to Do More Trust Your Partner to Do More Trust Your Partner to Do More</p>
				      	</div>
				    </div>
				</div>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="row" style="padding-right: 1px; padding-left: 1px;">
				<center>
					<div class="col-sm-6">
						<div class="form-group">
							<strong>Phnom Penh Institute of Technology Technology Technology
							</strong>
						</div>						
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<img style="height: 80px; width: 80px;" src="{{ asset('/img/flower.jpg') }}">
						</div>
					</div>
				</center>
			</div>
			<div class="clearfix"></div>
			<hr>
			<hr>	
			<div class="row">
				<center>
					<div class="col-sm-6">
						<div class="form-group">
							<img style="height: 80px; width: 80px;" src="{{ asset('/img/flower.jpg') }}">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<strong>Phnom Penh Institute of TechnologyPhnom Penh Institute of Technology</strong>
						</div>						
					</div>
				</center>
			</div>
			<div class="clearfix"></div>
			<hr>
			<hr>
			<div class="row">
				<center>
					<div class="col-sm-6">
						<div class="form-group">
							<strong>Phnom Penh Institute of TechnologyPhnom Penh Institute of Technology</strong>
						</div>						
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<img style="height: 80px; width: 80px;" src="{{ asset('/img/flower.jpg') }}">
						</div>
					</div>
				</center>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection