@extends('layouts.master')

@section('content')
<div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<form action="/products" method="POST">
    @csrf
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name Products</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name"><br>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea name="description" class="form-control" id="summernote" rows="4"></textarea><br>
    </div>
  </div>
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="number" name="price" class="form-control" id="price"><br>
    </div>
  </div>
  <div class="row mb-3">
    <label for="image_url" class="col-sm-2 col-form-label">Image URL</label>
    <div class="col-sm-10">
      <input type="text" name="image_url" class="form-control" id="image_url"><br>
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
      <input type="text" name="description" class="form-control" id="summernote">
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
