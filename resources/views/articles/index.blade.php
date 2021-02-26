@extends('layouts.layout')

@section('title')
Articles
@endsection

@section('main')
<main>
    <section class="articles">
        <div class="container">
            <div class="my-5">
                <h2 class="mb-5">My articles</h2>

                <a href=" {{route('articles.create') }}"><button type="button" class="btn btn-primary">
                        <i class="fas fa-file"></i>
                        Create a new article
                    </button></a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->body}}</td>

                        {{-- CRUD View --}}
                        <td><a href="{{ route('articles.show', ['article'=>$article->id]) }}"><button type="button"
                                    class="btn btn-warning text-light">
                                    <i class="fas fa-eye"></i>
                                    View
                                </button></a></td>
                        {{-- CRUD Update --}}
                        <td><a href="{{ route('articles.edit', ['article'=>$article->id]) }}"><button type="button"
                                    class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </button></td>

                        {{-- CRUD Delete --}}
                        <form action="{{ route('articles.destroy', ['article'=>$article->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <td><button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
</main>
@endsection
