<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Post;
use App\Models\Reporter;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $news = Post::get()->count();
        $catagory = Catagory::get()->count();
        $tag = Tag::get()->count();
        $reporter= Reporter::get()->count();
        $posts= Post::orderBy('created_at','DESC')->paginate(6);

        $n=1;


        return view('dashboard',compact('news','catagory','tag','reporter','posts','n'));
    }


    



}
