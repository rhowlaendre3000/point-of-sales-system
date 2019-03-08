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
a{
  color: inherit;
  
}
a.hover{
  text-decoration:none;
}
    
.logo{
  padding-right:550px;
}
    </style>
    <body>

<div class="container">
<nav>
<ul style=";" class="nav justify-content-end navbar navbar-light bg-light" style="padding-bottom: 1.5rem;  padding-top: 1.5rem;">
   <li ><a  style="text-decoration:none" href=""><h3><strong class="logo">SELFPLOY</strong></h3></a></li>
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
</nav>


  <img src="img/homepic.jpg" class="img-fluid" alt="Responsive image">
  <div class="content" >
    <h1>WELCOME TO RHOWLAENDRE'S WORLD.</h1>
    <button type="button" class="btn-lg btn-outline-light">CREATE AN ACCOUNT</button>
    
  </div>
  
  
  
</div>
<div clas="container-fluid">
  <div class="card-body text-center ">
   <h1>WHAT TO KNOW ABOUT SELFPLOY</h1>
   <p><b>SELFPLOY</b> helps students to market themselves to employers who wants a job done.</p>
   <p>We meet with stakeholders from different fields of the job market who are willing to engage in a servcice of our reach</p>
  <p>Also help you by pitching your quaifications, skills and projects to them before a meeting is fixed.</p>
  </div>


<div class="row" style="margin-bottom:5%;">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">SIGN UP</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">USERS FORUM</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">BLOG</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
</div>
    </body>

    @include('includes.footer')
</html>
