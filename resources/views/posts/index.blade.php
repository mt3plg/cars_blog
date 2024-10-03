@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Пости</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Додати пост</a>
        <div class="mt-4">
            @foreach($posts as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->content }}</p>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary">Переглянути</a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Редагувати</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Видалити</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
