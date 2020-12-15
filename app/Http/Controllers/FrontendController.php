<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Post;
use App\Models\Skill;
class FrontendController extends Controller
{
    public function getData(){
        $projects=Project::latest()->paginate(3);
        $experiences=Experience::latest()->get();
        $educations=Education::latest()->get();
        $posts=Post::latest()->paginate(3);
        $skills=Skill::latest()->get();
        return view('index',compact('projects','experiences','educations','posts','skills'));
    }
    public function singlePost($slug,$id){
        $post=Post::find($id)->where('slug',$slug)->first();
        $posts=Post::where('id','!=',$id)->latest()->get();
     
        return view('frontend.singlePost',compact('post','posts'));
    }
    public function detailsProject($slug,$id){
        $project=Project::find($id)->where('slug',$slug)->first();
        $projects=Project::where('id','!=',$id)->latest()->get();
        return view('frontend.detailsProject',compact('project','projects'));
    }
    
}
