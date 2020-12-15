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
   @include('frontend.layouts.github')
                
               <!--//section-->
               
                
              <!--//section-->
             
               <!--//section-->
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
                @include('frontend.layouts.information')
                <!--//aside-->
                @include('frontend.layouts.experience')
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
    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          font-size: 20px;
        }
        
        #myBtn {
          
          position: fixed;
          bottom: 20px;
          right: 30px;
          z-index: 99;
          font-size: 18px;
          border: none;
          outline: none;
          background-color: red;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 4px;
        }
        
        #myBtn:hover {
          background-color: #555;
        }
        </style>
      
        
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        
     
        <script>
        
        let mybutton = document.getElementById("myBtn");
        
  
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
       
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>
  @endsection  
</body>
</html> 

