@extends('master.admin')
@section('title')
Edit Setting
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Setting</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>

                    <li class="breadcrumb-item active">Edit Setting</li>
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

                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <form action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Site Name</label>
                                            <input type="name" name="name" value="{{$setting->name}}"
                                                class="form-control" id="name" placeholder="Enter name" >
                                        </div>











                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="site_logo">Site Logo</label>

                                                    <div class="custom-file">
                                                        <input type="file" name="site_logo" id="site_logo"
                                                            value="{{$setting->site_logo}}">
                                                        <label class="custom-file-label"
                                                            for="site_logo">{{$setting->site_logo}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-4" text-right>
                                                    <div
                                                        style="max-width: 200px; max-height: 200px; overflow:hidden; margin-left:auto ">
                                                        <img src="{{asset($setting->site_logo)}}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="address">ঠিকানা </label>
                                            <input type="name" name="address" value="{{$setting->address}}"
                                                class="form-control" id="address" placeholder="Enter address" >
                                        </div>

                                        <div class="form-group">
                                            <label for="number">যোগাযোগ </label>
                                            <input type="number" name="number" value="{{$setting->number}}"
                                                class="form-control" id="number" placeholder="Enter number" >
                                        </div>

                                        <div class="form-group">
                                            <label for="chief_adviser">পদ </label>
                                            <textarea type="text" id="description"  name="chief_adviser"
                                                class="form-control" id="chief_adviser" placeholder="Enter chief_adviser" > {{$setting->chief_adviser}}</textarea>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="about_site">Site Description</label>
                                        <textarea name="about_site" id="about_site" rows="3" class="form-control"
                                            placeholder="Enter about_site" >{{$setting->about_site}}</textarea>
                                    </div>




                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="facebook">Facebook</label>
                                                <input type="text" name="facebook" value="{{$setting->facebook}}"
                                                    class="form-control" id="facebook" placeholder="Enter facebook url" >
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="twitter">Twitter</label>
                                                <input type="text" name="twitter" value="{{$setting->twitter}}"
                                                    class="form-control" id="twitter" placeholder="Enter twitter url" >
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="youtube">Youtube</label>
                                                <input type="text" name="youtube" value="{{$setting->youtube}}"
                                                    class="form-control" id="youtube" placeholder="Enter youtube url" >
                                            </div>
                                        </div>





                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" value="{{$setting->email}}"
                                                    class="form-control" id="email" placeholder="Enter email url" >
                                            </div>
                                        </div>



                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="copyright">Copyright Text</label>
                                                <input type="copyright" name="copyright" value="{{$setting->copyright}}"
                                                    class="form-control" id="copyright" placeholder="Enter copyright" >
                                            </div>
                                        </div>



                                    </div>



                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Setting</button>
                                    </div>

                            </div>
                            <!-- /.card-body -->




                            </form>
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

@section('style')
<link rel="stylesheet" href="{{asset('admin/css/summernote-bs4.min.css')}}">
@endsection

@section('script')
<script src="{{asset('admin')}}/js/summernote-bs4.min.js"></script>

<script>
    $('#description').summernote({
          placeholder: '',
          tabsize: 2,
          height: 100
        });
</script>


@endsection
