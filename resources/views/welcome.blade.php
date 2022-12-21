@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <h3>Current series</h3>
    </div>
</section>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-2">
                <a href="{{route('description')}}">
                    <img src="{{$comic['thumb']}}" alt="">
                    <p>{{$comic['series']}}</p>
                </a>

            </div>
            @endforeach
        </div>
    </div>
    <div class="load_more">
        <h3>Load More</h3>
    </div>
</div>
<div class="my-container">
    <div class="row">
        @foreach(Config::get('db.icons') as $icon)
        <div class="col">
            <img src="{{ Vite::asset('resources/img/' . $icon['image']) }}">
            <h3>{{$icon['text']}}</h3>
        </div>
        @endforeach
    </div>
</div>
@endsection