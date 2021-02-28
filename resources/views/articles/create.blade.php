@extends('layouts.layout')

@section('title')
Create
@endsection

@section('main')
@include('partials.errors')
<main>
    <section class="create">
        <div class="container">
            <form action="{{ route('articles.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Text your title">
                </div>

                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea type="text" name="body" id="body" class="form-control" placeholder="Text your body"
                        cols="50" rows="10"></textarea>
                </div>
                @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                {{-- <div class="form-group">
                  <label for="categories"></label>
                  <select class="form-control" name="categories" id="categories">
                    @if ($categories)
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                @endif
                </select>
        </div> --}}

        <div class="form-group">
            <label for="tags">Tags</label>
            <select class="form-control" name="tags[]" id="tags" multiple>
                @if ($tags)
                @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
                @endif
            </select>
        </div>
        @error('tag')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div>
    </section>
</main>
@endsection
