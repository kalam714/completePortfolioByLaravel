<aside class="blog aside section">
    <div class="section-inner shadow-sm rounded">
        <h2 class="heading">Latest Blog Posts</h2>
      
      <div  class="content">
            <div class="item row">

                @foreach($posts as $post)
                <a class="col-md-4 col-12" href="{{$post->post_url}}" target="_blank">
                <img class="img-fluid post-image rounded shadow-sm" height="100%" width="100%" src="{{Storage::url($post->photo)}}" alt="post name" />
                <hr>
                </a>
                <div class="desc col-md-8 col-12">
                   <a href="{{route('single.post',[$post->slug,$post->id])}}"> <h3 class="title">{{$post->title}}</h3></a>
                    <p class="mb-2"> {{Str::limit($post->description,50)}}</p>
                   <br>
                </div><!--//desc-->     
                @endforeach                                   
            </div><!--//item-->
            <div>
                {{$posts->links()}}   
            
            </div>

        </div><!--//content-->
    </div><!--//section-inner-->
</aside>