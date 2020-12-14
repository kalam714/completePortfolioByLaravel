@extends('frontend.layouts.master')
    <!--//header-->
    @section('content')
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-8 col-12">
               
                <div class="item featured text-center">
                    
                    <div class="featured-image has-ribbon">
                        <a href="">
                        <img class="img-fluid project-image rounded shadow-sm" src="{{Storage::url($post->photo)}}"  />
                        </a>
                        <div class="ribbon">
                            <div class="text"></div>
                        </div>
                    </div>
                    
                    <h3 class="title mb-3">{{$post->title}}</h3>
                        
                    <div class="desc text-left">                                    
                        <p>{{$post->description}}</p>
                    </div><!--//desc-->         
                    <a class="btn btn-cta-secondary" href="/"><i class="fas fa-backward"></i> Back To Home</a> 
                    
                   
                       
                </div>
    
   <!--//section-->

                
               <!--//section-->
             
              <!--//section-->
        
               <!--//section-->
           
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
               
        

                @include('frontend.layouts.post')
               
                
              <!--//section-->
                
    
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
  @endsection      
</body>
</html> 

