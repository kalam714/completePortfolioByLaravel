<header class="header">
    <div class="container clearfix">                       
        <img class="profile-image img-fluid float-left rounded-circle" height="90" width="200" src="{{asset('frontend/images/profile.jpg')}}" alt="profile image" />
        <div class="profile-content float-left">
            <h1 class="name">Kalam Ahmed</h1>
            <h2 class="desc">Full Stack Web Developer</h2>   
            <ul class="social list-inline">
                <li class="list-inline-item"><a href="https://www.linkedin.com/in/kalam-ahmed-6602701a1/"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="list-inline-item"><a href="https://github.com/kalam714"><i class="fab fa-github-square"></i></a></li>    
                <li class="list-inline-item"><a href="https://stackoverflow.com/users/14717608/kalam-ahmed"><i class="fab fa-stack-overflow"></i></a></li>   
                       
            </ul> 
        </div><!--//profile-->
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#match">
               Contact Me
              </button>    
              <div class="modal fade" id="match" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                      <form  action="/message/store" method="POST" enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control form-control-sm" name="email"  placeholder="Enter your name">
                                
                              </div>
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter your name">
                                
                              </div>
                              
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" name="message"></textarea>
                              </div>
                          <button type="submit" class="btn btn-primary">Sent</button>
                          </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>         
    </div><!--//container-->
</header>
@notifyCss
<x:notify-messages />
@notifyJs
