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
                
                <form method="post" action="/tickets">
                {{ csrf_field() }}
                @include('includes.salesform')
                </form>
					
</div>	
            </div>
      </div>

<div class="col-sm-6 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Tickets Issued Out
    	</div>
    		<div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>Name</th>
                                    <th>Ticket Number</th>
                              </tr>
                        </thead>

                        <tbody>
                        @foreach($ticket as $tickets)
                              <tr></tr>
                              <td> <a href="{{ route('tickets.show', $tickets->id) }}"> {{$tickets->name}} </a></td>
                              <td>{{ $tickets->sales_id }}</td>
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