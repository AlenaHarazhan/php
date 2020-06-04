@extends('layouts.base')
@push('styles')
<link type="text/css" href="{{asset('css/home.css')}}" rel="stylesheet" />
<link href="{{asset('css/modal.css')}}" rel="stylesheet"/>
@endpush
<!-- Scripts -->

@push('scripts')

<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{asset('js/modal.js')}}"></script>
@endpush
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Форма добавления товара</div>
                <div class="card-body">
                    <form class="was-validated" action="{{asset('home')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Название товара</label>
                            <input type="text" name="name" class="form-control is-invalid" id="name">
                            @error('name')
                            <span class="danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price">Цена</label>
                            <input type="text" name="price" class="form-control is-invalid" id="price" required>
                            @error('price')
                            <span class="danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="body">Описание товара</label>
                            <textarea class="form-control is-invalid" name="body" id="body" placeholder="Полное описание товара" required></textarea>
                            @error('body')
                            <span class="danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="small_body">Короткое описание</label>
                            <textarea class="form-control is-invalid" name="small_body" id="small_body" placeholder="Короткое описание" required></textarea>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="showhide" checked class="custom-control-input" id="showhide" required>
                            @error('showhide')
                            <span class="danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="custom-control-label" for="showhide">Отметить для отображения</label>
                            <div class="invalid-feedback">Скрыто</div>
                        </div>
                        <div class="form-group">
                            <select class="custom-select" name="category_id" required>
                                <option value="">Выберете категорию</option>
                                <option value="1">Иллюстрации</option>
                                <option value="2">Раскраски</option>
                                <option value="3">Персонажи</option>
                                <option value="4">Логотипы</option>
                            </select>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="picture1" class="custom-file-input" id="picture1">
                            @error('picture1')
                            <span class="danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="custom-file-label" for="picture1">Выберете изображение...</label>
                        </div>
                        <div class="form-group">
                            <br />
                            <button class="btn btn-primary" type="submit">Сохранить</button>
                        </div>
                    </form>
                    <table class="table table-bordered table-striped" width="100%">
                        <tr>
                            <th width="200px">Изображение</th>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Действия</th>
                            <th>Действия</th>
                        </tr>
                        @foreach($objs as $one)
                        <th>
                     <img src="/uploads/1/ss_{{$one->picture}}" alt="">
                </th>

                            <td>{{$one->picture}}</td>
                            <th>{{$one->name}}</th>
                            <th>{{$one->body}}</th>
                            <th>Редактировать </br >
                                <a href="{{asset('product/delete/'.$one->id)}}" class="btn btn-block btn-default">
                                Удалить</a>
                                <a href="#" class="btn btn-block btn-primary show_modal" data-id="{{$one->id}}">Просмотр</a>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                    <p align="center">{!!$objs->links()!!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
