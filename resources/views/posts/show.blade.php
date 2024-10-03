@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title">{{ $post->title }}</h1>
                <p class="text-muted">Автор: {{ $post->user->name }}</p>
                <div class="content mt-3">
                    <p>{{ $post->content }}</p>
                </div>
                <div class="mt-4">
                    <form action="{{ route('posts.like', $post) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            👍 {{ $post->likes_count }} Лайків
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3>Коментарі</h3>
            @foreach($post->comments as $comment)
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="text-muted">Автор: {{ $comment->user->name }}</p>
                        <p>{{ $comment->body }}</p>
                    </div>
                </div>
            @endforeach

            <div class="card mt-4">
                <div class="card-body">
                    <h5>Додати коментар</h5>
                    <form action="{{ route('comments.store', $post) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea name="body" class="form-control" rows="3" placeholder="Ваш коментар..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Додати коментар</button>
                    </form>
                </div>
            </div>
        </div>

        <a href="{{ route('blog.index') }}" class="btn btn-secondary mt-4">Назад до списку постів</a>
    </div>
@endsection
