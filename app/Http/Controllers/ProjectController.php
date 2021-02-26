<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::latest()->get();
        return view('project.index',compact('projects'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
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
            'title'=>'required',
            'description'=>'required',
            'photo'=>'required'

        ]);
        $photo=$request->file('photo')->store('public/projects');
        Project::create([

            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'description'=>$request->description,
            'project_url'=>$request->project_url,
            'photo'=>$photo

        ]);
        notify()->success('Project Created Successfully!');
        return redirect('/auth/project');
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
        $project=Project::find($id);
        return view('project.edit',compact('project'));
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
            'title'=>'required',
            'description'=>'required',
         

        ]);
        $project=Project::find($id);
       $photo=$project->photo;
       if($request->file('photo')){
        $photo=$request->file('photo')->store('public/projects');
        \Storage::delete($project->photo);
       

       }
       $project->title=$request->title;
       $project->description=$request->description;
       $project->photo=$photo;
       $project->project_url=$request->project_url;
       $project->update();
       notify()->success('project Update Successfully!');
       return redirect('/auth/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::find($id);
        $path=$project->photo;
        $project->delete();
        \Storage::delete($path);
        notify()->success('project Deleted Successfully!');
        return redirect('/auth/project');
    }
}
