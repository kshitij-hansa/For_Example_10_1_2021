@extends('admin.layout.app')

@section('body')

   <!-- Main content -->
   <section class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('myblog.update', [ 'myblog' => $myblog])}}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group" >
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text"name="name" class="form-control"  aria-describedby="emailHelp">
                  <p> </p>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text"name="address" class="form-control"  aria-describedby="emailHelp" >
                  <p> </p>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Number</label>
                  <input type="text"name="number" class="form-control"  aria-describedby="emailHelp" >
                  <p> </p>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control"name="email"  aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <p> </p>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            </div>
</section>
        
@endsection 