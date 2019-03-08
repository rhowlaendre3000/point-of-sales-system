@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
    @endif
    
   <div class="row">
       
    

         <div class="col-sm-5 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Manage Routes
    	</div>
    		<div class="card-body">
                
                <form method="post" action="/routes">
                {{ csrf_field() }}
                @include('includes.routeform')
                </form>
					
</div>	
            </div>
      </div>

<div class="col-sm-7 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Trains Available
    	</div>
    		<div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                       
                            <tr>
                                <th>Depature</th>
                                <th>Arrival</th>
                                <th>Distance</th>
                                <th>Regular</th>
                                <th>VIP</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    @foreach($route as $routes)
                    <tbody>
                        <tr></tr>
                        <td>{{ $routes->depature }}</td>
                        <td>{{ $routes->arrival }}</td>
                        <td>{{ $routes->distance }}</td>
                        <td>{{ $routes->regular }}</td>
                        <td>{{ $routes->vip }}</td>

                        <td><a href="{{ route('routes.edit', $routes->id)}}" class="btn btn-success btn-xs ">Edit</a>
									
									<form action=" {{ route('routes.destroy', $routes->id)}}" method="POST" style="display:inline-block">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-danger btn-xs ">
											<span>DELETE</span>
										</button>
									</form></td>
                  @endforeach
                    </tbody>
                    </table>

                </div>
                
					
</div>	
            </div>
      </div>

</div>

</div>
@endsection