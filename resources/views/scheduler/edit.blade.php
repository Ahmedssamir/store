<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="row">
  <div class="col-sm-6">
    <h4>Edit time</h4>
  </div>
  <div class="col-sm-6 text-right">
    <a href="{{ route('apps.index') }}" class="btn btn-danger mb-2">Go Back</a> 
  </div>    
</div>
<hr />
  
<form action="{{ route('apps.update', $product_info->id) }}" method="POST" name="update_product">
 @csrf
  @method('PATCH')
    
  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <strong>day</strong>
              <input type="text" name="day" class="form-control" placeholder="Enter Title" value="{{ $product_info->day }}">
              <span class="text-danger">{{ $errors->first('day') }}</span>
          </div>
      </div>
      <div class="col-md-12">
          <div class="form-group">
              <strong>time</strong>
              <input type="text" name="time" class="form-control" placeholder="Enter Product Code" value="{{ $product_info->time }}">
              <span class="text-danger">{{ $errors->first('time') }}</span>
          </div>
      </div>
      <div class="col-md-12">
          <div class="form-group">
              <strong>price</strong>
              <input type="text" name="price" class="form-control" placeholder="Enter Product Code" value="{{ $product_info->price}}">
              <span class="text-danger">{{ $errors->first('price') }}</span>
          </div>
      </div>
      <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('apps.index') }}" class="btn btn-danger">Cancel</a> 
          <li><a class="nav-link active" href="{{('/')}}">Home</a></li>
      </div>
  </div>
    
</form>
 