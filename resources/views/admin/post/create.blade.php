@extends('master.admin')
@section('title')
Create Post
@endsection
@section('content')
<style>
    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem;
        width: 125px;
    }

</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('post.index')}}">Post</a></li>
                    <li class="breadcrumb-item active">Create Post</li>
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
                        <div class="row">
                            <div class="col-8">
                                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Post Title</label>
                                            <input type="name" name="title" class="form-control" id="title"
                                                placeholder="Enter Title" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="top">Sub Title-Top</label>
                                            <input type="top" name="top" class="form-control" id="top"
                                                placeholder="Enter Sub Title-Top" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="bottom">Sub Title-Bottom </label>
                                            <input type="bottom" name="bottom" class="form-control" id="bottom"
                                                placeholder="Enter Sub Title-Top" required>
                                        </div>















                                        <div class="form-group">
                                            <label for="image">Post Image</label>

                                            <div class="custom-file">
                                                <input type="file" name="image" id="image" required>
                                                <label class="custom-file-label" for="image">Choose Image file</label>
                                            </div>
                                        </div>










                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" rows="4" class="form-control"
                                                placeholder="Enter description" required></textarea>
                                        </div>


                                        <div class="col-6">
                                            <!-- Select multiple-->
                                            <div class="form-group">
                                                <label for="tag">Select Tags</label>
                                                <div class="d-flex flex-wrap"
                                                    style='width: 100%;height: 170px;overflow: auto;'>
                                                    @foreach($tags as $tag)

                                                    <div class="form-check">
                                                        <input class="form-check-input" name="tags[]" type="checkbox"
                                                            id="tag{{$tag->id}}" value="{{$tag->id}}">
                                                        <label for="tag{{$tag->id}}"
                                                            class="form-check-label">{{$tag->name}}</label>
                                                    </div>


                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>


                                    </div>





                            </div>

                            <div class="offset-md-1" style="width: 300px;">

                                <div class="col-12 float-right">
                                    <!-- Select multiple-->
                                    <div class="form-group">
                                        <label for="catagory">Catagory</label>
                                        <div class="d-flex flex-wrap" style='width: 100%;height: 170px;overflow: auto;'>
                                            @foreach($catagories as $catagory)

                                            <div class="form-check">
                                                <input class="form-check-input" name="catagories[]" type="checkbox"
                                                    id="catagory{{$catagory->id}}" value="{{$catagory->id}}">
                                                <label for="catagory{{$catagory->id}}"
                                                    class="form-check-label">{{$catagory->name}}</label>
                                            </div>


                                            @endforeach
                                        </div>
                                    </div>
                                </div>






                                <div class="form-group">
                                    <label for="reporter">Select Reporters</label>
                                    <select name="reporter" id="reporter" class="form-control" required>
                                        <option value="" style="display:none" selected>Select Reporters</option>
                                        @foreach($reporters as $r)
                                        <option value="{{$r->id}}">{{$r->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="date">Publish Date</label>
                                    <input type="date" id="date" class="form-control" name="date" required>
                                </div>
                            </div>


                            <div class="col-sm-12 card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!-- /.card-body -->


                            </form>
                        </div>

                        <div>
                            <form action="{{route('tag.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Create New Tag</label>
                                        <input type="name" name="name" class="form-control" id="name"
                                            placeholder="Enter name" required>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

            </div>
        </div>
    </div>
</div>





@endsection

@section('style')
<link rel="stylesheet" href="{{asset('admin/css/summernote-bs4.min.css')}}">
@endsection

@section('script')
<script src="{{asset('admin')}}/js/summernote-bs4.min.js"></script>

<script>
    $('#description').summernote({
        placeholder: 'Write Here',
        tabsize: 2,
        height: 300
    });

</script>
@endsection
