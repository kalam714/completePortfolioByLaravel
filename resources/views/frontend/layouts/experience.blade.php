<section class="experience section">
    <div class="section-inner shadow-sm rounded">
        <h2 class="heading">Work Experience</h2>
        <div class="content">
            <div class="item">
                @foreach($experiences as $experience)
                <h3 class="title">{{$experience->job_title}}  <b class="badge badge-info">{{$experience->position}}</b>- <span class="place"><a href="#">{{$experience->company_name}}</a></span> 
                    <span class="year">({{$experience->since}})</span></h3>
                <p>{{$experience->description}}</p>
                @endforeach
            </div><!--//item-->
            
             
        </div><!--//content-->  
    </div><!--//section-inner-->                 
</section>