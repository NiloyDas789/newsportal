<?php

namespace App\Http\Controllers;

use App\Models\Reporter;
use Illuminate\Support\Str;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;

class ReporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reporters= Reporter::orderBy('created_at','DESC')->paginate(10);
        return view('admin.reporter.index', compact('reporters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reporter.create');
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
            'name' => 'required|unique:reporters|max:20',

        ]);

        $reporter= Reporter::create([
            'name' =>$request->name,
            'slug' => Str::slug($request->name, '-'),
            'description'=> $request->description,
        ]);

        Session::flash('success', 'Reporter Created Successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function show(Reporter $reporter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporter $reporter)
    {
        return view('admin.reporter.edit', compact('reporter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporter $reporter)
    {

        $validated = $request->validate([
            'name' => 'required|unique:reporters|max:20',

        ]);

        $reporter->name =$request->name;
        $reporter->slug = Str::slug($request->name, '-');
        $reporter->description= $request->description;
        $reporter->save();

        Session::flash('success', 'Reporter Updated Successfully');
        return redirect()->route('reporter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporter $reporter)
    {
        if($reporter){
            $reporter->delete();

        Session::flash('success', 'Reporter Deleted Successfully');
        return redirect()->route('reporter.index');
        }
    }
}
