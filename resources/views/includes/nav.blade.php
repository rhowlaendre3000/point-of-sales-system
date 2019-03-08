<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top"   style="border-radius:0px; margin-bottom:0px;">
				  <div class="container-fluid"  style="background-color:#eb8114;">
				    
						    
								<div class="navbar-header" id="navbar-header" style="padding-top:5px; padding-bottom:0px;">  
								  <a  href="index.php" > <img  id="img0" src="{{asset('img/compssa.jpg')}}" style="padding-bottom:5px;"> </a>

						            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" aria-expanded="false" aria-controls="navbar">
						                <span class="sr-only">Toggle navigation</span>
						                <span class="icon-bar"></span>
						                <span class="icon-bar"></span>
						                <span class="icon-bar"></span>
						            </button>
						        </div>

						  <div id="navbarCollapse" style="margin-bottom:0px;" class="collapse navbar-collapse">
						  <ul>
								  <li><a style="margin-top:0px;" href="{{ url('index/create')}}">CREATE AN ACCOUNT</a></li>
								  <li><a style="margin-top:0px;" href="{{route('login')}}">SIGN IN</a></li>
								  <li><a style="margin-top:0px;" href="{{ url('/') }}">HOME</a></li>
						  </ul>

					</div>
				  </div>
</nav>
