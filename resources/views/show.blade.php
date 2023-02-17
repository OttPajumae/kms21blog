@extends('partials.layout')
@section('title', $article->title)
@section('content')
    <div class="card bg-base-100 shadow-xl mr-3 min-h-full">
        {{--                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>--}}
        <div class="card-body">
            <h2 class="card-title">{{$article->title}}</h2>
            <p>{{$article->body}}</p>

        </div>
    </div>
@endsection
