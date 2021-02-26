@extends('layouts.layout')

@section('title')
Edit
@endsection

@section('main')
<main>
    <section class="edit">
        <div class="container">
            <h2>Edit {{$article->title}}</h2>
            <form action="{{ route('articles.update', ['article'=>$article->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$article->title}}">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea type="text" name="body" id="body" class="form-control"
                        cols="50" rows="10">{{$article->body}}</textarea>
                </div>

                <button type="Submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection
