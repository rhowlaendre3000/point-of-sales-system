@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
    @endif
    
   <div class="row">
       
    

         <div class="col-sm-6 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Add New Train
    	</div>
    		<div class="card-body">
                
                <form method="post" action="/trains">
                {{ csrf_field() }}
                @include('includes.ticketsform')
                </form>
					
</div>	
            </div>
      </div>

<div class="col-sm-6 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Trains Available
    	</div>
    		<div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                       
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                    <tbody>
                    @foreach($train as $trains) 
                        <tr></tr>
                        <td>{{$trains->name}}</td>
                        <td>{{$trains->type}}</td>
                        <td>{{$trains->total}}</td>
                        <td><a href="{{ route('trains.edit', $trains->id) }}" class="btn btn-success btn-xs">Edit</a>
									
									<form action=" {{ route('trains.destroy', $trains->id) }} " method="POST" style="display:inline-block">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-danger btn-xs">
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