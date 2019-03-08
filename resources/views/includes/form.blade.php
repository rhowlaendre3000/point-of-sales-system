@if (isset($errors) && (count($errors) > 0))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="form-group">
<label for="name">Name</label><em>*</em>
<input type="text" name="name" class="form-control" id="name" required>
</div>
<div class="form-group">
<label for="email">E-mail</label><em>*</em>
<input type="email" name="email" class="form-control" id="email" required>
</div>
<div class="form-group">
<label for="d-o-b">Date of Birth</label><em>*</em>
<input type="date" name="dob" class="form-control" id="dob" required>
</div>
<div class="form-group">
<label for="email">Telephone Number</label><em>*</em>
<input type="number" name="telephone" class="form-control" id="phone" required>
</div>
<div class="form-group">
<label for="password">Password</label><em>*</em>
<input type="password" name="password" class="form-control" id="password" required>
</div>
<div class="form-group">
<label for="password">Confirm Password</label><em>*</em>
<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success">
</div>



