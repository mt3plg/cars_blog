@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Створити новий пост</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Контент</label>
                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Зберегти</button>
        </form>
    </div>
@endsection
