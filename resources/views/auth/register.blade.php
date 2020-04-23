@extends('layouts.base')
@section('content')
<div id="center">
    <h1>Регистрация</h1>
    <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
    <hr>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="login"><b>Логин</b></label>
        <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <strong>{{ $message }}</strong>
        @enderror
        <label for="email"><b>Введите ваш Email</b></label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <strong>{{ $message }}</strong>
        @enderror
        <label for="psw">{{ __('Введите пароль') }}</label>
        <input id="password" type="password" name="password" required autocomplete="new-password">
        @error('password')
        <strong>{{ $message }}</strong>
        @enderror
        <div class="psw-repeat">
            <label for="psw-repeat">{{ __('Повторите пароль') }}</label>
            <input id="psw-repeat" type="password"  name="password_confirmation" required autocomplete="new-password">
        </div>
        <div class="registerbtn">
            <button type="submit" class="registerbtn">
            {{ __('Зарегистрироваться') }}
            </button>
        </div>
    </form>
</div>
@endsection
