@extends('layouts.auth_layout')

@section('main_title')
    Регистрация
@endsection

@section('auth_title')
    Регистрация
@endsection

@section('auth_form')
    <form action="{{ route('registration') }}" method="post" class="auth_form">
        @csrf
        <div class="form_item">
            <label class="input_label" for="login_input">E-mail</label>
            <input class="input" name="email" type="text" id="login_input">
        </div>
        <div class="form_item">
            <label class="input_label" for="password_input">Пароль</label>
            <input class="input" name="password" type="password" id="password_input">
        </div>
        <button type="submit" class="submit_button auth_button">
            Зарегистрироваться
        </button>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
