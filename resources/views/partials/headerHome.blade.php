	
	<div class="container">
		<nav class="head1 navbar navbar-custom" role="navigation">
			<div class="navbar-header">
	            <img style="margin-top: 15px; margin-bottom: -33px; height: auto; width: 105px; padding-left: 25px;" src="{{ asset('/img/PPIT-logo.png') }}"><br>
	            <button  type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	        </div>
			<div style=" float:right; padding-top: 5px; padding-right: 10px;">
				<div class="collapse navbar-collapse pull-left" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav">
	                    <li>
	                        <a href="#" class="boder1"><button id="btn1" style="background-color: #bfbfbf;"><i class="fa fa-home" aria-hidden="true"></i> Home</button></a>                 
	                    </li>
	                    <li>
	  	                     <a href="#" class="boder1"><button id="btn1"><i class="fa fa-user-circle" aria-hidden="true"></i> Your Name</button></a>                      
	                    </li>
	                    <li>
	                    	<div class="dropdown" style="margin-top: 10px;">
							  <button class="dropdown-toggle" id="btn2" type="button" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i> Setting
							  <span class="caret"></span></button>
							  <ul class="dropdown-menu" style=" background-color: #4472C4; ">
							    <li><a href="{{ route('account') }}" style="color: white;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Account Setting</a></li>
							    <li><a href="{{ route('profile') }}" style="color: white;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Profile Setting</a></li>
							    <li class="divider"></li>
							    <li><a href="{{ url('logout') }}" style="color: white;"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
							  </ul>
							</div> 
	                    </li>
	                </ul>
	            </div>		
			</div>
			<div class="clearfix"></div>
			<div class="head2 navbar-collapse navbar-custom">
				<center>
					<br><strong class="head2-text">Rethinking Trust, Sharing Fund, Opportunities for Development</strong>
				</center>
			</div>
		</nav>
	</div>