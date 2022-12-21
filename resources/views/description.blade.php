@extends('layouts.app')

@section('content')
<section class="banner_blue">
</section>
<div class="container py-5">
      <div class="d-flex gap-4">
            <img src="{{$comics->src}}" alt="{{$product->title}}">
            <div class="details">
                  <h1>{{$comic->title}}</h1>
                  <p>{{$comic->description}}</p>
                  <div class="meta">
                        <div class="cooking_time">
                              Cooking time: {{$comic->series}}
                        </div>
                  </div>

            </div>
      </div>
</div>


@endsection