@extends('master.main2')

@section('content')


<!-- top news -->
<section class="top-news">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="row news-area">
                    @foreach ($catagory as $c)

                    <div class="col-md-8 ">
                        <div class="news-item">
                            <div class="pos-rel">
                                <img src="{{asset($c->image)}}" alt="">
                                <div class="date-month">
                                    <div class="date">13</div>
                                    <div class="month">May</div>
                                </div>
                                <!-- date -->
                            </div>
                            <!-- pos-rel -->
                            <div class="news-title">
                                <h2 class="title">
                                    <a href="{{route('website.news',['slug' => $c->slug])}}" class="red">{{$c->title}}</a>
                                </h2>
                                <!-- <div class="author">
                                By: <a href="{{route('website.news',['slug' => $c->slug])}}">Author</a>
                                </div>  author -->
                            </div>
                            <!-- news-title -->
                            <div class="news-des">
                                <p>{!!Str::limit($c->description,500)!!}</p>
                                <a href="{{route('website.news',['slug' => $c->slug])}}"> more</a>
                            </div>
                            <!-- news-des -->
                        </div>
                        <!-- news-item -->
                    </div>

                    @endforeach

                    <!-- col-md-8 -->
                    <div class="col-md-4 news-right">

                        <!-- news-item -->
                        @foreach ($catagory1ofset as $c)

                        <div class="news-item">
                            <div class="pos-rel">
                                <img src="{{asset($c->image)}}" alt="">
                                <div class="news-title">
                                    <h2 class="title">
                                        <a href="{{route('website.news',['slug' => $c->slug])}}">{{$c->title}}</a>
                                    </h2>
                                    <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $c->slug])}}">Author</a>
                                    </div>  author -->
                                </div>
                                <!-- news-title -->
                            </div>
                            <!-- pos-rel -->
                        </div>

                        @endforeach
                        <!-- news-item -->
                    </div>
                    <!-- col-md-4 -->


                    <!-- col-md-4 -->
                    @foreach ($catagory1ofset2 as $c)


                    <div class="col-md-4 news-right">
                        <div class="news-item">
                            <div class="pos-rel">
                                <img src="{{asset($c->image)}}" alt="">
                                <div class="news-title">
                                    <h2 class="title">
                                        <a href="{{route('website.news',['slug' => $c->slug])}}">{{$c->title}}</a>
                                    </h2>
                                    <!-- <div class="author">
                                By: <a href="{{route('website.news',['slug' => $c->slug])}}">Author</a>
                                </div>  author -->
                                </div>
                                <!-- news-title -->
                            </div>
                            <!-- pos-rel -->
                        </div>
                        <!-- news-item -->
                    </div>

                    @endforeach
                    <!--col-md-4 --->
                </div>
            </div>

            <!--side bar -->
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="news-item cat-news">
                            <div class="top-border d-flex flex-row flex-grow-1 flex-fill bg-light  py-2  px-1 ">
                                <span class="d-flex ">Recent News</span>
                            </div>
                            <!-- news title -->
                            <div class="news-border">
                                @foreach ($recentnews as $c)

                                <div class="sidebar-news">
                                    <div class="pos-rel">
                                        <img src="{{asset($c->image)}}" alt="">
                                    </div>
                                    <!-- pos-rel -->
                                    <div class="news-title">
                                        <h2 class="title">
                                            <a href="{{route('website.news',['slug' => $c->slug])}}" class="red">{{$c->title}}</a>
                                        </h2>
                                        <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $c->slug])}}">Author</a>
                                    </div>  author -->
                                    </div>
                                    <!-- news-title -->
                                </div>

                                @endforeach

                                <!--sidebar-news  -->
                                <div class="single-news">
                                    <ul>

                                        @foreach ($recentofsetnews as $c)

                                            <li>
                                                <div class="tab-item cat-news">
                                                    <div class="tabs">
                                                        <div class="tab-news">
                                                            <img src="{{asset($c->image)}}"
                                                                class="img-fluid rounded mx-auto d-block" alt="">
                                                        </div>
                                                        <!-- pos-rel -->
                                                        <div class="headline">
                                                            <h2 class="title">
                                                                <a href="{{route('website.news',['slug' => $c->slug])}}" class="red">{{$c->title}}</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <!--sidebar-news  -->
                                                </div>
                                                <!-- tab-item -->
                                                <!-- tab-item -->
                                            </li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- news-item -->
                        </div>
                        <!-- news-border -->
                    </div>
                    <!-- col-md-12 -->
                </div>
                <!-- row -->
            </div>
            <!--side bar -->
            <!-- sidebar -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- top news -->


@endsection
