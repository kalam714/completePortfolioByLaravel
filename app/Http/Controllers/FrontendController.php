<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Post;
use App\Models\Skill;
use App\Models\About;
use App\Models\Header;
use App\Models\Information;

class FrontendController extends Controller
{
    public function getData(){
        $projects=Project::latest()->paginate(2);
        $experiences=Experience::latest()->get();
        $educations=Education::latest()->get();
        $posts=Post::latest()->paginate(2);
        $skills=Skill::latest()->get();
        $abouts=About::latest()->get();
        $informations=Information::latest()->get();
        $headers=Header::latest()->get();
        return view('index',compact('projects','experiences','educations','posts','skills','abouts','informations','headers'));
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
