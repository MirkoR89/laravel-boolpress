@extends('layouts.layout')

@section('title')
Create
@endsection

@section('main')
<section class="create">
    <div class="container">
        <form action="{{ route('articles.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Text your title">
            </div>

            <div class="form-group">
                <label for="">Body</label>
                <textarea type="text" name="body" id="body" class="form-control" placeholder="Text your body" cols="50" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
@endsection
