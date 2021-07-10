<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>chattagram news </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="favicon.ico" >
        <link rel="stylesheet" href="{{asset('main')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('main')}}/css/animate.css">
		<link rel="stylesheet" href="{{asset('main')}}/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('main')}}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{asset('main')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('main')}}/css/my.css">
        <link rel="stylesheet" href="{{asset('main')}}/css/hover-min.css">
        <link rel="stylesheet" href="{{asset('main')}}/css/responsive.css">
        <link rel="stylesheet" href="{{asset('admin/css/summernote-bs4.min.css')}}">
        @yield('style')
    </head>
    <body>
		<section id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 border_top">
						<div class="date">
							<p>বুধবার, ১০ আগস্ট ২০১৬ | ২৬ শ্রাবণ ১৪২৩ বঙ্গাব্দ</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 hidden-xs border_top">
						<div class="f_icon">
							<a href="{{ $setting->facebook}}" target="blank" ><i class="fa fa-facebook"></i></a>
							<a href="{{ $setting->twitter}}" target="blank" ><i class="fa fa-twitter"></i></a>
							<a href="{{ $setting->email}}" target="blank" ><i class="fa fa-google-plus"></i></a>
							<a href="{{ $setting->youtube}}" target="blank"  ><i class="fa fa-youtube"></i></a>


						</div>
					</div>
					<div class="col-md-3 col-sm-3 hidden-xs border_top">
						<div class="search_area">
							<form class="navbar-form navbar-right" action="#" target="_blank" >
								<div class="input-group">
									<input type="text" class="form-control search_area_bar" placeholder="অনুসন্ধান"">
									<span class="input-group-btn">
									<button class="btn btn-naem" type="button"><i class="fa fa-search"></i>
									</button>
									</span>
								</div><!-- /input-group -->
							</form>
						</div>
					</div>



                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->


                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))

                            @endif

                            @if (Route::has('register'))

                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <div class=" d-flex justify-content-between align-items-center">
                                <h3 class="card-title"></h3>
                                <a href="{{route('home')}}" class="btn btn-primary">Go to Dashboard</a>
                            </div>
                            @endguest
                        </ul>
                    </div>
				</div>
				<div class="row logo_area">
					<div class="col-md-4 col-sm-4 col-xs-12 ">
						<div class="logo">
							<a href="#"><img src="{{$setting->site_logo}}" class="img-responsive"></a>
						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="block">
						<div class="logo_banner"><a href="#"><img src="{{asset('main')}}/images/banner.gif" class="img-responsive " title="banner" alt="banner"></a></div>
						</div>
					</div>
				</div><!------End Of Logo Area------->
				<div class="row">
					<nav class="navbar mainmenu">
							<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnaema">
							  <span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>
							<a class="navbar-brand hidden-md hidden-lg" href="#"><i class="fa fa-home"></i></a>
							</div>
							<div class="collapse navbar-collapse" id="mainnaema">
								<ul class="nav navbar-nav">
								  <li class=""><a href="#">প্রচ্ছদ</a></li>
								  <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">বাংলাদেশ <b class="caret"></b></a>
									<ul class="dropdown-menu">
									  <li><a href="#">জাতীয়</a></li>
									  <li><a href="#">রাজনীতি</a></li>
									  <li><a href="#">অর্থনীতি</a></li>
									</ul>
								  </li>
								  <li class=""><a href="#">আন্তর্জাতিক</a></li>
								  <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">দেশজুড়ে <b class="caret"></b></a>
									<ul class="dropdown-menu">
									  <li><a href="#">জেলার খবর</a></li>
									</ul>
								  </li>
								  <li class=""><a href="#">খেলাধুলা</a></li>
								  <li class=""><a href="#">বিনোদন</a></li>
								  <li class=""><a href="#">লাইফস্টাইল</a></li>
								  <li class=""><a href="#">মতামত</a></li>
								  <li class=""><a href="#">জবস</a></li>
								  <li class=""><a href="#">সাহিত্য</a></li>
								  <li class=""><a href="#">ফটো গ্যালারি</a></li>
								  <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">অন্যান্য  <b class="caret"></b></a>
									<ul class="dropdown-menu">
									  <li><a href="#">ধর্ম</a></li>
									  <li><a href="#">স্বাস্থ্য</a></li>
									  <li><a href="#">প্রবাস</a></li>
									  <li><a href="#">শিক্ষা</a></li>
									  <li><a href="#">ক্যাম্পাস</a></li>
									  <li><a href="#">ফিচার</a></li>
									  <li><a href="#">জোকস</a></li>
									  <li><a href="#">তথ্যপ্রযুক্তি</a></li>
									  <li><a href="#">গণমাধ্যম</a></li>
									  <li><a href="#">আইন-আদালত</a></li>
									  <li><a href="#">আজকের আয়োজন</a></li>
									</ul>
								  </li>

								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
				</div><!------End Of Menu Area------->
				<div class="row">
					<div class="news_scrol_bar hidden-xs">
						<div class="col-md-12 col-xs-12 col-sm-12">
							<div class="scrolnewstitle pull-left"  ><h3>ব্রেকিং নিউজ :</h3></div>
							<div class="scrol_news pull-right">
								<marquee style="" truespeed="truespeed" direction="left" behavior="scroll" scrolldelay="10" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();" align="top">
									<a href="#"><i class="fa fa-asterisk"></i> মেডিকেল ভর্তি পরীক্ষায় প্রশ্নফাঁসের প্রমাণ মেলেনি</a>
									<a href="#"><i class="fa fa-asterisk"></i> অল্প বয়সে চুল পাকলে কী করবেন</a>
									<a href="#"><i class="fa fa-asterisk"></i> চিটাগং ভাইকিংসের আনুষ্ঠানিক লোগো উন্মোচন</a>
								</marquee>
							</div>
						</div>

					</div>
				</div><!-------End ofNews Scrol Bar-------->
			</div>
		</section><!------End of Header Section--------->

        @yield('content')




		<section id="footer"><!------Start of footer Section--------->
			<div class="container">
				<div class="row gap border_bottom back hidden-xs">
						<div class="col-md-2 col-sm-2 col-xs-2 ">
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12 ">
							<nav class="navbar footermenu ">
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnaema">
								  <span class="sr-only">Toggle navigation</span>
								  <span class="icon-bar"></span>
								  <span class="icon-bar"></span>
								  <span class="icon-bar"></span>
								</button>
								<a class="navbar-brand hidden-md hidden-lg" href="#"><i class="fa fa-home"></i></a>
								</div>
								<div class="collapse navbar-collapse " id="footermenu">
									<ul class="nav navbar-nav ">
									  <li class=""><a href="#">নারী ও শিশু</a></li>
									  <li class=""><a href="#">ভ্রমণ</a></li>
									  <li class=""><a href="#">কৃষি ও প্রকৃতি</a></li>
									  <li class=""><a href="#">ক্যাম্পাস</a></li>
									  <li class=""><a href="#">লাইফস্টাইল</a></li>
									  <li class=""><a href="#">মতামত</a></li>
									  <li class=""><a href="#">জবস</a></li>
									  <li class=""><a href="#">সাহিত্য</a></li>
									  <li class=""><a href="#">ক্যাম্পাস</a></li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</nav>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2 ">
						</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="footer_logo"><a href="#"><img src="{{$setting->site_logo}}" class="img-responsive" alt="The Last of us"></a></div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
                        {!!$setting->chief_adviser!!}
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">

						<div class="address">
							<p><b>প্রধান কার্যালয় ও বার্তা বিভাগঃ</b>
                                {{ $setting->address}}</br></br>

							<b>যোগাযোগঃ </b>{{ $setting->number}}</br></br>

						</div>
						<div class="mail">
							<p><b>বার্তা ই-মেইলঃ</b></br>{{ $setting->email}}</p>
						</div>
					</div>
				</div>
				<div class="row gap">
					<div class="rules ruleback">
						<p>0000 এর সংবাদ, ছবি ও ভিডিও অনুমতি ছাড়া প্রকাশ করা সম্পূর্ণ বেআইনি</br>
                                          স্বত্বাধিকার © ২০১৫-২০১৬ 0000.com
						</p>
					</div>
				</div>
				<div class="row">
					<div class="ruleback govtext">
						<P class="text-left"><img src="{{asset('main')}}/images/gov_logo.png" class="img-responsive" alt="The Last of us"></a>গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের নিয়ম মেনে নিবন্ধনের আবেদন সম্পন্ন</p><p class="pull-right"> পরিবার</p>
					</div>
				</div>
			</div>
		</section><!------End of footer Section--------->
        <script src="{{asset('main')}}/js/jquery.min.js"></script>
        <script src="{{asset('main')}}/js/owl.carousel.js"></script>
        <script src="{{asset('main')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('main')}}/js/jquery.scrollUp.js"></script>
        <script src="{{asset('main')}}/js/main.js"></script>
        <script src="{{asset('admin')}}/js/summernote-bs4.min.js"></script>
        @yield('script')
    </body>
</html>
