@extends('admin.layout.app')

@section('body')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Responsive Hover Table</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>address</th>
                  <th>number</th>
                  <th>email</th>
                  <th>password</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                  <tr>
                    <td> {{$item['id']}} </td>
                    <td> {{$item['name']}} </td>
                    <td> {{$item['data']}} </td>
                    <td> {{$item['address']}} </td>
                    <td> {{$item['number']}} </td>
                    <td> {{$item['email']}} </td>
                    <td> {{$item['password']}} </td>
                    <td><form action="{{route('myblog.edit',['myblog'=>$item->id])}}">
                      <button>
                        Update</button></form></td>
                    <td><form action="{{route('myblog.destroy',['myblog'=>$item->id])}}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button>
                        Delete</button></form></td>
                  </tr>
                @endforeach  
       
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

@endsection 
<tbody>
                    
</tbody>