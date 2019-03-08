<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
					
				    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
			        <script src="{{asset('js/bootstrap.min.js')}}"></script>
			        <script src="asset{{asset('js/jquery-1.10.2.js')}}" type="text/javascript"></script>

                    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">  
					<link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    </head>

    <style>
    .container {
  position: relative;
  max-width: 100%; /* Maximum width */
  margin: 0; /* Center it */
  padding: 0;
  margin-bottom:5%;
}

.container .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 45px; /* Some padding */
}
    
    </style>

<body>

<div class="container">
<ul class="nav justify-content-end navbar navbar-light bg-light" style="padding-bottom: 1.5rem;  padding-top: 1.5rem;">
   
  <li class="nav-item" style="color:black;">
    <a class="nav-link" href="{{ url('hire') }}"> HIRE A PROFESSIONAL</a>
  </li>

   <li class="nav-item">
    <a class="nav-link active" href="#">BLOG</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">SIGN IN</a>
  </li>
  <li class="nav-item" style="color:black;">
    <a class="nav-link" href="{{ route('register') }}"> CREATE AN ACCOUNT</a>
  </li>
  
  
  </ul>

  
    <h3>PLEASE SELECT ANY PROFESSIONAL TO WORK</h3>
  
    
    <div class="container-fluid" style="padding:30px">
    
   
       <div class="row">
       @foreach($user as $users)
        @if($users->admin==0)
  <div class="col-sm-3">
    <div class="card" style="width:220px; height:320px;">
      <div class="card-body">
        <h5 class="card-title"><strong>{{ $users->name}}</strong></h5>
        <p class="card-title">{{ $users->email}}</p>
        @foreach($profile as $profiles)
         @if($profiles->id!=1)
        <p class="card-title">{{$profiles->nationality}}</p>
        <p class="card-title">{{$profiles->educationallev}}</p>
        <p class="card-title">{{$profiles->skill1}}</p>
        <p class="card-title">{{$profiles->skill2}}</p>
        <p class="card-title">{{$profiles->skill3}}</p>
        <a href="#" class="btn btn-primary">SELECT</a>
        </div>
        
        @endif
     
      @endforeach
      
    </div>
    
  </div>
  @endif
  @endforeach

  
    </div>
   

</div>
