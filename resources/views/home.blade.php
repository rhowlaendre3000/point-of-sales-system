@extends('layouts.app')
<link href="{{asset('css/admin.css')}}" rel = "stylesheet" type="text/css" />




@section('content')



                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif





          


<div class="container">
<div class="row" style="margin-bottom: 20px;">

        
            <div class="col-sm-6 col-lg-3">
                            <div class="card bg-color2">
                            <div class="card-header"><h3>TICKETS SALES</h3></div>
  <div class="card-body">
    
    <p class="card-text" style="color:white;">Please <a href=" {{ route('tickets.create') }}">Click</a> to start selling tickets</p>
  </div>
                            </div>
            </div>

            

             <div class="col-sm-6 col-lg-3">
                      
            </div>
            
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="row">
          <div class="col-12">
    <h3 class="display-5">Welcome </h3>
    <p class="lead">to the Ghana Railways Authority Point of Sales Management System. This system is for Authenticated
     and Validated Staffs of this Institution who have been assigned to issue out tickets to Buyers.</p>
  </div>
  
</div>
</div>
</div>

      </div>      

@endsection
@section('footer')
@include('includes.footer')
@endsection