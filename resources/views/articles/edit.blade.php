@extends('partials.layout')
@section('title', 'New Article')
@section('content')
    <form action="{{route('articles.update', ['article' => $article])}}" method="POST">
        @csrf
        <div class="form-control">
            <label class="label" for="title">
                <span class="label-text">Title</span>
            </label>
            <input
                type="text" id="title" placeholder="Title"
                class="input input-bordered @error('title') input-error @enderror" name="title"
                value="{{old('title') ?? $article->title}}"/>
            @error('title')
            <label class="label">
                <span class="label-text-alt text-error">{{$message}}</span>
            </label>
            @enderror
        </div>

        <div class="form-control">
            <label class="label" for="body">
                <span class="label-text">Content</span>
            </label>
            <textarea id="body" class="textarea textarea-bordered h-24 @error('body') textarea-error @enderror"
                      placeholder="Content..." name="body">{{old('body') ?? $article->body}}</textarea>
            @error('body')
            <label class="label">
                <span class="label-text-alt text-error">{{$message}}</span>
            </label>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary mt-3" value="Create">
    </form>
@endsection
