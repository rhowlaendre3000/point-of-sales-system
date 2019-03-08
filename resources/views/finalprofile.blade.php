@extends('layouts.app')

@section('content')

<div class="card card-cascade container">

<!-- Card image -->
<div class="view view-cascade overlay">
  <img class="card-img-top" src="" alt="Card image cap">
  <a>
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body card-body-cascade text-center">

 <!-- Title -->
 <h4 class="card-title"><strong>{{Auth::user()->name}}</strong></h4>
  <!-- Subtitle -->
  <h6 class="font-weight-bold indigo-text py-2">Web developer</h6>
        <div class="row">
          <div class="col-3">
         @foreach($profil as $profile)
              <img src="/img/{{ $profile->image}}">
         @endforeach
          </div>
                <div class="col-3">
                <p><strong>NAME: </strong></p> 
                <p><strong>EMAIL:</strong></p>
                <p><strong>TELEPHONE:</strong></p>
                <p><strong>ADDRESS:</strong> </p>
                <p><strong>DATE OF BIRTH</strong> </p>
                <p><strong>NATIONALITY</strong> </p>
                <p><strong>OCCUPATION</strong> </p>
                <p><strong>SKILL(S)</strong> </p>
                <p><strong>SUMMARY</strong> </p>
                <br/>
              
                <div>
                <a class="btn btn-outline-success my-2 my-sm-0" href="{{route('profiles.edit',Auth::user()->id)}}">EDIT</a>
                </div>
  
   </div>
   @foreach($profil as $profile)
                <div class="col-3">
                               
                                <p><strong>{{Auth::user()->name}}</strong></p> 
                                <p><strong> {{Auth::user()->email}} </strong></p> 
                                
                                <p><strong>{{$profile->telephone}}</strong> </p>
                                <p><strong>{{$profile->address}}</strong> </p>
                                <p><strong>{{$profile->dob}}</strong> </p>
                                <p><strong>{{ $profile->nationality }}</strong> </p>
                                <p><strong>{{ $profile->occupation }}</strong> </p>
                                <p><strong>{{$profile->skill1}}</strong> </p>
                                <p><strong>{{$profile->summary}}</strong></p>
                                <div>
                                <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('home')}}">BACK TO DASHBOARD</a>
                                </div>
                  </div>
                  @endforeach

                   <div class="col-3">
                   </div>
        </div>
 
  <!-- Text -->
 

  <!-- Facebook -->
  <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
  <!-- Twitter -->
  <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
  <!-- Google + -->
  <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>

</div>
</div>
<!-- Card Regular -->




@endsection