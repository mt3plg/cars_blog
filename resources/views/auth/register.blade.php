@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Реєстрація</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="name">Ім'я</label>
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Пароль</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password-confirm">Підтвердіть пароль</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Зареєструватися
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
