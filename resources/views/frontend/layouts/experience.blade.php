<section class="experience section">
    <div class="section-inner shadow-sm rounded">
        <h2 class="heading">Work Experience</h2>
        <div class="content">
            <div class="item">
                @foreach($experiences as $experience)
                <h1 class="text-danger"><b>{{$experience->job_title}}</b>  <b class="badge badge-info">{{$experience->position}}</b>- 
                    <span class="place text-primary"><a href="#">{{$experience->company_name}}</a></span> 
                    <span class="year">({{$experience->since}})</span></h1>
                <p>{{$experience->description}}</p>
                <br>
                @endforeach
            </div><!--//item-->
            
             
        </div><!--//content-->  
    </div><!--//section-inner-->                 
</section>