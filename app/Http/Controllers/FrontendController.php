<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Post;
class FrontendController extends Controller
{
    public function getData(){
        $projects=Project::latest()->paginate(3);
        $experiences=Experience::latest()->get();
        $educations=Education::latest()->get();
        $posts=Post::latest()->paginate(3);
        return view('index',compact('projects','experiences','educations','posts'));
    }
    public function singlePost($slug,$id){
        $post=Post::find($id)->where('slug',$slug)->first();
        $posts=Post::latest()->get();
     
        return view('frontend.singlePost',compact('post','posts'));
    }

    
}
