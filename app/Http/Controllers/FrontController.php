<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Catagory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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


        // Recent News Queries

        $recentnews = DB::table('posts')
            ->orderBy('created_at','DESC')
            ->take(6)->get();


        // End Recent News Queries

        // All News Queries

        $allnews = DB::table('posts')->get();


        // End All News Queries




            // return $topnewsofset;
            return view('newsPortal.home2', compact(['topnews1', 'topnews1ofset', 'topnews1ofset2','topnews2','pressbriefnews', 'mohanogornews', 'mohanogorofsetnews',
             'chottogramnews', 'chottogramofsetnews', 'jatiyonews', 'jatiyoofsetnews', 'rajnitinews', 'deshjurenews', 'deshjureofsetnews',
             'internationalnews', 'internationalofsetnews', 'recentnews', 'allnews',]));
    }

    public function news($slug)
    {
        $posts= Post::where('slug',$slug)->first();


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
}
