@extends('layouts.app')

@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
	@endif
    <div class="col-sm-6 col-sm-offset-3">
    	<div class="panel panel-default">
    		<div class="panel-heading">
    			Add User
    		</div>
    		<div class="panel-body">
                

                <form method="patch" action="{{action('formController@update', $user->id)}}">
                {{ csrf_field() }}
				
                @include('includes.form')
                </form>
    		</div>
		</div>
	</div>
</div>
@endsection