@extends('layouts.master2')

@section('content')
  <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Guest users</h3>
                  <div class="right">
                 \
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead class="table-dark text-center">
											<tr>
												<th>Name</th>
                                                <th>email</th>
                                                <th>phone</th>
                        
											</tr>
										</thead>
										<tbody>
											 @foreach($guestbooks as $guestbook)
                          <tr>
                              <td>{{$guestbook->name}}</td>
                              <td>{{$guestbook->email}}</td>
                              <td>{{$guestbook->phone}}</td>
                               
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
        
  </tbody><br>
</table>
        </div>
    
   
  </body>
</html>
@endsection