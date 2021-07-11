<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Post;
use App\Models\Catagory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;


class FrontController extends Controller
{
    public function home()
    {
        // $catagories= Catagory::orderBy('created_at','DESC')->get();
        // $allposts= Post::orderBy('created_at','DESC')->with('catagories')->get();


        // // if ($catagories->name == "bangladesh") {
        // //     $jatiyoposts= Post::orderBy('created_at','DESC')->take(5)->get();
        // // }







        // Top News-1 Queries

        $topnews1 = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',1)
            ->orderBy('created_at','DESC')
            ->take(1)->get();
        $topnews1ofset = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',1)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(2)->get();
        $topnews1ofset2 = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',1)
            ->orderBy('created_at','DESC')
            ->offset(3)->limit(3)->get();

        // End Top News-1 Queries


        // Top News-2 Queries

        $topnews2 = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',2)
            ->orderBy('created_at','DESC')
            ->take(1)->get();


        // End Top News-2 Queries


        // Press Briefing News Queries

        $pressbriefnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',15)
            ->orderBy('created_at','DESC')
            ->take(1)->get();


        // End Press Briefing News Queries


        // Mohanogor Quiries

        $mohanogornews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',3)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $mohanogorofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',3)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(4)->get();

        // End Mohanogor Quiries


        // Chottogram Quiries

        $chottogramnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',4)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $chottogramofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',4)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(4)->get();

        // End Chottogram Quiries


        // Jatiyo News Quiries

        $jatiyonews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',5)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $jatiyoofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',5)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(4)->get();

        // End Jatiyo News Quiries


        // shilpobanijjo News Quiries

        $shilpobanijjonews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',7)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $shilpobanijjoofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',7)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(4)->get();

        // End shilpobanijjo News Quiries

        // Rajniti News Quiries

        $rajnitinews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',6)
            ->orderBy('created_at','DESC')
            ->get();

        // End Rajniti News Quiries


        // Deshjure News Quiries

        $deshjurenews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',8)
            ->orderBy('created_at','DESC')
            ->take(2)->get();

        $deshjureofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',8)
            ->orderBy('created_at','DESC')
            ->offset(2)->limit(3)->get();

        // End Deshjure News Quiries


        // International News Quiries

        $internationalnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',8)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $internationalofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',8)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(4)->get();

        // End International News Quiries



        // Khela News Quiries

        $khelanews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',24)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $khelaofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',24)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(4)->get();

        // End Khela News Quiries



        // Binodon News Quiries

        $binodonnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',10)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $binodonofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',10)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(4)->get();

        // End Binodon News Quiries


        // Orthoniti News Quiries

        $orthonitinews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',26)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $orthonitiofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',26)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(3)->get();

        // End Orthoniti News Quiries


        // Health News Quiries

        $healthnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',27)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $healthofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',27)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(3)->get();

        // End Health News Quiries


        // Shompadokiyo News Quiries

        $shompadokiyonews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',13)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $shompadokiyoofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',13)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(3)->get();

        // End Shompadokiyo News Quiries


        // Shikkha News Quiries

        $shikkhanews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',28)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

        $shikkhaofsetnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',28)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(3)->get();

        // End Shikkha News Quiries


        // Job News

        $jobnews = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',25)
            ->orderBy('created_at','DESC')
            ->take(3)->get();


        // End Job News

        // Recent News Queries

        $recentnews = DB::table('posts')
            ->orderBy('created_at','DESC')
            ->take(6)->get();


        // End Recent News Queries



        // Popular News Queries

        $popularnews = DB::table('posts')
            ->orderBy('created_at','ASC')
            ->take(6)->get();


        // End Popular News Queries

        // All News Queries

        $allnews = DB::table('posts')->get();


        // End All News Queries




            // return $topnewsofset;
            return view('newsPortal.home2', compact(['topnews1', 'topnews1ofset', 'topnews1ofset2','topnews2','pressbriefnews', 'mohanogornews', 'mohanogorofsetnews',
             'chottogramnews', 'chottogramofsetnews', 'jatiyonews', 'jatiyoofsetnews', 'rajnitinews', 'deshjurenews', 'deshjureofsetnews',
             'internationalnews', 'internationalofsetnews', 'recentnews', 'allnews', 'popularnews', 'khelanews', 'khelaofsetnews', 'binodonnews', 'binodonofsetnews',
             'orthonitinews', 'orthonitiofsetnews', 'healthnews', 'healthofsetnews', 'shompadokiyonews', 'shompadokiyoofsetnews', 'shikkhanews', 'shikkhaofsetnews', 'jobnews'
             , 'shilpobanijjonews', 'shilpobanijjoofsetnews']));
    }

    public function news($slug)
    {
        $posts= Post::where('slug',$slug)->first();
        $blogKey = 'blog_' . $posts -> id;

        if (!Session::has($blogKey)) {
            $posts->increment('view_count');
            Session::put($blogKey,1);
        }


        $recentnews = DB::table('posts')
            ->orderBy('created_at','DESC')
            ->take(1)->get();
        $recentofsetnews = DB::table('posts')
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(4)->get();


        return view('newsPortal.singlenews',compact('posts','recentnews','recentofsetnews'));
    }
    public function catagory($id)
    {

        $catagory = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',$id)
            ->orderBy('created_at','DESC')
            ->take(1)->get();

            // return $a;


        $catagory = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',$id)
            ->orderBy('created_at','DESC')
            ->take(1)->get();
        $catagory1ofset = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',$id)
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(2)->get();
        $catagory1ofset2 = DB::table('posts')
            ->join('catagory_post', 'posts.id', '=', 'catagory_post.post_id')
            ->where('catagory_post.catagory_id',$id)
            ->orderBy('created_at','DESC')
            ->offset(3)->limit(9)->get();


        //Recent News

        $recentnews = DB::table('posts')
            ->orderBy('created_at','DESC')
            ->take(1)->get();
        $recentofsetnews = DB::table('posts')
            ->orderBy('created_at','DESC')
            ->offset(1)->limit(4)->get();


        //End Recent News





        return view('newsPortal.catagory',compact('catagory','catagory1ofset', 'catagory1ofset2','recentnews', 'recentofsetnews'));
    }


    public function searchContent(){
        $url = '/news';
        $text = $_GET['text'];
        $data = DB::table('posts')->where('title' , 'LIKE' , '%'.$text.'%')
        ->orWhere('description' , 'like' , '%'.$text.'%')->take(5)->get();
        $output = '' ;
        echo '<ul class="search-results">';

        if (count($data) > 0) {
           foreach($data as $d){
                echo '<li><a href="'.$url.'/'.$d->slug.'">'.$d->title.'</a></li>';
            }
        }
        else {
            echo '<li><a href="#"> Sorry! No data found. </a></a></li>';
        }


        echo '</ul>';
        return $output;

    }


}

