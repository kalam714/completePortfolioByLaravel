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
        $projects=Project::latest()->get();
        $experiences=Experience::latest()->get();
        $educations=Education::latest()->get();
        $posts=Post::latest()->get();
        return view('index',compact('projects','experiences','educations','posts'));
    }

    
}
