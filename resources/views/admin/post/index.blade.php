@extends('master.admin')
@section('title')
    Post
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Post List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Post</li>
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
                <a href="{{route('post.create')}}" class="btn btn-primary">Create Post</a>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">Id</th>

                      <th>Title</th>
                      <th>Catagory</th>
                      <th>Tags</th>
                      <th>Author</th>

                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if($posts->count())
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$n++}}</td>

                      <td>{{$post->title}}</td>
                      <td>
                      @foreach($post->catagories as $catagory)
                      <span class="badge badge-primary">{{$catagory->name}}</span>

                      @endforeach
                      </td>
                      <td>
                      @foreach($post->tags as $tag)
                      <span class="badge badge-primary">{{$tag->name}}</span>

                      @endforeach
                      </td>
                      <td>{{$post->user->name}}</td>

                      <td class="d-flex">
                      <a href="{{route('post.show',[$post->id])}}" class="btn btn-sm btn-success mr-1" > <i class="fas fa-eye"></i> </a>
                      <a href="{{route('post.edit',[$post->id])}}" class="btn btn-sm btn-primary mr-1" > <i class="fas fa-edit"></i> </a>

                      <form action="{{route('post.destroy',[$post->id])}}" method="POST" class="mr-1">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"> </i></button>
                      </form>


                      </td>
                    </tr>
                  @endforeach
                  @else
                  <tr>
                  <td colspan="6">
                  <h5 class="text-center">No Posts Found</h5>
                  </td>

                  </tr>

                  @endif

                  </tbody>
                </table>
              </div>


              <div class="card-footer clearfix">
                    <div class="row text-center pt-5 border-top">
                        <div class="col-md-12">
                        {{$posts->links()}}
                        </div>
                    </div>
              </div>


              <!-- /.card-body -->

            </div>
            </div>
            </div>
            </div>
            </div>




@endsection
