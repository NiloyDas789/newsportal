<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->


    @yield('meta')


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicion -->
    <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- fontwasome -->
    <link rel="stylesheet" type="text/css" href="{{asset('main2')}}/css/all.min.css">
    <!--custom style -->
    <link rel="stylesheet" type="text/css" href="{{asset('main2')}}/css/style.css">
    <!-- responsive style -->
    <link rel="stylesheet" type="text/css" href="{{asset('main2')}}/css/responsive.css">
    {{-- Autocomplete css --}}
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />

    <title>Chattogram News | </title>
</head>

<body>
    <!-- header -->
    <header class="header">
        <!-- top bar area -->
        <div class="top-bar">
            <div class="container">
                <div class="top-content">
                    <div class="top-left">
                        <ul>
                            <li><a href="">contact</a></li>
                            <li><a href="">about</a></li>
                            <li><a href="">privacy</a></li>
                        </ul>
                    </div>
                    <!-- top-left -->
                    <!-- top-right -->
                    <div class="top-right">
                        <ul>
                            <li><a target="blank" href="{{$setting->facebook}}"><i
                                        class="fab fa-facebook-square"></i></a></li>
                            <li><a target="blank" href="{{$setting->twitter}}"><i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li><a target="blank" href="{{$setting->youtube}}"><i class="fab fa-youtube-square"></i></a>
                            </li>
                            <li><a target="blank" href="{{$setting->email}}"><i class="fas fa-envelope-square"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- top-right -->
                </div>
                <!-- top-content -->
            </div>
            <!-- container -->
        </div>
        <!-- top-bar -->
        <!-- top bar area -->
        <!-- logo area -->
        <div class="logo-area">
            <div class="container">
                <div class="logo-content">
                    <div class="logo">
                        <a class="navbar-brand" style=" width: 400px;" href="{{url('/')}}"><img class="img-fluid"
                                src="{{asset($setting->site_logo)}}"></a>
                    </div>
                    <!-- logo -->
                    <div class="banner-ads">
                        <a class="" href="#"><img class="img-fluid" src="{{asset('main2')}}/images/ads.png"></a>
                    </div>
                    <!-- logo-content -->
                </div>
                <!-- logo-content -->
            </div>
            <!-- container -->
        </div>
        <!-- logo area -->
        <!-- main menu area -->
        <div class="main-menu">
            <nav class="navbar container navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}"> <i class="fas fa-home"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 1])}}">শীর্ষ সংবাদ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 5])}}">জাতীয়</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 6])}}">রাজনীতি</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 8])}}">দেশজুড়ে</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 9])}}">আন্তর্জাতিক</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 15])}}">প্রেস বিফ্রিং</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 10])}}">বিনোদন</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 11])}}">লাইফস্টাইল</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 7])}}">শিল্পবানিজ্য</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website.catagory',['id' => 3])}}">মহানগর</a>
                        </li>
                        <!-- dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                বাংলাদেশ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li class="dropdown-item"><a class="nav-link" href="{{route('website.catagory',['id' => 16])}}">ঢাকা বিভাগ</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="{{route('website.catagory',['id' => 17])}}">চট্টগ্রাম বিভাগ</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="{{route('website.catagory',['id' => 18])}}">সিলেট বিভাগ</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="{{route('website.catagory',['id' => 19])}}">বরিশাল বিভাগ</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="{{route('website.catagory',['id' => 20])}}">খুলনা বিভাগ</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="{{route('website.catagory',['id' => 21])}}">রাজশাহী বিভাগ</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="{{route('website.catagory',['id' => 22])}}">রংপুর বিভাগ</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="{{route('website.catagory',['id' => 23])}}">ময়মনসিংহ বিভাগ</a></li>
                            </ul>
                        </li>
                        <!-- dropdown -->
                    </ul>
                    <!-- navbar-nav -->
                </div>
                <!-- navbar-collapse -->
            </nav>
            <!-- navbar -->
        </div>
        <!-- main-menu -->
    </header>
    <!--header -->
    <!-- breaking area -->
    <div class="breaking-area m-1">
        <div class="container">
            <div class="top-content">
                <div class="breaking">
                    <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                        <div
                            class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news">
                            <span class="d-flex align-items-center">&nbsp;Headline</span>
                        </div>
                        <!-- news -->
                        <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();"
                            onmouseout="this.start();">
                            <a
                             href="#">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum. </a>
                            <span class="dot"></span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut </a>
                            <span class="dot"></span> <a href="#">Duis aute irure dolor in reprehenderit in voluptate
                                velit esse </a>
                        </marquee>
                        <!-- news-scroll -->
                    </div>
                    <!-- breaking-news -->
                </div>
                <!-- breaking -->
                <!-- breaking -->
                <div class="search-area">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                                <input style="max-width: 158px;" type="text" id="search_content"
                                    class="form-control">



                            </div>
                            <div id="search-output"> </div>

                        </div>


                </div>
                <!-- search-area -->
                <!-- search-area -->
            </div>
            <!-- top-content -->
        </div>
        <!-- container -->
    </div>





    @yield('content')


















    <!-- footer -->
    <footer>
        <!-- main footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="widget widget-one">
                            <div class="widget-logo">
                                <a href="#"><img style=" width: 400px;" src="{{asset($setting->site_logo)}}"
                                        class="img-fluid"></a>
                            </div>
                            <!-- widget-logo -->
                            <div class="widget-social">
                                <ul>
                                    <li><a target="blank" href="{{$setting->facebook}}"><i
                                                class="fab fa-facebook"></i></a></li>
                                    <li><a target="blank" href="{{$setting->twitter}}"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a target="blank" href="{{$setting->youtube}}"><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a target="blank" href="{{$setting->email}}"><i
                                                class="fas fa-envelope-square"></i></a></li>
                                </ul>
                            </div>
                            <!-- widget-social -->

                        </div>
                        <!-- widget -->
                    </div>
                    <!-- col-lg-3 -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="widget">
                            {{-- <div class="widget-title">
                           <h4>Editorials</h4>
                        </div> --}}
                            <!-- widget-title -->
                            <div class="widget-content">
                                {!!$setting->chief_adviser!!}
                            </div>
                            <!-- widget-content -->
                        </div>
                        <!-- widget -->
                    </div>
                    <!-- col-lg-3 -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Address</h4>
                            </div>
                            <!-- widget-title -->
                            <div class="widget-content">
                                {{-- <div class="widget-address">
                              <ul>
                                 <li><i class="fas fa-map-marker-alt"></i>৯২ মোমিন রোড, শাহ আনিস মার্কেট (৫ম তলা), চেরাগী পাহাড়, চট্টগ্রাম।</li>
                                 <li><i class="fas fa-phone-square-alt"></i>ফোনঃ ০৩১-৬৩৬২০০,০১৭১১০৩৯৫৭৬</li>
                                 <li><i class="far fa-envelope"></i>ইমেইল: news@ctgnews.com, ctgnews.com@gmail.com</li>
                              </ul>
                           </div> --}}
                                {{$setting->about_site}}
                                <!-- widget-address -->
                            </div>
                            <!-- widget-content -->
                        </div>
                        <!-- widget -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Menu</h4>
                            </div>
                            <!-- widget-title -->
                            <div class="widget-content">
                                <div class="widget-address">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">privacy policy</a></li>
                                        <li><a href="#">About Editors</a></li>
                                    </ul>
                                </div>
                                <!-- widget-address -->
                            </div>
                            <!-- widget-content -->
                        </div>
                        <!-- widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <p>{{$setting->copyright}}</p>
            </div>
        </div>
        <!-- copyright -->
    </footer>
    <!-- footer -->
    <div class="top">
        <a href="#" class="back-to-top"><i class="fas fa-arrow-circle-up"></i></a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{asset('main2')}}/js/custom.js"></script>

    {{-- Autocomplete Script --}}

    <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>





    @yield('script')




    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60e045b1338d6b72"></script>

    <script>
        $('#search_content').keyup(function () {
            var text = $('#search_content').val();
            if (text.length < 1) {
                $('#search-output').hide();
                return false;
            } else {
                $.ajax({
                    type  : "get",
                    url : "{{url('search-content')}}",
                    data : {text: text},
                    success: function (res) {

                        $('#search-output').show();
                        $('#search-output').html(res);
                    }
                })
            }

        });

    </script>

</body>

</html>
