@extends('layouts.master')

@section('content')
  <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">List Products</h3>
                  <div class="right">
                  <a href="/products/create" class="btn btn-primary rounded btn-md mt-5">Create</a></div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead class="table-dark text-center">
											<tr>
												<th>Name Products</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
											</tr>
										</thead>
										<tbody>
											 @foreach($products as $product)
                          <tr>
                              <td>{{$product->name}}</td>
                              <td>{{$product->description}}</td>
                              <td>Rp. {{$product->price}}</td>
                              <td class=""><a href="/products/{{$product->id}}/edit" class=" btn btn-warning rounded btn-sm">Edit</a>
                              <a href="/products/{{$product->id}}/hapus" class=" btn btn-danger rounded btn-sm">Delete</a>
                              </td>
                          </tr>
                          @endforeach
										</tbody>
									</table>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
  </div>
@stop
@section('content1')
    <div class="row">
        <div class="class col-6">
        <h1 class="mt-2">List Products</h1>
        <a href="/products/create" class="btn btn-primary rounded btn-md mt-2 mb-4 float-right">Create</a>
        </div>
    <table class="table table-hover">
  <thead class="table-dark text-center">
   <tr>
            <th>Name Products</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
  </thead>
  <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td class="text-center"><a href="/products/edit" class="text-center btn btn-warning rounded px-3 btn-sm">Edit</a>
            <a href="/products/delete" class="text-center btn btn-danger rounded btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
  </tbody><br>
</table>
        </div>
    
   
  </body>
</html>
@endsection