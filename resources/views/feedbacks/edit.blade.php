@extends('layouts.master3')

@section('content')
<div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Feedbacks</h3>
								</div>
								<div class="panel-body">
									<form action="/feedback/{{$feedbacks->id}}" method="POST">
                                    
    @csrf
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" value="{{$feedbacks->name}}"><br>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="col-sm-2 col-form-label">Feedbacks</label>
    <div class="col-sm-10">
      <input type="text" name="review" class="form-control" id="review" rows="4" value="{{$feedbacks->review}}"></input><br>
    </div>
  </div>
  <button type="submit" value="submit" class="btn btn-primary">submit</button>
</form>
</body>
</html>
@endsection
