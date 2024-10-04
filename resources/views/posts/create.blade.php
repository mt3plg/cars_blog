@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Додати новий пост</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group">
                <label for="content">Контент</label>
                <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Створити</button>
        </form>
    </div>
@endsection
