@extends('layouts.base')
@push('styles')
<link type="text/css" href="{{asset('/media/css/home.css')}}" rel="stylesheet" />
@endpush
@section('content')

<div id="center">
    <form enctype="multipart/form-data" action="{{asset('home')}}" method="post">
        @csrf
        <fieldset class="field">
@foreach($objs as $one)
<div class="order">{{$one->name}}</div>
@endforeach
            <legend>Форма заказа</legend>
            <p>Пожалуйста, заполните эту форму, чтобы сделать заказ.</p>
            <hr>
            <label for="category">Выберите категорию</label>
            <select id="category" name="category" form="category" =>

                <option selected disabled hidden style="display: none" value="default">
                    <option value="rs" selected = 'selected'>Раскраски</option>
                    <option value="ill">Иллюстрации</option>
                    <option value="logo">Логотипы</option>
                    <option value="gd">Game Dev</option>
                    <option value="char">Персонажи</option>
                </select>
                </br>
                <label for="name"><b>Название картинки</b></label>
                <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="myname"><b>Ваше имя</b></label>
                <input id="myname" type="text"  name="myname" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('myname')
                <span class="danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="email"><b>Ваш E-mail</b></label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="phone"><b>Ваш телефон</b></label>
                <input id="phone" type="text" name="phone" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('phone')
                <span class="danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="picture"><b>Загрузить изображение</b></label>
                <input id="picture" type="file" name="picture1">
                @error('picture')
                <span class="danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="registerbtn">
                    <button type="submit" class="registerbtn">
                    {{ __('Отправить') }}
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    @endsection
