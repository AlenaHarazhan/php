@extends('layouts.base')
@push('styles')
<link type="text/css" href="{{asset('/media/css/home.css')}}" rel="stylesheet" />
@endpush
@section('content')
<div id="center">

    <fieldset class="field">
        <legend>Форма заказа</legend>
        <p>Пожалуйста, заполните эту форму, чтобы сделать заказ.</p>
        <hr>
        <form method="POST">

        <label for="category">Выберите категорию</label>

        <select id="category" name="category" form="category">
            <option value="rs">Раскраски</option>
            <option value="ill">Иллюстрации</option>
            <option value="logo">Логотипы</option>
            <option value="gd">Game Dev</option>
            <option value="char">Персонажи</option>
        </select>
    </br>

        <label for="login"><b>Название картинки</b></label>
        <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <label for="login"><b>Ваше имя</b></label>
        <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <label for="login"><b>Ваш E-mail</b></label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        <label for="login"><b>Ваш телефон</b></label>
        <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <div class="registerbtn">
            <button type="submit" class="registerbtn">
            {{ __('Отправить') }}
            </button>
        </div>
    </fieldset>
</form>
</div>
@endsection
