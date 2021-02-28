@extends('layouts.layout')

@section('title')
Article
@endsection

@section('main')
<main>
    <section class="show">
        <div class="container">
            <h2>Title: {{$article->title}}</h2>
            <p>{{$article->body}}</p>
            <span>Category: {{$article->category ? $article->category->name : 'N/A' }}</span>
            <div class="tag">
                @if (count($article->tags) > 0)
                    @foreach ($article->tags as $tag)
                        <span>#{{$tag->name}}</span>
                    @endforeach
                @else
                    <span>N/A</span>
                @endif
            </div>
        </div>
    </section>
</main>
@endsection
