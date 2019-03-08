@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
    @endif
    
   <div class="row">
       
   <div class="col-sm-2 col-sm-offset-3"> 	
       
       </div>
    

         <div class="col-sm-5 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Edit Route
    	</div>
    		<div class="card-body">
                @foreach($route as $routes)
                <form method="POST" action="{{ action('RouteController@update', $routes->id)}}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                @include('includes.routeform')
                </form>
					
</div>	
@endforeach
            </div>
      </div>

<div class="col-sm-2 col-sm-offset-3"> 	
       
      </div>

</div>

</div>
@endsection