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
<label for="name">Name </label><em>*</em>
<input type="text" name="name" class="form-control" id="name" required>
</div>
<div class="form-group">
<label for="type">Telephone</label><em>*</em>
<input type="text" name="telephone" class="form-control" id="telephone" required>
</div>
<div class="form-group">
<label for="train">Train</label><em>*</em>
    <select class="form-control" id="train" name="train">
    @foreach( $train as $trains)

      <option>{{ $trains->name }}</option>
      @endforeach
    </select>
</div>

<div class="form-group">
<label for="route">Route</label><em>*</em>
    <select class="form-control" id="route" name="route">
    @foreach( $route as $routes)

      <option>{{ $routes->depature}} - {{$routes->arrival }}</option>
      @endforeach
    </select>
</div>

<div class="form-group">
<label for="tickettype">Ticket Type</label><em>*</em>
    <select class="form-control" id="tickettype" name="tickettype">
   

      <option>VIP</option>
      <option>Regular</option>
    </select>
</div>

<div class="form-group">
<label for="price">Price </label><em>*</em>
<input type="text" name="price" class="form-control" id="price" required>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-success">
</div>



