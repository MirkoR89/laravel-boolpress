@extends('layouts.layout')

@section('title')
Edit
@endsection

@section('main')
@include('partials.errors')
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
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea type="text" name="body" id="body" class="form-control"
                        cols="50" rows="10">{{$article->body}}</textarea>
                </div>
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select class="form-control" name="tags[]" id="tags" multiple>
                        @if ($tags)
                            @foreach ($tags as $tag)
                              <option value="{{$tag->id}}"{{ $article->tags->contains($tag) ? 'selected' : ' ' }}>{{$tag->name}}</option>    
                            @endforeach
                        @endif
                    </select>
                </div>
                @error('tag')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="Submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection
