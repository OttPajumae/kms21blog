@extends('partials.layout')
@section('title', 'Dashboard page')
@section('content')
    {{ $articles->links() }}
    <div class="flex flex-wrap">
        @foreach($articles as $article)
            <div class="basis-1/4 mb-3 ">
                <div class="card bg-base-100 shadow-xl mr-3 min-h-full">
        {{--                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>--}}
                    <div class="card-body">
                        <h2 class="card-title">{{$article->title}}</h2>
                        <p>{{$article->snippet}}</p>
                        <p class="text-gray-600">{{$article->user->name}}</p>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="{{route('public.show',['article'=>$article->id])}}">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
