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
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->body}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->updated_at}}</td>

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
                        <!-- Button trigger modal -->
                        <td><button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#destroy-{{$article->id}}">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button></td>

                        <!-- Modal -->
                        <div class="modal fade" id="destroy-{{$article->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="article-destroy-{{$article->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="article-destroy-{{$article->id}}">Delete article
                                            {{$article->id}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            Are you sure?
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <form action="{{ route('articles.destroy', ['article'=>$article->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
</main>
@endsection
