<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class FrontendController extends Controller
{
    public function getProject(){
        $projects=Project::latest()->get();
        return view('index',compact('projects'));
    }
    
}
