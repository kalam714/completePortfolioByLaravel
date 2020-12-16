@extends('frontend.layouts.master')
    <!--//header-->
    @section('content')
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-8 col-12">
               
                <div class="item featured text-center">
                    
                    <div class="featured-image has-ribbon">
                        <a href="">
                        <img class="img-fluid post-image rounded shadow-sm" src="{{Storage::url($post->photo)}}"  /><br>
                        </a>
                        <div class="ribbon">
                            <div class="text"></div>
                        </div>
                    </div>
                    
                    <b class="text-primary">{{$post->title}}</b>
                        
                    <div class="text-left">                                    
                        <p>{{$post->description}}</p><br>
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
                        <h2 class="heading">All Post</h2>
                <div  class="content">
                <div class="item row">
                    @foreach($posts as $post)
                    <a class="col-md-4 col-12" href="{{$post->post_url}}" target="_blank">
                    <img class="img-fluid post-image rounded shadow-sm"  src="{{Storage::url($post->photo)}}" alt="post name" />
                    <hr>
                    </a>
                    <div class="desc col-md-8 col-12">
                        <b class="text-primary"><a href="{{route('single.post',[$post->slug,$post->id])}}">{{$post->title}}</a></b>
                        <p class="mb-2">{{Str::limit($post->description,200)}}</p></p>
                        
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

