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
<label for="type">Type</label><em>*</em>
<input type="text" name="type" class="form-control" id="type" required>
</div>
<div class="form-group">
<label for="total capacity">Total capacity</label><em>*</em>
<input type="number" name="total" class="form-control" id="total" required>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success">
</div>



