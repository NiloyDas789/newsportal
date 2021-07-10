@extends('master.main')
@section('content')


<section id="chittagong">
    <!------Start of chittagong Section--------->
    <div class="container">
        <div class="row ">
            <div class="col-md-8 col-sm-9 col-xs-12 big_lead_pad">
                <div class="row">
                    <!-- 1st Col -->

                    @foreach ($lead1posts as $lead1post)
                    @foreach($lead1post->catagories as $catagory)
                    @endforeach
                    @if ($catagory->name == 'লিড-১')
                    <div class="col-md-8 col-sm-6 col-xs-12 big_lead">
                        <div class="nation_news">
                            <div class="national_img"><img src="{{$lead1post->image}}" title="banner" alt="banner"
                                    class="img-responsive" /></div>
                            <div class="nationaltitle">
                                <h2><a href="#">{{$lead1post->title}}</a></h2>
                            </div>
                            <div class="nationaldesc">
                                <p> {!! Str::limit($lead1post->description , 8) !!} </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach


                    <!-- 2nd col -->
                    <div class="col-md-4 col-sm-4 col-xs-12" style="height:470px;">
                        @foreach ($lead2posts as $lead2post)
                        @foreach($lead2post->catagories as $catagory)
                        @endforeach
                        @if ($catagory->name == 'লিড-২')
                        <div class="ctnews">
                            <a href="#"><img src="{{$lead2post->image}}"
                                    class="img-responsive" alt="" title=""></a>
                            <h1 class="mid_title"><a href="#">{{$lead2post->title}}</a></h1>
                        </div>
                        @endif
                        @endforeach


                    </div>
                </div>
                <!-- lead bootom -->


                <div class="row">

                    @foreach ($lead3posts as $lead3post)
                    @foreach($lead3post->catagories as $catagory)
                    @endforeach
                    @if ($catagory->name == 'লিড-৩')
                    <div class="col-md-4 col-sm-4 col-xs-12 lead_mid_pad">
                        <div class="ctnews">
                            <a href="#"><img src="{{$lead3post->image}}"
                                    class="img-responsive" alt="" title=""></a>
                            <h1 class="mid_title"><a href="#">{{$lead3post->title}}</a></h1>
                        </div>
                    </div>
                    @endif

                    @endforeach


                </div>
            </div>
            <!-- 3rd Collum -->
            <div class="col-md-4 col-sm-3 col-xs-12 left_box">

                <div class="last_news_heading">
                    <h2>টপ নিউজ</h2>
                </div>
                <div class="topnews">
                    <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg" class="img-responsive"
                            alt="" title=""></a>
                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী, (চট্রগ্রাম)</a>
                    </h1>
                </div>

                <div class="last_news_heading">
                    <h2>প্রেস বিফ্রিং</h2>
                </div>
                <div class="topnews">
                    <a href="#"><img src="{{asset('main')}}/images/Comilla-sm20160810185559.jpg" class="img-responsive"
                            alt="" title=""></a>
                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী, (জাতীয়)</a></h1>
                </div>
            </div>


        </div>

        <!-- <div class="row newsgap hidden-xs"> -->
        <!-- <div class="col-md-4 col-sm-4 "> -->
        <!-- <img src="{{asset('main')}}/images/13932201469578019611.gif"  title="banner" alt="banner" class="img-responsive"/> -->
        <!-- </div> -->
        <!-- <div class="col-md-4 col-sm-4 "> -->
        <!-- <img src="{{asset('main')}}/images/13654537343436784979.jpg"  title="banner" alt="banner" class="img-responsive"/> -->
        <!-- </div> -->
        <!-- <div class="col-md-4 col-sm-4 "> -->
        <!-- <img src="{{asset('main')}}/images/1815365574570691570.jpg"  title="banner" alt="banner" class="img-responsive"/> -->
        <!-- </div> -->
        <!-- </div> -->
    </div>
</section>
<!-- Mohanogor -->






<section id="national_news">
    <!------Start of national Section--------->
    <div class="container" style="padding: 15px;">
        <div class="row newsgap" style="padding:0px;">
            <div class="col-md-8 col-sm-9 col-xs-12">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="nation_news_box1st">
                            <div class="last_news_heading">
                                <h2>মহানগর</h2>
                            </div>
                            <div class="national_img"><img src="{{asset('main')}}/images/1.jpg" title="banner"
                                    alt="banner" class="img-responsive" /></div>
                            <div class="nation_news_box1st">
                                <h2><a href="#">তারাকান্দি-যমুনা ব্রিজ রেলওয়ে লিংক প্রকল্পে শতকোটি টাকার অনিয়ম</a></h2>
                            </div>
                        </div>
                        <!-- Ofset  Mohanogor -->
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="row ">
                                <div class="small_media ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-4 col-xs-12 ">
                                            <div class="mohanogor">
                                                <a href="#"><img
                                                        src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                                        class="img-responsive" alt="" title=""></a>
                                                <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য
                                                        সৃষ্টিকারী, (চট্রগ্রাম)</a></h1>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-12 ">
                                            <div class="mohanogor">
                                                <a href="#"><img
                                                        src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                                        class="img-responsive" alt="" title=""></a>
                                                <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য
                                                        সৃষ্টিকারী, (চট্রগ্রাম)</a></h1>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-12 ">
                                            <div class="mohanogor">
                                                <a href="#"><img
                                                        src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                                        class="img-responsive" alt="" title=""></a>
                                                <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য
                                                        সৃষ্টিকারী, (চট্রগ্রাম)</a></h1>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-12 ">
                                            <div class="mohanogor">
                                                <a href="#"><img
                                                        src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                                        class="img-responsive" alt="" title=""></a>
                                                <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য
                                                        সৃষ্টিকারী, (চট্রগ্রাম)</a></h1>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>




                    <div class="col-md-6 col-sm-6 col-xs-12 nationblock">
                        সর্বশেষ
                        জনপ্রিয়
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="nation_news_box1st">
                    <div class="last_news_heading">
                        <h2>চট্রগ্রাম জেলা </h2>
                    </div>
                    <div class="national_img"><img src="{{asset('main')}}/images/1.jpg" title="banner" alt="banner"
                            class="img-responsive" /></div>
                    <div class="nation_news_box1st">
                        <h2><a href="#">তারাকান্দি-যমুনা ব্রিজ রেলওয়ে লিংক প্রকল্পে শতকোটি টাকার অনিয়ম</a></h2>
                    </div>
                </div>
                <!-- Ofset  Mohanogor -->
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="row ">
                        <div class="small_media ">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-xs-12 ">
                                    <div class="mohanogor">
                                        <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                                class="img-responsive" alt="" title=""></a>
                                        <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                                (চট্রগ্রাম)</a></h1>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12 ">
                                    <div class="mohanogor">
                                        <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                                class="img-responsive" alt="" title=""></a>
                                        <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                                (চট্রগ্রাম)</a></h1>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12 ">
                                    <div class="mohanogor">
                                        <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                                class="img-responsive" alt="" title=""></a>
                                        <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                                (চট্রগ্রাম)</a></h1>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-12 ">
                                    <div class="mohanogor">
                                        <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                                class="img-responsive" alt="" title=""></a>
                                        <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                                (চট্রগ্রাম)</a></h1>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
</section>
<!-- moha nogor end -->










<section id="national_news">
    <!------Start of national Section working
        --------->






    <div class="container" style="padding: 15px;">
        <div class="row newsgap" style="padding:0px;">
            <div class="col-md-8 col-sm-9 col-xs-12">
                <div class="row">


                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="nation_news_box1st">
                            <div class="rajniti_heading">
                                <h2>জাতীয়</h2>
                            </div>
                            @foreach ($jatiyoposts as $jatiyopost)
                            @foreach($jatiyopost->catagories as $catagory)
                            @endforeach
                            @if ($catagory->name == 'জাতীয়')


                            <div class="national_img"><img src="{{$jatiyopost->image}}" title="banner" alt="banner"
                                    class="img-responsive" />
                            </div>
                            <div class="nation_news_box1st">
                                <h2><a href="#">{{$jatiyopost->title}}</a></h2>
                            </div>
                            @endif
                            @endforeach

                        </div>
                        <!-- Ofset -->
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="row ">
                                <div class="small_media ">
                                    <ul>

                                        @foreach ($jatiyoOfsets as $jatiyoOfset)
                                        @foreach($jatiyoOfset->catagories as $catagory)
                                        @endforeach
                                        @if ($catagory->name == 'জাতীয়')
                                        <li>

                                            <div class="midea_img">
                                                <a href="#"><img style="    float: right;" src="{{$jatiyoOfset->image}}"
                                                        title="banner" alt="banner" class="img-responsive" /></a>
                                                <h2><a href="#">{{$jatiyoOfset->title}}</a></h2>

                                            </div>
                                        </li>
                                        @endif
                                        @endforeach



                                    </ul>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 nationblock">
                        <div class="rajnitiblock ">
                            <div class="rajniti_heading">
                                <h2>রাজনীতি</h2>
                            </div>
                            @foreach ($rajnitiposts as $rajnitipost)
                            @foreach($rajnitipost->catagories as $catagory)
                            @endforeach
                            @if ($catagory->name == 'রাজনীতি')

                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="row ">
                                    <div class="small_media ">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-4 col-xs-12 ">
                                                <div class="mohanogor">
                                                    <a href="#"><img src="{{$rajnitipost->image}}"
                                                            class="img-responsive" alt="" title=""></a>
                                                    <h1 class="mid_title"><a href="#">{{$rajnitipost->title}}</a></h1>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-3 col-xs-12">

                <div class="nation_news_box1st">
                    <div class="rajniti_heading">
                        <h2>শিল্পবানিজ্য</h2>
                    </div>

                    @foreach ($shilpoposts as $shilpopost)
                    @foreach($shilpopost->catagories as $catagory)
                    @endforeach
                    @if ($catagory->name == 'শিল্পবানিজ্য')
                    <div>
                        <div class="national_img"><img src="{{$shilpopost->image}}" title="banner" alt="banner"
                                class="img-responsive" /></div>
                        <div class="nation_news_box1st">
                            <h2><a href="#">{{$shilpopost->title}}</a></h2>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <!-- Ofset -->
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="row ">
                        <div class="small_media ">
                            <ul>

                                @foreach ($shilpoOfsets as $newpost)
                                @foreach($newpost->catagories as $catagory)
                                @endforeach
                                @if ($catagory->name == 'শিল্পবানিজ্য')

                                <li>
                                    <div class="midea_img">
                                        <a href="#"><img style="    float: right;" src="{{$newpost->image}}"
                                                title="banner" alt="banner" class="img-responsive" /></a>
                                        <h2><a href="#">{{$newpost->title}}</a></h2>

                                    </div>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- 3box after lead End-->







<!-- Desh Jure -->

<section id="national_news">
    <!------Start of national Section--------->
    <div class="container" style="padding: 15px;">
        <div class="row newsgap" style="padding:0px;">
            <div class="col-md-7 col-sm-9 col-xs-12">
                <div class="row">
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="nation_news_box1st">
                            <div class="rajniti_heading">
                                <h2>দেশজুড়ে</h2>
                            </div>

                            <div class="col-md-6 col-sm-4 col-xs-12" style="padding: 0px 5px 0px 0px;">
                                <div class="mohanogor">
                                    <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                            class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                            (চট্রগ্রাম)</a></h1>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-12 " style="    padding: 0px 0px 0px 5px;">
                                <div class="mohanogor">
                                    <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                            class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                            (চট্রগ্রাম)</a></h1>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 ">

                        <div class="row ">
                            <div class="small_thuble ">
                                <ul>

                                    <li>
                                        <div class="thuble_midea_img">
                                            <a href="#"><img style="    float: right;"
                                                    src="images/anushka-sm20160810170539.jpg" title="banner"
                                                    alt="banner" class="img-responsive"></a>
                                            <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="thuble_midea_img">
                                            <a href="#"><img style="    float: right;"
                                                    src="images/anushka-sm20160810170539.jpg" title="banner"
                                                    alt="banner" class="img-responsive"></a>
                                            <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="thuble_midea_img">
                                            <a href="#"><img style="    float: right;"
                                                    src="images/anushka-sm20160810170539.jpg" title="banner"
                                                    alt="banner" class="img-responsive"></a>
                                            <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="thuble_midea_img">
                                            <a href="#"><img style="    float: right;"
                                                    src="images/anushka-sm20160810170539.jpg" title="banner"
                                                    alt="banner" class="img-responsive"></a>
                                            <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-3 col-xs-12">

                <div class="col-md-6 col-sm-6 col-xs-12" style="    padding-left: 5px;">
                    <div class="nation_news_box1st">
                        <div class="rajniti_heading">
                            <h2>আন্তর্জাতিক</h2>
                        </div>

                        <div class="col-md-12 col-sm-4 col-xs-12" style="padding: 0px">
                            <div class="mohanogor">
                                <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                        class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                        (চট্রগ্রাম)</a></h1>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">

                    <div class="row ">
                        <div class="small_thuble ">
                            <ul>

                                <li>
                                    <div class="thuble_midea_img">
                                        <a href="#"><img style="    float: right;"
                                                src="images/anushka-sm20160810170539.jpg" title="banner" alt="banner"
                                                class="img-responsive"></a>
                                        <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>

                                    </div>
                                </li>
                                <li>
                                    <div class="thuble_midea_img">
                                        <a href="#"><img style="    float: right;"
                                                src="images/anushka-sm20160810170539.jpg" title="banner" alt="banner"
                                                class="img-responsive"></a>
                                        <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>

                                    </div>
                                </li>
                                <li>
                                    <div class="thuble_midea_img">
                                        <a href="#"><img style="    float: right;"
                                                src="images/anushka-sm20160810170539.jpg" title="banner" alt="banner"
                                                class="img-responsive"></a>
                                        <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>

                                    </div>
                                </li>
                                <li>
                                    <div class="thuble_midea_img">
                                        <a href="#"><img style="    float: right;"
                                                src="images/anushka-sm20160810170539.jpg" title="banner" alt="banner"
                                                class="img-responsive"></a>
                                        <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Desh Jure End-->




<!--Binodon -->


<section id="national_news">
    <!------Start of national Section--------->
    <div class="container" style="padding: 15px;">
        <div class="row newsgap" style="padding:0px;">
            <div class="col-md-7 col-sm-9 col-xs-12">
                <div class="row">
                    <div class="rajniti_heading" style="margin-left: 15px;">
                        <h2>বিনোদন</h2>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12" style="padding-right: 0px;">

                        <div class="nation_news_box1st">


                            <div class="col-md-12 col-sm-4 col-xs-12" style="padding: 0px 5px 0px 0px;">
                                <div class="mohanogor">
                                    <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                            class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                            (চট্রগ্রাম)</a></h1>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-4 col-xs-12 " style="    padding: 0px 0px 0px 5px;">
                                <div class="mohanogor">
                                    <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                            class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                            (চট্রগ্রাম)</a></h1>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="nation_news_box1st">


                            <div class="col-md-12 col-sm-4 col-xs-12" style="padding: 0px 5px 0px 0px;">
                                <div class="mohanogor">
                                    <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                            class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                            (চট্রগ্রাম)</a></h1>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-4 col-xs-12 " style="    padding: 0px 0px 0px 5px;">
                                <div class="mohanogor">
                                    <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                            class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                            (চট্রগ্রাম)</a></h1>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="nation_news_box1st">


                            <div class="col-md-12 col-sm-4 col-xs-12" style="padding: 0px 5px 0px 0px;">
                                <div class="mohanogor">
                                    <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                            class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                            (চট্রগ্রাম)</a></h1>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-4 col-xs-12 " style="    padding: 0px 0px 0px 5px;">
                                <div class="mohanogor">
                                    <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                            class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                    <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                            (চট্রগ্রাম)</a></h1>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-5 col-sm-6 col-xs-12 ">

                        <div class="row ">
                            <div class="small_thuble ">
                                <!-- <ul> -->

                                <!-- <li> -->
                                <!-- <div class="thuble_midea_img"> -->
                                <!-- <a href="#"><img style="    float: right;" src="images/anushka-sm20160810170539.jpg" title="banner" alt="banner" class="img-responsive"></a> -->
                                <!-- <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2> -->

                                <!-- </div> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                <!-- <div class="thuble_midea_img"> -->
                                <!-- <a href="#"><img style="    float: right;" src="images/anushka-sm20160810170539.jpg" title="banner" alt="banner" class="img-responsive"></a> -->
                                <!-- <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2> -->

                                <!-- </div> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                <!-- <div class="thuble_midea_img"> -->
                                <!-- <a href="#"><img style="    float: right;" src="images/anushka-sm20160810170539.jpg" title="banner" alt="banner" class="img-responsive"></a> -->
                                <!-- <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2> -->

                                <!-- </div> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                <!-- <div class="thuble_midea_img"> -->
                                <!-- <a href="#"><img style="    float: right;" src="images/anushka-sm20160810170539.jpg" title="banner" alt="banner" class="img-responsive"></a> -->
                                <!-- <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2> -->
                                <!-- </div> -->
                                <!-- </li> -->
                                <!-- </ul>	 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-3 col-xs-12">
                <div class="rajniti_heading">
                    <h2>লাইফস্টাইল</h2>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 ">

                    <div class="row ">
                        <div class="small_thuble ">
                            <ul>

                                <li>
                                    <div class="thuble_midea_img">
                                        <a href="#"><img src="images/anushka-sm20160810170539.jpg" title="banner"
                                                alt="banner" class="img-responsive"></a>
                                        <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>

                                    </div>
                                </li>
                                <li>
                                    <div class="thuble_midea_img">
                                        <a href="#"><img src="images/anushka-sm20160810170539.jpg" title="banner"
                                                alt="banner" class="img-responsive"></a>
                                        <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>

                                    </div>
                                </li>
                                <li>
                                    <div class="thuble_midea_img">
                                        <a href="#"><img src="{{asset('main')}}/images/anushka-sm20160810170539.jpg"
                                                title="banner" alt="banner" class="img-responsive"></a>
                                        <h2><a href="#">আবারো জুটি বাঁধছেন শাহরুখ-আনুশকা</a></h2>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12" style="    padding-right: 0px;">

                    <div class="nation_news_box1st">


                        <div class="col-md-12 col-sm-4 col-xs-12" style="padding: 0px">
                            <div class="mohanogor">
                                <a href="#"><img src="{{asset('main')}}/images/CPA-PIC-sm20160810214729.jpg"
                                        class="img-responsive" alt="" title="" style="height: 115px;"></a>
                                <h1 class="mid_title"><a href="#">নাসিম বলেছেন, `দেশের মধ্যে নৈরাজ্য সৃষ্টিকারী,
                                        (চট্রগ্রাম)</a></h1>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Binodon End-->
























@endsection
