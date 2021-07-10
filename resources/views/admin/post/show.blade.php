@extends('master.admin')
@section('title')
    View Post
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">View Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('post.index')}}">Post</a></li>
              <li class="breadcrumb-item active">View Post</li>
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
                <h3 class="card-title">Post list</h3>
                <a href="{{route('post.index')}}" class="btn btn-primary">Go back to Post List</a>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{route('post.edit',[$post->id])}}"
                    class="btn btn-sm btn-info float-left m-1">Edit News&nbsp; <i class="fas fa-edit"></i> </a>

                    <form action="{{route('post.destroy',[$post->id])}}" method="POST" class="mr-1">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger float-right m-1">Delete News &nbsp;<i class="fas fa-trash">
                            </i></button>
                    </form>
                <table class="table table-bordered">

                  <tbody>
                    <tr>
                      <th style="width:200px">Image</th>
                      <td><div style="max-width: 300px; max-height: 300px; overflow:hidden" >
                      <img src="{{asset($post->image)}}" class="img-fluid" alt="">
                      </div></td>
                    </tr>

                    <tr>
                      <th style="width:200px">Title</th>
                      <td>{{$post->title}}</td>
                    </tr>
{{--
                    <tr>
                      <th style="width:200px">Catagoy Name</th>
                      <td>{{$post->catagories->name}}</td>
                    </tr> --}}

                    <tr>
                        <th style="width:200px">Post Tags</th>
                        <td>
                        @foreach($post->catagories as $catagory)
                        <span class="badge badge-secondary">{{$catagory->name}}</span>

                        @endforeach
                        </td>
                      </tr>




                    <tr>
                      <th style="width:200px">Post Tags</th>
                      <td>
                      @foreach($post->tags as $tag)
                      <span class="badge badge-info">{{$tag->name}}</span>

                      @endforeach
                      </td>
                    </tr>
                    <tr>
                      <th style="width:200px">Author Name</th>
                      <td>{{$post->user->name}}</td>
                    </tr>

                    <tr>
                      <th style="width:200px">Description</th>
                      <td>{!!$post->description!!}</td>
                    </tr>





                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
            </div>
            </div>
            </div>
            </div>




@endsection
