@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Пости</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Додати новий пост</a>
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Детальніше</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Редагувати</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Видалити</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
