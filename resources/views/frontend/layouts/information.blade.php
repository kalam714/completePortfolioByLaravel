<aside class="info aside section">
    <div class="section-inner shadow-sm rounded">
        <h2 class="heading sr-only">Basic Information</h2>
        <div class="content">
            <ul class="list-unstyled">
                @foreach($informations as $information)
                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>{{$information->location}}</li>
                <li><i class="fas fa-file"></i><span class="sr-only">Email:</span><a href="{{Storage::url($information->resume)}}"><b>Resume</b></a></li>
                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="#">{{$information->email}}</a></li>
                <li><i class="fas fa-link"></i><span class="sr-only">Website:</span><a href="{{$information->website}}">KalamAhmed.com</a></li>
                @endforeach
            </ul>
        </div><!--//content-->  
    </div><!--//section-inner-->                 
</aside>