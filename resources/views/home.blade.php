@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Выберите действие</div>
                    <div class="card-body">
                        @auth
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">Добавить категорию</a>
                                <a href="#" class="list-group-item list-group-item-action">Добавить новость</a>
                                <a href="#" class="list-group-item list-group-item-action">Посмотреть посты</a>
                                <a href="#" class="list-group-item list-group-item-action">Изменить меню</a>
                                <a href="#" class="list-group-item list-group-item-action">Посмотреть Изображения</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
