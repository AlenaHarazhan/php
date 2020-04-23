@extends('layouts.base')
@section('content')
<div id="center">
    <h1>Добро пожаловать!</h1>
    <p>Пожалуйста, введите ваши данные, чтобы войти в учетную запись.</p>
    <hr>
    <label for="login"><b>Логин</b></label>
    <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">{{ __('E-Mail') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <strong>{{ $message }}</strong>
        @enderror
        <label for="psw">{{ __('Пароль') }}</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        @error('password')
        <strong>{{ $message }}</strong>
        @enderror
        <div class="form-check">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">
                {{ __('Запомнить меня') }}
            </label>
        </div>
        <div class="registerbtn">
            <button type="submit" >
            {{ __('Войти') }}
            </button>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Забыли пароль?') }}
            </a>
            @endif
        </div>
    </form>
</div>
@endsection
