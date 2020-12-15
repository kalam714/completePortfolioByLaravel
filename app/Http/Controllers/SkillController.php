<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills=Skill::latest()->get();
        return view('skill.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill.create');
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
            'percentage'=>'required',
            'level'=>'required'

        ]);
        
        Skill::create([

            'name'=>$request->name,
            'percentage'=>$request->percentage,
            'level'=>$request->level
            

        ]);
        notify()->success('Skill Added Successfully!');
        return redirect('/skill');
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
        $skill=Skill::find($id);
        return view('skill.edit',compact('skill'));
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
            'percentage'=>'required',
            'level'=>'required'

        ]);
        $skill=Skill::find($id);
        $skill->name=$request->name;
        $skill->percentage=$request->percentage;
        $skill->level=$request->level;
        $skill->update();
       notify()->success('Skill Update Successfully!');
       return redirect('/skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill=Skill::find($id);
        $skill->delete();
       
        notify()->success('Skill Deleted Successfully!');
        return redirect('/skill');
    }
}
