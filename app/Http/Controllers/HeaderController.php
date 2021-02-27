<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers=Header::latest()->get();
        return view('header.index',compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('header.create');
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
            'name'=>'required',
            'type'=>'required',
            'photo'=>'required'

        ]);
        $photo=$request->file('photo')->store('public/profile');
        Header::create([

            'name'=>$request->name,
            'type'=>$request->type,
            'github'=>$request->github,
            'stackoverflow'=>$request->stackoverflow,
            'linkedin'=>$request->linkedin,
            'photo'=>$photo

        ]);
        notify()->success('header Created Successfully!');
        return redirect('/auth/header');
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
        $header =Header::find($id);
        return view('header.edit',compact('header'));
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
            'name'=>'required',
            'type'=>'required'

        ]);
        $header=Header::find($id);
       $photo=$header->photo;
       if($request->file('photo')){
        $photo=$request->file('photo')->store('public/profile');
        \Storage::delete($header->photo);
       

       }
       $header->name=$request->name;
       $header->type=$request->type;
       $header->github=$request->github;
       $header->stackoverflow=$request->stackoverflow;
       $header->linkedin=$request->linkedin;
       $header->photo=$photo;
       $header->update();
       notify()->success('header Update Successfully!');
       return redirect('/auth/header');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header=Header::find($id);
        $path=$header->photo;
        $header->delete();
        \Storage::delete($path);
        notify()->success('header info. Deleted Successfully!');
        return redirect('/auth/header');
    }
}
