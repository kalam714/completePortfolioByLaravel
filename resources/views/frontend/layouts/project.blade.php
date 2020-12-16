<section class="latest section">
    <div class="section-inner shadow-sm rounded">
        <h2 class="heading">Latest Projects</h2>
        <div class="content">    

            <div class="item row">
                @foreach($projects as $project)
                <a class="col-md-4 col-12" href="{{route('details.project',[$project->slug,$project->id])}}">
                <img class="img-fluid project-image rounded shadow-sm" height="300" width="100%" src="{{Storage::url($project->photo)}}" 
                alt="project name" /><br>
                <hr>
                </a>
                <div class="desc col-md-8 col-12">
                    <b class="text-success"><a href="{{route('details.project',[$project->slug,$project->id])}}">{{$project->title}}</a></b>
                    <p class="mb-2">{{Str::limit($project->description,200)}}</p>
                    <p><a class="more-link" href="{{$project->project_url}}"><i class="fas fa-external-link-alt"></i>
                    <span class="text-danger"><b>Source Code</b></span></a></p>
                </div><!--//desc-->     <br>
                @endforeach  
                <hr>
                <br>
                <div class="pagination">
                {{ $projects->links() }}   
                
                </div>                
            </div><!--//item-->
            
           
            
                            
            
        </div><!--//content-->  
    </div><!--//section-inner-->                
</section>