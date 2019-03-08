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
<label for="depature">Depature</label><em>*</em>
<input type="text" name="depature" class="form-control" id="depature" required>
</div>
<div class="form-group">
<label for="arrival">Arrival</label><em>*</em>
<input type="text" name="arrival" class="form-control" id="arrival" required>
</div>
<div class="form-group">
<label for="distance">Distance</label><em>*</em>
<input type="number" name="distance" class="form-control" id="distance" required>
</div>
<div class="form-group">
<label for="regular">Regular</label><em>*</em>
<input type="number" name="regular" class="form-control" id="regular" required>
</div>
<div class="form-group">
<label for="VIP">VIP</label><em>*</em>
<input type="number" name="vip" class="form-control" id="vip" required>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-success">
</div>



