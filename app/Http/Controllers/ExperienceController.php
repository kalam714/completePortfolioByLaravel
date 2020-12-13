<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences=Experience::latest()->get();
        return view('experience.index',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experience.create');
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
            'job_title'=>'required',
            'position'=>'required',
            'company_name'=>'required',
            'description'=>'required',
            'since'=>'required'

        ]);
        
        Experience::create([

            'job_title'=>$request->job_title,
            'position'=>$request->position,
            'description'=>$request->description,
            'company_name'=>$request->company_name,
            'since'=>$request->since
            

        ]);
        notify()->success('Experience Added Successfully!');
        return redirect('/experience');
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
        $experience=Experience::find($id);
        return view('experience.edit',compact('experience'));
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
            'job_title'=>'required',
            'position'=>'required',
            'company_name'=>'required',
            'description'=>'required',
            'since'=>'required'

        ]);
       $experience=Experience::find($id);
       $experience->job_title=$request->job_title;
       $experience->position=$request->position;
       $experience->company_name=$request->company_name;
       $experience->since=$request->since;
       $experience->description=$request->description;
   
       $experience->update();
       notify()->success('Experience Update Successfully!');
       return redirect('/experience');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience=Experience::find($id);
        $experience->delete();
       
        notify()->success('Experience Deleted Successfully!');
        return redirect('/experience');
    }
}
