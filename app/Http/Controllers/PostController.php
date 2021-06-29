<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Post;
use App\Models\Catagory;
use App\Models\Reporter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::orderBy('created_at','DESC')->paginate(10);

        $n=1;
        // return   $posts;
        return view('admin.post.index', compact(['posts', 'n']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags= Tag::all();
        $catagories= Catagory::all();
        $reporters= Reporter::all();
        return view('admin.post.create', compact(['catagories','tags','reporters']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'description' => 'required',

        ]);

        $post= Post::create([
            'title' =>$request->title,
            'top' =>$request->top,
            'bottom' =>$request->bottom,
            'slug' => Str::slug($request->title, '-'),
            'image' => 'image.jpg',
            'description'=> $request->description,
            'reporter' =>$request->reporter,
            'user_id' => auth()->user()->id,
            'date' =>$request->date,
        ]);
        $post->tags()->attach($request->tags);
        $post->catagories()->attach($request->catagories);

        if ($request->has('image')) {
            $image= $request->image;
            $image_new_name = time().'.'. $image->getClientOriginalExtension();
            $image->move('storage/post/',$image_new_name);
            $post->image = 'storage/post/'.$image_new_name;
            $post->save();
        }

        Session::flash('success', 'Post Created Successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags= Tag::all();
        $catagories= Catagory::all();
        $reporters= Reporter::all();
        return view('admin.post.edit', compact(['post','catagories','tags','reporters']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {





            $post->title =$request->title;
            $post->slug =Str::slug($request->title);

            $post->description= $request->description;

            $post->date= $request->date;

            $post->tags()->sync($request->tags);

            $post->catagories()->sync ($request->catagories);

        if ($request->has('image')) {
            $image= $request->image;
            $image_new_name = time().'.'. $image->getClientOriginalExtension();
            $image->move('storage/post/',$image_new_name);
            $post->image = 'storage/post/'.$image_new_name;

        }

        $post->save();

        Session::flash('success', 'Post Updated Successfully');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post){
            if (file_exists(public_path($post->image))) {
                unlink(public_path($post->image));
            }
            $post->delete();
            Session::flash('success', 'Post Deleted Successfully');

        }
        return redirect()->route('post.index');
    }
}
