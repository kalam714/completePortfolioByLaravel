@extends('frontend.layouts.master')
    <!--//header-->
    @section('content')
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-8 col-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
              <p>Write a brief intro about yourself. It's a good idea to include your personal interests and hobbies as well. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec. Commodo ligula eget dolor. Aenean massa.</p>
                         
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                @include('frontend.layouts.project')
    
   <!--//section-->
   @include('frontend.layouts.otherproject')
                
               <!--//section-->
               @include('frontend.layouts.experience')
                
              <!--//section-->
              @include('frontend.layouts.github')
               <!--//section-->
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
                @include('frontend.layouts.information')
                <!--//aside-->
                @include('frontend.layouts.skill')
                
               <!--//section-->
                @include('frontend.layouts.education')
                
                <!--//section-->
                            

                @include('frontend.layouts.post')
               
                
              <!--//section-->
                
    
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
  @endsection  
</body>
</html> 

