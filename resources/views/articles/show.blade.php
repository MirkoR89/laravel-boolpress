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
                <span>{{$article->category}}</span>
                <span>{{$article->tag}}</span>
            </div>
        </section>
    </main>
@endsection

