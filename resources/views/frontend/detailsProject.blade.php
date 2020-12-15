@extends('frontend.layouts.master')
    <!--//header-->
    @section('content')
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-8 col-12">
               
                <div class="item featured text-center">
                    
                    <div class="featured-image has-ribbon">
                        <a href="">
                        <img class="img-fluid project-image rounded shadow-sm" src="{{Storage::url($project->photo)}}"  />
                        </a>
                        <div class="ribbon">
                            <div class="text"></div>
                        </div>
                    </div>
                    
                    <h3 class="title mb-3">{{$project->title}}</h3>
                        
                    <div class="desc text-left">                                    
                        <p>{{$project->description}}</p>
                    </div><!--//desc-->         
                    <a class="btn btn-cta-secondary" href="/"><i class="fas fa-backward"></i> Back To Home</a> 
                    
                   
                       
                </div>
    
   <!--//section-->

                
               <!--//section-->
             
              <!--//section-->
        
               <!--//section-->
           
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
               
        

                <div class="item row">
                    @foreach($projects as $project)
                    <a class="col-md-4 col-12" href="{{$project->project_url}}" target="_blank">
                    <img class="img-fluid project-image rounded shadow-sm" src="{{Storage::url($project->photo)}}" alt="project name" />
                    <hr>
                    </a>
                    <div class="desc col-md-8 col-12">
                        <h5 class="title"><a href="{{route('details.project',[$project->slug,$project->id])}}">{{$project->title}}</a></h5>
                        <p class="mb-2">{{Str::limit($project->description,50)}}</p></p>
                        <p><a class="more-link" href="{{$project->project_url}}"><i class="fas fa-external-link-alt"></i>Source Code</a></p>
                    </div><!--//desc-->     
                    @endforeach                     
                </div>
               
                
              <!--//section-->
                
    
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
  @endsection      
</body>
</html> 

