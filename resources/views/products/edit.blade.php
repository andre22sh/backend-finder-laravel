@extends('layouts.master')

@section('content')
<div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Products</h3>
								</div>
								<div class="panel-body">
									<form action="/products/{{$product->id}}" method="POST">
                                    
    @csrf
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name Products</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}"><br>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" name="description" class="form-control" id="description" rows="4" value="{{$product->description}}"></input><br>
    </div>
  </div>
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="number" name="price" class="form-control" id="price" value="{{$product->price}}"><br>
    </div>
  </div>
  <div class="row mb-3">
    <label for="image_url" class="col-sm-2 col-form-label">Image URL</label>
    <div class="col-sm-10">
      <input type="text" name="image_url" class="form-control" id="image_url" value="{{$product->image_url}}"><br>
    </div>
  </div>
  <button type="submit" value="submit" class="btn btn-primary">submit</button>
</form>
								</div>
							</div>
            </div>
          </div>
    </div>
  </div>
</div>

@stop
@section('content1')
  
  <h1>Create Product</h1>
<form action="" method="POST">
    @csrf
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name Products</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" name="description" class="form-control" id="description">
    </div>
  </div>
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="number" name="price" class="form-control" id="price">
    </div>
  </div>
  <div class="row mb-3">
    <label for="image_url" class="col-sm-2 col-form-label">Image URL</label>
    <div class="col-sm-10">
      <input type="text" name="image_url" class="form-control" id="image_url">
    </div>
  </div>
  <button type="submit" value="submit" class="btn btn-primary">submit</button>
</form>
</body>
</html>
@endsection
