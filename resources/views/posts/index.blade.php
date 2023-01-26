<!-- <div class="container">
<div class="col-md-12">
@foreach ($posts as $post)
<img src="{{ $post->thumbnail }}" alt="post img"  width="200" height="300">
<h2>{{ $post->title }}</h2>
<p>{!! $post->content !!}</p>
<div>
<span class="label label-primary">Posted {{ date('d-m-Y', strtotime($post->post_date)) }}</span><div class="pull-right">
<span class="label label-warning">Admin</span></div>  
<span><a href="{{ route('blog.show',$post->ID) }}">view post</a></span> 
</div>
<hr>
@endforeach
</div>
</div> -->




<div class="container">
				
<div class="post mb-5">
			  <div class="media">
              @foreach ($posts as $post)
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ $post->thumbnail }}" alt="post img"  width="600" height="300">
					    <div class="media-body">
						    <h3 class="title mb-1">{{ $post->title }}</h3>
						    <div class="meta mb-1">Posted {{ date('d-m-Y', strtotime($post->post_date)) }}</div>		
                            <span class="label label-warning">Admin</span></div>  
                            <span><a href="{{ route('blog.show',$post->ID) }}">view post</a></span> 			
							</div>
					    </div><!--//media-body-->
				    </div><!--//media-->
                    <hr>
                    @endforeach
			    </div>
</div>