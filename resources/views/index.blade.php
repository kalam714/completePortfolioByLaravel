<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.header')

<body>
    <!-- ******HEADER****** --> 
    @include('frontend.layouts.header2')
    <!--//header-->
    
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
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is free as long as you keep the attribution link below. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="{{asset('frontend/plugins/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/plugins/popper.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>    
    <script type="text/javascript" src="{{asset('frontend/plugins/jquery-rss/dist/jquery.rss.min.js')}}"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="{{asset('frontend/plugins/github-calendar/dist/github-calendar.min.js')}}"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend/plugins/github-activity/github-activity-0.1.5.min.js')}}"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>            
</body>
</html> 

