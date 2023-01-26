<div class="col-md-10 blogShort">
<h1 class="title mb-1">{{ $post->title }}</h1>
<article>
<p>{!! $post->content !!}</p>
<p>Car Name : {{ $post->meta->car_name }}</p>
<p>Manufactured Date : {{ $post->meta->manufactured_date }}</p>
<p>Color : {{ $post->meta->color }}</p>
<p>Power : {{ $post->meta->power }}</p>
<p>Top Speed : {{ $post->meta->top_speed }}</p>
<p>Price : {{ $post->meta->price }}</p>
</article>
</div>