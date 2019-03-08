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
         <div class="col-sm-8 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Your Ticket.
    	</div>
    		<div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                   
                        <tr>
                        @foreach($ticket as $tickets)
                        <td>Name: {{$tickets->name}}
                        
                        </td>
                       
                        <td>
                        Seller :  {{$tickets->seller}}
                        </td>
                        <td>
                        Route :    {{$tickets->route}}
                        </td>
                         </tr>


                        <tr>
                        <td>
                        Ticket Type :  {{$tickets->tickettype}}
                        </td>
                        <td>
                        Ticket Number :  {{$tickets->ticket_id}}
                        </td>
                        <td>
                        Price :  {{$tickets->price}}
                        </td>
                        </tr>
                        
                        @endforeach
                        
                    </tbody>
                    
                </table>
                </div>
                <a href="{{ action('ticketsController@generatePDF')   }}" class="btn btn-success btn-xs">Download</a>
					
</div>	
            </div>
      </div>


<div class="col-sm-2 col-sm-offset-3"> 
</div>
</div>

</div>
@endsection