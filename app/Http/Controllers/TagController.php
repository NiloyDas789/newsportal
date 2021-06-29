<?php

namespace App\Http\Controllers;


use App\Models\Tag;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags= Tag::orderBy('created_at','DESC')->paginate(10);
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
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
            'name' => 'required|unique:tags|max:20',

        ]);

        $tag= Tag::create([
            'name' =>$request->name,
            'slug' => Str::slug($request->name, '-'),
            'description'=> $request->description,
        ]);

        Session::flash('success', 'Tag Created Successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {

        $validated = $request->validate([
            'name' => 'required|unique:tags|max:20',

        ]);

        $tag->name =$request->name;
        $tag->slug = Str::slug($request->name, '-');
        $tag->description= $request->description;
        $tag->save();

        Session::flash('success', 'Tag Updated Successfully');
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if($tag){
            $tag->delete();

        Session::flash('success', 'Tag Deleted Successfully');
        return redirect()->route('tag.index');
        }
    }
}
