	
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
	        <form role="form" method="POST" action="{{ route('login') }}">
	        {{ csrf_field() }}
				<div style=" float:right; padding-top: 5px; padding-right: 10px;">
					<div class="collapse navbar-collapse pull-left" id="bs-example-navbar-collapse-1">
		                <ul class="nav navbar-nav">	
		                    <li>
		                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} head-input">
	                                <input id="email" type="email" class="form-control input-sm" name="email" value="{{ old('email') }}" placeholder="E-mail Address" required autofocus>

	                                @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <p style="color: white;">{{ $errors->first('email') }}</p>
	                                    </span>
	                                @endif
		                        </div>
		                    </li>
		                    <li>
		  	                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} head-input">
	                                <input id="password" type="password" class="form-control input-sm" name="password" placeholder="Password" required>

	                                @if ($errors->has('password'))
	                                    <span class="help-block">
	                                        <p style="color: white;">{{ $errors->first('password') }}</p>
	                                    </span>
	                                @endif
	                            </div>
		                    </li>
		                    <li>		                    
		                        <button id="head-btn2" type="submit" class="head-input">
		                        	<i class="fa fa-sign-in" aria-hidden="true"></i> Login
		                        </button>
		                    </li>
		                     <li>
		                        <a href="{!! url('/register') !!}">
		                        	<button id="head-btn2" type="button">
		                        		<i class="fa fa-user-o" aria-hidden="true"></i> Register
		                        	</button>
		                        </a>
		                    </li>
		                </ul>
		            </div>		
				</div>
			</form>
			<div class="clearfix"></div>
			<div class="head2 navbar-collapse navbar-custom">
				<center>
					<br><strong class="head2-text">Rethinking Trust, Sharing Fund, Opportunities for Development</strong>
				</center>
			</div>
		</nav>
	</div>