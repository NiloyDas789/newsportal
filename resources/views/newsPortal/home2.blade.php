@extends('master.main2')

@section('content')



<!-- breaking area -->
<!-- top news -->
<section class="top-news">
    <div class="container">
        <div class="row">

            <div class="col-md-8 ">
                <div class="row news-area">
                    @foreach ($topnews1 as $topnew)
                    <div class="col-md-8 ">
                        <div class="news-item">
                            <div class="pos-rel">
                                <img src="{{asset($topnew->image)}}" alt="">
                                <div class="date-month">
                                    <div class="date">13</div>
                                    <div class="month">May</div>
                                </div>
                                <!-- date -->
                            </div>
                            <!-- pos-rel -->
                            <div class="news-title">
                                <h2 class="title">
                                    <a href="{{route('website.news',['slug' => $topnew->slug])}}" class="red">{{$topnew->title}}</a>
                                </h2>
                                <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $topnew->slug])}}">Author</a>
                                    </div>  author -->
                            </div>
                            <!-- news-title -->
                            <div class="news-des">
                                <p> {!!Str::limit($topnew->description,500)!!}</p>
                                <a href="{{route('website.news',['slug' => $topnew->slug])}}">More</a>
                            </div>
                            <!-- news-des -->
                        </div>
                        <!-- news-item -->
                    </div>
                    @endforeach
                    <!-- col-md-8 -->
                    <div class="col-md-4 news-right">

                        @foreach ($topnews1ofset as $topnewofset)
                            <div class="news-item">
                                <div class="pos-rel">
                                    <img src="{{asset($topnewofset->image)}}" alt="">
                                    <div class="news-title">
                                        <h2 class="title">
                                            <a href="{{route('website.news',['slug' => $topnewofset->slug])}}">{{$topnewofset->title}}</a>
                                        </h2>
                                        <!-- <div class="author">
                                        By: <a href="#">Author</a>
                                        </div>  author -->
                                    </div>
                                    <!-- news-title -->
                                </div>
                                <!-- pos-rel -->
                            </div>
                        @endforeach

                        <!-- news-item -->

                        <!-- news-item -->
                    </div>
                    <!-- col-md-4 -->

                    <!--col-md-4 --->
                   @foreach ($topnews1ofset2 as $topnewofset2)
                        <div class="col-md-4 news-right">
                            <div class="news-item">
                                <div class="pos-rel">
                                    <img src="{{asset($topnewofset2->image)}}" alt="">
                                    <div class="news-title">
                                        <h2 class="title">
                                            <a href="{{route('website.news',['slug' => $topnewofset2->slug])}}"> {{$topnewofset2->title}} </a>
                                        </h2>
                                        <!-- <div class="author">
                                        By: <a href="">Author</a>
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


            <div class="col-md-4">
                <div class="news-item sidebar">
                    <div class="d-flex flex-row flex-grow-1 flex-fill bg-danger py-2 text-white px-1 news">
                        <span class="d-flex ">&nbsp; টপ নিউজ </span>
                    </div>
                    <!-- news -->


                    @foreach ($topnews2 as $topnew2)

                        <div class="sidebar-news">
                            <div class="pos-rel">
                                <img src="{{asset($topnew2->image)}}" alt="">
                            </div>
                            <!-- pos-rel -->
                            <div class="news-title">
                                <h2 class="title">
                                    <a href="{{route('website.news',['slug' => $topnew2->slug])}}" class="red">{{$topnew2->title}}</a>
                                </h2>
                                <!-- <div class="author">
                                By: <a href="{{route('website.news',['slug' => $topnew2->slug])}}">Author</a>
                                </div>  author -->
                            </div>
                            <!-- news-title -->
                        </div>

                    @endforeach
                    <!--sidebar-news  -->
                </div>
                <!-- news-item -->
                <div class="news-item sidebar">
                    <div class="d-flex flex-row flex-grow-1 flex-fill bg-danger py-2 text-white px-1 news">
                        <span class="d-flex ">&nbsp;প্রেস বিফ্রিং</span>
                    </div>
                    <!-- news -->


                    @foreach ($pressbriefnews as $pressbriefnew)

                        <div class="sidebar-news">
                            <div class="pos-rel">
                                <img src="{{asset($pressbriefnew->image)}}" alt="">
                            </div>
                            <!-- pos-rel -->
                            <div class="news-title">
                                <h2 class="title">
                                    <a href="{{route('website.news',['slug' => $pressbriefnew->slug])}}" class="red">{{$pressbriefnew->title}}</a>
                                </h2>
                                <!-- <div class="author">
                                By: <a href="{{route('website.news',['slug' => $pressbriefnew->slug])}}">Author</a>
                                </div>  author -->
                            </div>
                            <!-- news-title -->
                        </div>

                    @endforeach
                    <!--sidebar-news  -->
                </div>
                <!-- news-item -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- top news -->
<!-- full-banner -->
<section class="full-banner">
    <div class="container">
        <div class="row">
            <img src="{{asset('main2')}}/images/full-ads.png" class="img-fluid w-100">
        </div>
        <!-- container -->
    </div>
    <!-- row -->
</section>
<!-- full-banner -->
<!-- catagory news -->
<section class="catagory">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-item cat-news">
                            <div class="d-flex flex-row flex-grow-1 flex-fill bg-light py-2  px-1 news">
                                <span class="d-flex ">&nbsp;মহানগর</span>
                            </div>
                            <!-- news -->
                            @foreach ($mohanogornews as $mohanogornew)

                                <div class="sidebar-news">
                                    <div class="pos-rel">
                                        <img src="{{asset($mohanogornew->image)}}" alt="">
                                    </div>
                                    <!-- pos-rel -->
                                    <div class="news-title">
                                        <h2 class="title">
                                            <a href="{{route('website.news',['slug' => $mohanogornew->slug])}}" class="red">{{$mohanogornew->title}}</a>
                                        </h2>
                                        <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $mohanogornew->slug])}}">Author</a>
                                    </div>  author -->
                                    </div>
                                    <!-- news-title -->
                                </div>

                            @endforeach

                            <!--sidebar-news  -->
                        </div>
                        <!-- news-item -->
                    </div>
                    <!-- col-md-12 -->

                    <!-- col-md-6 -->
                    @foreach ($mohanogorofsetnews as $mohanogorofsetnew)

                        <div class="col-md-6">
                            <div class="news-item cat-news">
                                <div class="sidebar-news">
                                    <div class="pos-rel">
                                        <img src="{{asset($mohanogorofsetnew->image)}}" alt="">
                                    </div>
                                    <!-- pos-rel -->
                                    <div class="news-title">
                                        <h2 class="title">
                                            <a href="{{route('website.news',['slug' => $mohanogorofsetnew->slug])}}" class="red">{{$mohanogorofsetnew->title}}</a>
                                        </h2>
                                        <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $mohanogorofsetnew->slug])}}">Author</a>
                                    </div>  author -->
                                    </div>
                                    <!-- news-title -->
                                </div>
                                <!--sidebar-news  -->
                            </div>
                            <!-- news-item -->
                        </div>


                    @endforeach
                    <!-- col-md-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- col-md-4 -->
            <!-- tab section -->
            <div class="col-md-4 ">
                <div class="news-item cat-news">
                    <!-- tabs -->
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item tabs-links nav-link active" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Recent</a>
                            <a class="nav-item tabs-links nav-link" id="nav-profile-tab" data-toggle="tab"
                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Popular</a>
                        </div>
                    </nav>
                    <div class="tab-content mytabs py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane  fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <!-- tab-item -->

                            <!-- tab-item -->
                            <!-- tab-item -->
                            <!-- tab-item -->
                            @foreach ($recentnews as $recentnew)

                                <div class="tab-item cat-news">
                                    <div class="tabs">
                                        <div class="tab-news">
                                            <img src="{{asset($recentnew->image)}}"
                                                class="img-fluid rounded mx-auto d-block" alt="">
                                        </div>
                                        <!-- pos-rel -->
                                        <div class="tab-headline">
                                            <h2 class="title">
                                                <a href="{{route('website.news',['slug' => $recentnew->slug])}}" class="red">{{$recentnew->title}}</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <!--sidebar-news  -->
                                </div>

                            @endforeach
                            <!-- tab-item -->
                            <!-- tab-item -->
                        </div>
                        <!-- tab-pane -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <!-- tab-item -->

                            <!-- tab-item -->
                            <!-- tab-item -->
                            <!-- tab-item -->
                            @foreach ($popularnews as $c)


                                <div class="tab-item cat-news">
                                    <div class="tabs">
                                        <div class="tab-news">
                                            <img src="{{asset($c->image)}}"
                                                class="img-fluid rounded mx-auto d-block" alt="">
                                        </div>
                                        <!-- pos-rel -->
                                        <div class="tab-headline">
                                            <h2 class="title">
                                                <a href="{{route('website.news',['slug' => $c->slug])}}" class="red">{{$c->title}}</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <!--sidebar-news  -->
                                </div>


                            @endforeach
                            <!-- tab-item -->
                            <!-- tab-item -->
                        </div>
                    </div>
                </div>
                <!-- news-item -->
            </div>
            <!-- col-md-4 -->
            <!-- tab section -->
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-item cat-news">
                            <div class="d-flex flex-row flex-grow-1 flex-fill bg-light py-2  px-1 news">
                                <span class="d-flex ">&nbsp;চট্রগ্রাম জেলা</span>
                            </div>
                            <!-- news -->

                            @foreach ($chottogramnews as $chottogramnew)

                                <div class="sidebar-news">
                                    <div class="pos-rel">
                                        <img src="{{asset($chottogramnew->image)}}" alt="">
                                    </div>
                                    <!-- pos-rel -->
                                    <div class="news-title">
                                        <h2 class="title">
                                            <a href="{{route('website.news',['slug' => $chottogramnew->slug])}}" class="red">{{$chottogramnew->title}}</a>
                                        </h2>
                                        <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $chottogramnew->slug])}}">Author</a>
                                    </div>  author -->
                                    </div>
                                    <!-- news-title -->
                                </div>

                            @endforeach

                            <!--sidebar-news  -->
                        </div>
                        <!-- news-item -->
                    </div>
                    <!-- col-md-12 -->

                    <!-- col-md-6 -->
                    @foreach ($chottogramofsetnews as $chottogramofsetnew)

                        <div class="col-md-6">
                            <div class="news-item cat-news">
                                <div class="sidebar-news">
                                    <div class="pos-rel">
                                        <img src="{{asset($chottogramofsetnew->image)}}" alt="">
                                    </div>
                                    <!-- pos-rel -->
                                    <div class="news-title">
                                        <h2 class="title">
                                            <a href="{{route('website.news',['slug' => $chottogramofsetnew->slug])}}" class="red">{{$chottogramofsetnew->title}}</a>
                                        </h2>
                                        <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $chottogramofsetnew->slug])}}">Author</a>
                                    </div>  author -->
                                    </div>
                                    <!-- news-title -->
                                </div>
                                <!--sidebar-news  -->
                            </div>
                            <!-- news-item -->
                        </div>

                    @endforeach
                    <!-- col-md-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- col-md-4 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- catagory news -->
<!-- 3 column news -->
<section class="3c">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="news-item cat-news">
                            <div class="top-border d-flex flex-row flex-grow-1 flex-fill bg-light  py-2  px-1 ">
                                <span class="d-flex ">&nbsp;জাতীয়</span>
                            </div>
                            <!-- news -->
                            <div class="news-border">

                                @foreach ($jatiyonews as $jatiyonew)

                                    <div class="sidebar-news">
                                        <div class="pos-rel">
                                            <img src="{{asset($jatiyonew->image)}}" alt="">
                                        </div>
                                        <!-- pos-rel -->
                                        <div class="news-title">
                                            <h2 class="title">
                                                <a href="{{route('website.news',['slug' => $jatiyonew->slug])}}" class="red">{{$jatiyonew->title}}</a>
                                            </h2>
                                            <!-- <div class="author">
                                        By: <a href="">Author</a>
                                        </div>  author -->
                                        </div>
                                        <!-- news-title -->
                                    </div>

                                @endforeach

                                <!--sidebar-news  -->
                                <div class="single-news">
                                    <ul>

                                        @foreach ($jatiyoofsetnews as $jatiyoofsetnew)

                                            <li>
                                                <div class="tab-item cat-news">
                                                    <div class="tabs">
                                                        <div class="tab-news">
                                                            <img style="height: 100px; width: 200px;"  src="{{asset($jatiyoofsetnew->image)}}"
                                                                class="img-fluid rounded mx-auto d-block" alt="">
                                                        </div>
                                                        <!-- pos-rel -->
                                                        <div class="headline">
                                                            <h2 class="title">
                                                                <a href="{{route('website.news',['slug' => $jatiyoofsetnew->slug])}}" class="red">{{$jatiyoofsetnew->title}}</a>
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
            <!-- col-md-4 -->
            <div class="col-md-4 ">
                <div class="row bg-primary">
                    <div class="col-md-12">
                        <div class="news-item cat-news">
                            <div class=" top-border d-flex flex-row flex-grow-1 flex-fill bg-light py-2  px-1 ">
                                <span class="d-flex ">&nbsp;রাজনীতি</span>
                            </div>
                            <!-- news -->
                        </div>
                        <!-- news-item -->
                    </div>
                    <!-- col-md-12 -->

                    <!-- col-md-6 -->
                    @foreach ($rajnitinews as $rajnitinew)


                        <div class="col-md-6 borderright">
                            <div class="news-item cat-news">
                                <div class="sidebar-news">
                                    <div class="pos-rel">
                                        <img src="{{asset($rajnitinew->image)}}" alt="">
                                    </div>
                                    <!-- pos-rel -->
                                    <div class="news-title">
                                        <h2 class="title cat3">
                                            <a href="{{route('website.news',['slug' => $rajnitinew->slug])}}" class="red">{{$rajnitinew->title}}</a>
                                        </h2>
                                        <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $topnew->slug])}}">Author</a>
                                    </div>  author -->
                                    </div>
                                    <!-- news-title -->
                                </div>
                                <!--sidebar-news  -->
                            </div>
                            <!-- news-item -->
                        </div>

                    @endforeach
                    <!-- col-md-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- col-md-4 -->
            <!-- tab section -->
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="news-item cat-news">
                            <div class="top-border d-flex flex-row flex-grow-1 flex-fill bg-light  py-2  px-1 ">
                                <span class="d-flex ">&nbsp;শিল্পবানিজ্য</span>
                            </div>
                            <!-- news -->
                            <div class="news-border">

                                @foreach ($shilpobanijjonews as $c)

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

                                        @foreach ($shilpobanijjoofsetnews as $c)

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
            <!-- col-md-4 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- 3 column news -->
<!-- 2 column news -->
<section class="col2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 border-bottom-1">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="news-item cat-news">
                            <div class="top-border d-flex flex-row flex-grow-1 flex-fill bg-light  py-2  px-1 ">
                                <span class="d-flex ">&nbsp;দেশজুড়ে</span>
                            </div>
                            <!-- news -->
                        </div>
                        <!-- news-border -->
                    </div>
                    <!-- col-md-12 -->

                    @foreach ($deshjurenews as $deshjurenew)


                        <div class="col-md-4">
                            <div class="sidebar-news entaiment">
                                <div class="pos-rel myimg">
                                    <img src="{{asset($deshjurenew->image)}}" class="img-fluid" alt="">
                                </div>
                                <!-- pos-rel -->
                                <div class="news-title cat-c">
                                    <h2 class="title">
                                        <a href="{{route('website.news',['slug' => $deshjurenew->slug])}}" class="red">{{$deshjurenew->title}}</a>
                                    </h2>
                                    <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $topnew->slug])}}">Author</a>
                                    </div>  author -->
                                </div>
                                <!-- news-title -->
                            </div>
                            <!--sidebar-news  -->
                        </div>

                    @endforeach
                    <div class="col-md-4">
                        <div class="single-news cat2-side-news">
                            <ul>

                                @foreach ($deshjureofsetnews as $deshjureofsetnew)

                                    <li>
                                        <div class="tab-item cat-news">
                                            <div class="tabs">
                                                <div class="tab-news">
                                                    <img src="{{asset($deshjureofsetnew->image)}}"
                                                        class="img-fluid rounded mx-auto d-block" alt="">
                                                </div>
                                                <!-- pos-rel -->
                                                <div class="headline">
                                                    <h2 class="title">
                                                        <a href="{{route('website.news',['slug' => $deshjureofsetnew->slug])}}" class="red">{{$deshjureofsetnew->title}}</a>
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
                </div>
                <!-- row -->
            </div>
            <!-- col-md-6 -->
            <!-- tab section -->
            <div class="col-md-6 border-bottom-1">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="news-item cat-news">
                            <div class="top-border d-flex flex-row flex-grow-1 flex-fill bg-light  py-2  px-1 ">
                                <span class="d-flex ">&nbsp;আন্তর্জাতিক</span>
                            </div>
                            <!-- news -->
                        </div>
                        <!-- news-border -->
                    </div>
                    <!-- col-md-12 -->
                    @foreach ($internationalnews as $internationalnew)

                        <div class="col-md-6">
                            <div class="sidebar-news entaiment">
                                <div class="pos-rel myimg">
                                    <img src="{{asset($internationalnew->image)}}" class="img-fluid" alt="">
                                </div>
                                <!-- pos-rel -->
                                <div class="news-title cat-c">
                                    <h2 class="title">
                                        <a href="{{route('website.news',['slug' => $internationalnew->slug])}}" class="red">{{$internationalnew->title}}</a>
                                    </h2>
                                    <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $topnew->slug])}}">Author</a>
                                    </div>  author -->
                                </div>
                                <!-- news-title -->
                            </div>
                            <!--sidebar-news  -->
                        </div>

                    @endforeach

                    <div class="col-md-6">
                        <div class="single-news cat2-side-news">
                            <ul>

                                @foreach ($internationalofsetnews as $internationalofsetnew)

                                    <li>
                                        <div class="tab-item cat-news">
                                            <div class="tabs">
                                                <div class="tab-news">
                                                    <img src="{{asset($internationalofsetnew->image)}}"
                                                        class="img-fluid rounded mx-auto d-block" alt="">
                                                </div>
                                                <!-- pos-rel -->
                                                <div class="headline">
                                                    <h2 class="title">
                                                        <a href="{{route('website.news',['slug' => $internationalofsetnew->slug])}}" class="red">{{$internationalofsetnew->title}}</a>
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
                </div>
                <!-- row -->
            </div>
            <!-- col-md-6 -->
            <!-- col-md-6 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- 2 column news -->
<!-- 3 column news -->
<section class="thirsrdcat">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-item cat-news">
                            <div class="d-flex flex-row flex-grow-1 flex-fill bg-light py-2  px-1 news">
                                <span class="d-flex ">&nbsp;খেলাধুলা</span>
                            </div>
                            <!-- news -->



                            @foreach ($khelanews as $c)

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
                        </div>
                        <!-- news-item -->
                    </div>
                    <!-- col-md-12 -->

                    <!-- col-md-6 -->
                    @foreach ($khelaofsetnews as $c)

                        <div class="col-md-6">
                            <div class="news-item cat-news">
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
                                <!--sidebar-news  -->
                            </div>
                            <!-- news-item -->
                        </div>

                    @endforeach
                    <!-- col-md-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- col-md-4 -->
            <!-- middle section -->
            <div class="col-md-4 ">
                <div class="row last-sec">
                    <div class="col-md-12">
                        <div class="news-item cat-news">
                            <div class=" top-border d-flex flex-row flex-grow-1 flex-fill bg-light py-2  px-1 ">
                                <span class="d-flex ">&nbsp;চাকুরীর সংবাদ</span>
                            </div>
                            <!-- news -->
                        </div>
                        <!-- news-item -->
                    </div>
                    <!-- col-md-12 -->

                    <!-- col-md-12 -->
                    @foreach ($jobnews as $c)

                        <div class="col-md-12 ">
                            <div class="news-item cat-news">
                                <div class="sidebar-news">
                                    <div class="pos-rel">
                                        <img src="{{asset($c->image)}}" alt="">
                                    </div>
                                    <!-- pos-rel -->
                                    <div class="news-title">
                                        <h2 class="title cat3">
                                            <a href="{{route('website.news',['slug' => $c->slug])}}" class="red">{{$c->title}}</a>
                                        </h2>
                                        <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $c->slug])}}">Author</a>
                                    </div>  author -->
                                    </div>
                                    <!-- news-title -->
                                </div>
                                <!--sidebar-news  -->
                            </div>
                            <!-- news-item -->
                        </div>

                    @endforeach
                    <!-- col-md-12 -->
                </div>
                <!-- row -->
            </div>
            <!-- col-md-4 -->
            <!-- middle section -->
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-item cat-news">
                            <div class="d-flex flex-row flex-grow-1 flex-fill bg-light py-2  px-1 news">
                                <span class="d-flex ">&nbsp;বিনোদন</span>
                            </div>
                            <!-- news -->

                            @foreach ($binodonnews as $c)

                                <div class="sidebar-news">
                                    <div class="pos-rel">
                                        <img src="{{asset($c->image)}}" alt="">
                                    </div>
                                    <!-- pos-rel -->
                                    <div class="news-title">
                                        <h2 class="title">
                                            <a href="{{route('website.news',['slug' => $c->slug])}}" class="red">{{$c->title}}>
                                        </h2>
                                        <!-- <div class="author">
                                    By: <a href="{{route('website.news',['slug' => $c->slug])}}">Author</a>
                                    </div>  author -->
                                    </div>
                                    <!-- news-title -->
                                </div>

                            @endforeach
                            <!--sidebar-news  -->
                        </div>
                        <!-- news-item -->
                    </div>
                    <!-- col-md-12 -->

                    <!-- col-md-6 -->
                    @foreach ($binodonofsetnews as $c)

                        <div class="col-md-6">
                            <div class="news-item cat-news">
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
                                <!--sidebar-news  -->
                            </div>
                            <!-- news-item -->
                        </div>

                    @endforeach
                    <!-- col-md-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- col-md-4 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- 3 column news -->
<!-- final section -->
<section class="final">
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="news-item cat-news">
                            <div class="top-border d-flex flex-row flex-grow-1 flex-fill bg-light  py-2  px-1 ">
                                <span class="d-flex ">&nbsp;অর্থনীতি</span>
                            </div>
                            <!-- news title -->
                            <div class="news-border">

                                @foreach ($orthonitinews as $c)

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

                                        @foreach ($orthonitiofsetnews as $c)

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
            <!-- col-md-3 -->
            <div class="col-md-3 ">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="news-item cat-news">
                            <div class="top-border d-flex flex-row flex-grow-1 flex-fill bg-light  py-2  px-1 ">
                                <span class="d-flex ">&nbsp;স্বাস্থ্য সংবাদ</span>
                            </div>
                            <!-- news title -->
                            <div class="news-border">

                                @foreach ($healthnews as $c)

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

                                        @foreach ($healthofsetnews as $c)

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
            <!-- col-md-3 -->
            <div class="col-md-3 ">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="news-item cat-news">
                            <div class="top-border d-flex flex-row flex-grow-1 flex-fill bg-light  py-2  px-1 ">
                                <span class="d-flex ">&nbsp;সম্পাদকিয়</span>
                            </div>
                            <!-- news title -->
                            <div class="news-border">

                                @foreach ($shompadokiyonews as $c)

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

                                        @foreach ($shompadokiyoofsetnews as $c)

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
            <!-- col-md-3 -->
            <div class="col-md-3 ">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="news-item cat-news">
                            <div class="top-border d-flex flex-row flex-grow-1 flex-fill bg-light  py-2  px-1 ">
                                <span class="d-flex ">&nbsp;শিক্ষা</span>
                            </div>
                            <!-- news title -->
                            <div class="news-border">

                                @foreach ($shikkhanews as $c)

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

                                        @foreach ($shikkhaofsetnews as $c)

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
            <!-- col-md-3 -->
        </div>
    </div>
    <!-- conatainer -->
</section>
<!-- final section -->

@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
