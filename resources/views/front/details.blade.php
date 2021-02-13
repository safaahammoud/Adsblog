@extends('front.layouts.master') @section('content') @php $img = $post->images->first()['image']; @endphp <div
    style="margin-bottom: 20px"
>
    <h3 class="card-title">{{$post->title}}</h3>
    <div class="card mt-4">
        <img
            class="card-img-top img-fluid"
            src="{{asset($img)}}"
            onerror="this.onerror=null;this.src='storage/img/default.jpg'}}'"
            ;alt="image"
        >
        <div class="card-body">
            <h4>Post info</h4>
            <p class="card-text"> User's Post: {{$post->user['name']}}</p>
            <p class="card-text"> Country: {{$post->country['name']}}</p>
            <p class="card-text"> Price: {{$post->price}}</p>
            <h4>Post Description</h4>
            <p class="card-text">{{$post->text}} </p>
        </div>
    </div> @endsection