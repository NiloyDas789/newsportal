@extends('master.admin')

@section('title')

Dashboard

@endsection

@section('content')

<div class="p-3">




    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3> {{$news}}  </h3>

            <p>News</p>
            <div class="icon">
              <i class=""></i>
            </div>
          </div>


        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$catagory}}   <sup style="font-size: 20px"></sup></h3>

            <p>Catagories</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$tag}}   </h3>

            <p>Tags</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3> {{$reporter}}  </h3>

            <p>Total Reporters</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
    </div>









    <div class="row">
      <div class="col-lg-5" style="    margin: 20px;">
        <p class="text-center">
          <strong>Goal Completion</strong>
        </p>

        <div class="progress-group">
          Add Products to Cart
          <span class="float-right"><b>160</b>/200</span>
          <div class="progress progress-sm">
            <div class="progress-bar bg-primary" style="width: 80%"></div>
          </div>
        </div>
        <!-- /.progress-group -->

        <div class="progress-group">
          Complete Purchase
          <span class="float-right"><b>310</b>/400</span>
          <div class="progress progress-sm">
            <div class="progress-bar bg-danger" style="width: 50%;"></div>
          </div>
        </div>

        <!-- /.progress-group -->
        <div class="progress-group">
          <span class="progress-text">Visit Premium Page</span>
          <span class="float-right"><b>480</b>/800</span>
          <div class="progress progress-sm">
            <div class="progress-bar bg-success" style="width: 60%"></div>
          </div>
        </div>

        <!-- /.progress-group -->
        <div class="progress-group">
          Send Inquiries
          <span class="float-right"><b>250</b>/500</span>
          <div class="progress progress-sm">
            <div class="progress-bar bg-warning" style="width: 50%"></div>
          </div>
        </div>
        <!-- /.progress-group -->
      </div>




      <div class="col-lg-6" style="    margin: 20px;">
        <div class="card" style="    float: right;">
          <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title">
              <i class="ion ion-clipboard mr-1"></i>
              To Do List
            </h3>

            <div class="card-tools">
              <ul class="pagination pagination-sm">
                <li class="page-item"><a href="#" class="page-link">«</a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">»</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="todo-list ui-sortable" data-widget="todo-list">
              <li>
                <!-- drag handle -->
                <span class="handle ui-sortable-handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <!-- checkbox -->
                <div class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo1" id="todoCheck1">
                  <label for="todoCheck1"></label>
                </div>
                <!-- todo text -->
                <span class="text">Design a nice theme</span>
                <!-- Emphasis label -->
                <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                <!-- General tools such as edit or delete-->
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li class="done">
                <span class="handle ui-sortable-handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                  <label for="todoCheck2"></label>
                </div>
                <span class="text">Make the theme responsive</span>
                <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li>
                <span class="handle ui-sortable-handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo3" id="todoCheck3">
                  <label for="todoCheck3"></label>
                </div>
                <span class="text">Let theme shine like a star</span>
                <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li>
                <span class="handle ui-sortable-handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo4" id="todoCheck4">
                  <label for="todoCheck4"></label>
                </div>
                <span class="text">Let theme shine like a star</span>
                <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li>
                <span class="handle ui-sortable-handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo5" id="todoCheck5">
                  <label for="todoCheck5"></label>
                </div>
                <span class="text">Check your messages and notifications</span>
                <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
              <li>
                <span class="handle ui-sortable-handle">
                  <i class="fas fa-ellipsis-v"></i>
                  <i class="fas fa-ellipsis-v"></i>
                </span>
                <div class="icheck-primary d-inline ml-2">
                  <input type="checkbox" value="" name="todo6" id="todoCheck6">
                  <label for="todoCheck6"></label>
                </div>
                <span class="text">Let theme shine like a star</span>
                <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                <div class="tools">
                  <i class="fas fa-edit"></i>
                  <i class="fas fa-trash-o"></i>
                </div>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
          </div>
        </div>
      </div>


    </div>




    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title">Latest News</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
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
                            <span class="badge badge-secondary">{{$catagory->name}}</span>

                            @endforeach
                        </td>
                        <td>
                            @foreach($post->tags as $tag)
                            <span class="badge badge-info">{{$tag->name}}</span>

                            @endforeach
                        </td>
                        <td>{{$post->user->name}}</td>

                        <td class="d-flex">
                            <a href="{{route('post.show',[$post->id])}}"
                                class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i>  </a>

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
        <!-- /.table-responsive -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <a href="{{route('post.create')}}" class="btn btn-sm btn-info float-left">Create News</a>


        <a href="{{route('post.index')}}" class="btn btn-sm btn-dark float-right">View All News</a>
      </div>
      <!-- /.card-footer -->
    </div>











  </div>

@endsection
