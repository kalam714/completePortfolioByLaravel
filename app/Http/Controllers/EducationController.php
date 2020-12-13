<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations=Education::latest()->get();
        return view('institute.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('institute.create');
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
            'degree'=>'required',
            'institute'=>'required',
            'since'=>'required'

        ]);
        
        Education::create([

            'degree'=>$request->degree,
            'institute'=>$request->institute,
            'since'=>$request->since
            

        ]);
        notify()->success('Institute Added Successfully!');
        return redirect('/education');
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
        $education=Education::find($id);
        return view('institute.edit',compact('education'));
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
            'degree'=>'required',
            'institute'=>'required',
            'since'=>'required'

        ]);
       $education=education::find($id);
       $education->degree=$request->degree;
       $education->institute=$request->institute;
       $education->since=$request->since;

   
       $education->update();
       notify()->success('education Update Successfully!');
       return redirect('/education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education=Education::find($id);
        $education->delete();
       
        notify()->success('Education Deleted Successfully!');
        return redirect('/education');
    }
}
