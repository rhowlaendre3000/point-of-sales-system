@extends('layouts.app')

@section('content')
<div class="container">

<div class="card">

<div class="card-body">
    <div class="card-title">
    <h3 class="text-center">Basic Information</h3>
</div>
               
            <hr>
            <form action="{{ action('profilesController@store') }}"  method="POST"  class="container-fluid" enctype="multipart/form-data">
            {{ csrf_field() }}

             <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Telephone</label>
      <input type="number"  name="telephone" class="form-control" id="inputEmail4" placeholder="telephone">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Address</label>
      <input type="text" name="address" class="form-control" id="inputPassword4" placeholder="Address">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date Of Birth</label>
      <input type="date"  name="dob" class="form-control" id="inputEmail4" placeholder="Date of Birth">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nationality</label>
      <input type="text" name="nationality" class="form-control" id="inputPassword4" placeholder="Nationality">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Occupation</label>
      <input type="text"  name="occupation" class="form-control" id="inputEmail4" placeholder="Occupation">
    </div>
    <div class="form-group col-md-6">

     <label for="inputEmail4">Skill 1</label>
    <select class="custom-select" id="inputGroupSelect01" name="skill1">
                                            <option selected>Skill 1</option>
                                            <optgroup label="NFC EAST">
                                                        
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                        </optgroup>
                                </select>
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
    <label for="level" class="control-label mb-1">Level Of Education</label>
                                   <input  name="level" type="text" class="form-control" aria-required="true" aria-invalid="false" value="educational level">
    </div>

     <div class="form-group col-md-6">
     
     <label for="inputEmail4">Skill 2</label>
    <select class="custom-select" id="inputGroupSelect01" name="skill2">
                                            <option selected>Skill 2</option>
                                            <optgroup label="NFC EAST">
                                                        
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                        </optgroup>
                                </select>
    </div>

  </div>

   <div class="form-row">
   
   <div class="form-group col-md-6">
                             <label for="inputEmail4"> Image (max:300*100) </label>
                            <input id="password-confirm" type="file" class="form-control" name="image" required>         
                    </div>
  


    
    


    <div class="form-group col-md-6">
   <label for="inputEmail4">Skill 3</label>
    <select class="custom-select" id="inputGroupSelect01"  name="skill3">
                                                <option selected>Skill 3</option>
                                                <optgroup label="NFC EAST">
                                                        
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                        </optgroup>
                                        </select>
    </div>


    
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
<textarea class="form-control" name="summary" id="exampleFormControlTextarea1" rows="1" placeholder="Summary"></textarea>

   </div>

  </div>
 <div class="form-row">
 

   <div class="form-group col-md-6">
   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
   </div>

  </div>

                                 
                                      
        </div>
        
        
</form>






@endsection