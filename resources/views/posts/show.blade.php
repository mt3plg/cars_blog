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
            </div>
        </div>
        <a href="{{ route('blog.index') }}" class="btn btn-secondary mt-4">Назад до списку постів</a>
    </div>
@endsection
