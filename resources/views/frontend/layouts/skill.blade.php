<aside class="skills aside section">
    <div class="section-inner shadow-sm rounded">
        <h2 class="heading">Skills</h2>
        <div class="content">
            <p class="intro">
            </p>
            
            <div class="skillset">
               
                <div class="item">
                    @foreach($skills as $skill)
                    <h3 class="level-title">{{$skill->name}}<span class="level-label" data-toggle="tooltip" data-placement="left" 
                        data-animation="true" title="You can use the tooltip to explain more about your skill level...">
                        <i class="fas fa-info-circle">

                    </i><b class="text-info">{{$skill->level}}</b></span></h3>
                   
                    <div class="level-bar">
                        <div class="level-bar-inner" data-level="{{$skill->percentage}}%">
                        </div>  {{$skill->percentage}}%                                    
                    </div><!--//level-bar-->
                    <br>
                    @endforeach                                 
                </div><!--//item-->
                
                <p><a class="more-link" href="#"><i class="fas fa-external-link-alt"></i>More on GitHub</a></p> 
            </div>              
        </div><!--//content-->  
    </div><!--//section-inner-->                 
</aside>