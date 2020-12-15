<section class="latest section">
    <div class="section-inner shadow-sm rounded">
        <h2 class="heading">Latest Projects</h2>
        <div class="content">    
                               
            <div class="item featured text-center">
                
                <div class="featured-image has-ribbon">
                    <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank">
                    <img class="img-fluid project-image rounded shadow-sm" src="{{asset('frontend/images/projects/project-featured.jpg')}}" alt="project name" />
                    </a>
                    <div class="ribbon">
                        <div class="text">New</div>
                    </div>
                </div>
                
                <h3 class="title mb-3"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank">Launch - The perfect Bootstrap template for SaaS products</a></h3>
                    
                <div class="desc text-left">                                    
                    <p>You can promote your main project here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                </div><!--//desc-->         
                <a class="btn btn-cta-secondary" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank"><i class="fas fa-thumbs-up"></i> Back my project</a>                 
            </div><!--//item-->
            <hr class="divider" />

            <div class="item row">
                @foreach($projects as $project)
                <a class="col-md-4 col-12" href="{{$project->project_url}}" target="_blank">
                <img class="img-fluid project-image rounded shadow-sm" height="300" width="100%" src="{{Storage::url($project->photo)}}" alt="project name" />
                <hr>
                </a>
                <div class="desc col-md-8 col-12">
                    <h3 class="title"><a href="{{route('details.project',[$project->slug,$project->id])}}">{{$project->title}}</a></h3>
                    <p class="mb-2">{{Str::limit($project->description,50)}}</p>
                    <p><a class="more-link" href="{{$project->project_url}}"><i class="fas fa-external-link-alt"></i>Source Code</a></p>
                </div><!--//desc-->     
                @endforeach                     
            </div><!--//item-->
            
           
            
                            
            
        </div><!--//content-->  
    </div><!--//section-inner-->                
</section>