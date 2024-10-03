@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Пости блогу</h1>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 100) }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Читати далі</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('posts.create') }}" class="btn btn-success">Створити новий пост</a>
        </div>
    </div>
@endsection
