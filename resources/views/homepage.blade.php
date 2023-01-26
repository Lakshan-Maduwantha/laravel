<div class="container">
<div class="col-md-12">
<h1>{{ $page->title }}</h1>
<p>{{ $page->meta->homepage_paragraph }}</p>

<p>{{ $page->meta->small_images_main_name }}</p>
<img src="{{ $image1->url }}" height="500px" width="500px">

<p>{{ $page->meta->small_image_name_1 }}</p>
<img src="{{ $image2->url }}"height="500px" width="500px">

<p>{{ $page->meta->small_image_name_2 }}</p>
<img src="{{ $image3->url }}"height="500px" width="500px">

<p>{{ $page->meta->small_image_name_3 }}</p>
<img src="{{ $image4->url }}"height="500px" width="500px">

<img src="{{ $image5->url }}"height="500px" width="500px">

</div>
</div>

