@foreach($posts as $post)
	@php
	$img = $post->images->first();
	$img_name = $img['image'];
	@endphp
		<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-100">
			<a href="#"><img class="card-img-top" height="150px" src="{{asset($img_name)}}" onerror="this.onerror=null;this.src='storage/img/default.jpg' ";alt="image">
			</a>
			<div class="card-body">
				<h6 class="card-title">
				<a href="<?php echo url('/showDetail/') ?>/{{$post->id}}">{{$post->title}}</a>
				</h4>
				<h6>{{$post->price}}</h6>
			</div>	
		</div>
		</div> 
@endforeach

<!--in php snippet images related to the post are brought-->