@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><h3>Выберите действия</h3></div>
                    <div class="card-body">
                        @if($message)
                            <div class="alert alert-success" role="alert">
                                {{$message}}
                            </div>
                        @endif
                        @auth
                            <div class="list-group">
                                <a href="{{ route('categories.create') }}"
                                   class="list-group-item list-group-item-action">Добавить категорию</a>
                                <a href="{{ route('categories.index') }}"
                                   class="list-group-item list-group-item-action">Посмотреть категорию</a>
                                <a href="{{ route('posts.create') }}" class="list-group-item list-group-item-action">Добавить
                                    новость</a>
                                <a href="{{ route('posts.index') }}" class="list-group-item list-group-item-action">Посмотреть
                                    новость</a>
                                {{--<a href="#" class="list-group-item list-group-item-action">Изменить меню</a>--}}
                                <a href="{{ route('images.create') }}" class="list-group-item list-group-item-action">Добавить
                                    Изображение</a>
                                <a href="{{ route('images.index') }}" class="list-group-item list-group-item-action">Просмотреть
                                    Изображение</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
