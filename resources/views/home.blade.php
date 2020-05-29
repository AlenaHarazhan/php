@extends('layouts.base')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
            <br>
            <div class="form-group">
                <label for="category">Выберите категорию</label>
                <select class="form-control" id="category" name="category">
                    <option value="rs" selected = 'selected'>Раскраски</option>
                    <option value="ill">Иллюстрации</option>
                    <option value="logo">Логотипы</option>
                    <option value="gd">Game Dev</option>
                    <option value="char">Персонажи</option>
                </select>
            </div>
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
    <form method="post" enctype="multipart/form-data" action="{{asset('product/add')}}" method="post">
        @csrf
        <div class="form-group">
            <legend>Форма добавления товара</legend>
            <p>Пожалуйста, заполните эту форму, чтобы сделать заказ.</p>
            <br>
            <label for="name">Наименование товара</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
            <div>{{$message}}</div>
            @enderror
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="price">Цена</label>
            <input type="text" class="form-control" id="price" name="price">
            @error('price')
            <div>{{$message}}</div>
            @enderror
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="body">Описание товара</label>
            <textarea class="form-control" id="body" rows="3" name = "body"></textarea>
            @error('body')
            <div>{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="picture1">Загрузите картинку</label>
                <input type="file" class="form-control-file" id="picture1" name="picture1">
                @error('picture1')
                <div>{{$message}}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table table-bordered table-striped" width="100%">
        <tr>
            <th width="200px">Изображение</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Категория</th>
            <th>Действия</th>
        </tr>
        @foreach($objs as $item)
        <tr>
            <th>
                <img src="/uploads/20/ss_{{$item->picture}}" alt="">
            </th>
            <td>{{$item->name}}</td>
            <th>{{$item->body}}</th>
            <th>{{$item->price}}</th>
            <th>Редактировать <br />
                <a href="{{asset('product/delete/'.$item->id)}}" class="btn btn-block btn-default">
                Удалить</a></th>
            </tr>
            @endforeach
            <p align="center">{!!$objs->links()!!}</p>
        </table>
    </div>
    @endsection
