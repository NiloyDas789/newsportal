<?php

namespace App\Http\Controllers;


use App\Models\Catagory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Session;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagories= Catagory::orderBy('created_at','DESC')->paginate(10);
        return view('admin.catagory.index', compact('catagories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catagory.create');
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
            'name' => 'required|unique:catagories|max:20',
            
        ]);

        $catagory= Catagory::create([
            'name' =>$request->name,
            'slug' => Str::slug($request->name, '-'),
            'description'=> $request->description,
        ]);
        
        Session::flash('success', 'Catagory Created Successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $catagory)
    {
        return view('admin.catagory.edit', compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catagory $catagory)
    {
        
        $validated = $request->validate([
            'name' => 'required|unique:catagories|max:20',
            
        ]);

        $catagory->name =$request->name;
        $catagory->slug = Str::slug($request->name, '-');
        $catagory->description= $request->description;
        $catagory->save();
        
        Session::flash('success', 'Catagory Updated Successfully');
        return redirect()->route('catagory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagory $catagory)
    {
        if($catagory){
            $catagory->delete();

        Session::flash('success', 'Catagory Deleted Successfully');
        return redirect()->route('catagory.index');
        }
    }
}
