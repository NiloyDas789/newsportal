@extends('master.admin')
@section('title')
    Reporter
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reporter List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Reporter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-lg-12">
              <div class="card">
              <div class="card-header">

                <div class=" d-flex justify-content-between align-items-center">
                <h3 class="card-title">Reporter list</h3>
                <a href="{{route('reporter.create')}}" class="btn btn-primary">Create Reporter</a>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Id</th>
                      <th>Name</th>
                      <th>Description</th>


                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if($reporters->count())
                  @foreach($reporters as $reporter)
                    <tr>
                      <td>{{$reporter->id}}</td>
                      <td>{{$reporter->name}}</td>
                      <td>{{$reporter->description}}</td>

                      <td class="d-flex">
                      <a href="{{route('reporter.edit',[$reporter->id])}}" class="btn btn-sm btn-primary mr-1" > <i class="fas fa-edit"></i> </a>

                      <form action="{{route('reporter.destroy',[$reporter->id])}}" method="POST" class="mr-1">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"> </i></button>
                      </form>

                      </td>
                    </tr>
                  @endforeach
                  @else
                  <tr>
                  <td colspan="4">
                  <h5 class="text-center">No Reporters Found</h5>
                  </td>

                  </tr>

                  @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class="card-footer clearfix">
                    <div class="row text-center pt-5 border-top">
                        <div class="col-md-12">
                        {{$reporters->links()}}
                        </div>
                    </div>
              </div>





            </div>
            </div>
            </div>
            </div>
            </div>




@endsection
