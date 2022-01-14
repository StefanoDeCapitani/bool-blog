@extends('layouts.default')
@section('title', 'Bool-Boolean')

@section('header-title', 'Benvenuto sul Blog di Boolean!')
@section('header-subtitle', 'Sottotitolo homepage')

@section('main-content')
    <!-- Featured blog post-->
    <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="{{ $posts[0]->coverImg }}" alt="{{ $posts[0]->title }}" /></a>
        <div class="card-body">
            <div class="small text-muted">{{ $posts[0]->author }}</div>
            <h2 class="card-title">{{ $posts[0]->title }}</h2>
            <p class="card-text">{{ $posts[0]->content }}</p>
            <a class="btn btn-primary" href="#!">Read more →</a>
        </div>
    </div>
    <!-- Nested row for non-featured blog posts-->

    <div class="row">
        @foreach ($posts as $post)
            @if ($loop->index != 0)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ $post->coverImg }}"
                                alt="{{ $post->title }}" /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $post->author }}</div>
                            <h2 class="card-title h4">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->content }}</p>
                            <a class="btn btn-primary" href="{{route("posts.show")}}">Read more →</a>
                        </div>
                    </div>
                </div>
            @endif

        @endforeach

    </div>
    <!-- Pagination-->
    <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
            <li class="page-item"><a class="page-link" href="#!">2</a></li>
            <li class="page-item"><a class="page-link" href="#!">3</a></li>
            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
            <li class="page-item"><a class="page-link" href="#!">15</a></li>
            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
        </ul>
    </nav>
@endsection
