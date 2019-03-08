@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
    @endif
    
   <div class="row">
       <div class="col-sm-3">
</div>
    <div class="col-sm-6 col-sm-offset-3"> 	
        <div class="card">
        <div class="card-header">
    			Add User
    	</div>
    		<div class="card-body">
                
                <form method="post" action="/index">
                {{ csrf_field() }}
                @include('includes.form')
                </form>
					
</div>	
            </div>
      </div>
      <div class="col-sm-3">
</div>
</div>

</div>
@endsection