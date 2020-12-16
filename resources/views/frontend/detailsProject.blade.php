@extends('frontend.layouts.master')
    <!--//header-->
    @section('content')
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-8 col-12">
               
                <div class="item featured text-center">
                    
                    <div class="featured-image has-ribbon">
                        <a href="">
                        <img class="img-fluid project-image rounded shadow-sm" src="{{Storage::url($project->photo)}}"  /><br>
                        </a>
                        <div class="ribbon">
                            <div class="text"></div>
                        </div>
                    </div>
                    
                    <b class="text-primary">{{$project->title}}</b>
                        
                    <div class="desc text-left">                                    
                        <p>{{$project->description}}</p> <br>
                        <p><a class="more-link" href="{{$project->project_url}}" target="_blank">
                            <i class="fas fa-external-link-alt"></i><span class="text-danger"><b>Source Code</b></span></a></p><br>
                    </div><!--//desc-->         
                    <a class="btn btn-cta-secondary" href="/"><i class="fas fa-backward"></i> Back To Home</a> 
                    
                   
                       
                </div>
    
   <!--//section-->

                
               <!--//section-->
             
              <!--//section-->
        
               <!--//section-->
           
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
                <aside class="blog aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">All Project</h2>
                <div  class="content">
        

                <div class="item row">
                    @foreach($projects as $project)
                    <a class="col-md-4 col-12">
                    <img class="img-fluid project-image rounded shadow-sm"  src="{{Storage::url($project->photo)}}" alt="project name" />
                    <hr>
                    </a>
                    <div class="desc col-md-8 col-12">
                        <b class="text-primary"><a href="{{route('details.project',[$project->slug,$project->id])}}">{{$project->title}}</a></b>
                        <p class="mb-2">{{Str::limit($project->description,200)}}</p></p>
                        <p><a class="more-link" href="{{$project->project_url}}" target="_blank"><i class="fas fa-external-link-alt">
                            </i><span class="text-danger"><b>Source Code</b></span></a></p><br>  
                    </div><!--//desc-->  
                     
                    @endforeach                     
                </div>
               
                </div>
                    </div>
              <!--//section-->
                
    
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
  @endsection      
</body>
</html> 

