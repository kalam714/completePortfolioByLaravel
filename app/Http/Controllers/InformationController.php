<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Information::latest()->get();
        return view('information.index',compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('information.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'location'=>'required',
            'email'=>'required',
            'resume'=>'required'

        ]);
        $resume=$request->file('resume')->store('public/resume');
        Information::create([

            'location'=>$request->location,
            'email'=>$request->email,
            'website'=>$request->website,
            'resume'=>$resume

        ]);
        notify()->success('Information Added  Successfully!');
        return redirect('/auth/information');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information=Information::find($id);
        return view('information.edit',compact('information'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'location'=>'required',
            'email'=>'required',
            'website'=>'required'

        ]);
        $information=Information::find($id);
       $resume=$information->resume;
       if($request->file('resume')){
        $resume=$request->file('resume')->store('public/resume');
        \Storage::delete($information->resume);
       

       }
       $information->location=$request->location;
       $information->email=$request->email;
       $information->website=$request->website;
       $information->resume=$resume;
       $information->update();
       notify()->success('Information Update Successfully!');
       return redirect('/auth/information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information=Information::find($id);
        $path=$information->resume;
        $information->delete();
        \Storage::delete($path);
        notify()->success('Information Deleted Successfully!');
        return redirect('/auth/information');
    }
}
