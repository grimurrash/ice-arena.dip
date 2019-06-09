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
                                <a href="{{ route('categories.index') }}"
                                   class="list-group-item list-group-item-action">Посмотреть категорию</a>
                                <a href="{{ route('images.index') }}" class="list-group-item list-group-item-action">Просмотреть
                                    Изображение</a>
                                <a href="{{ route('posts.index') }}" class="list-group-item list-group-item-action">Посмотреть
                                    новость</a>
                                <a href="{{ route('comments.index') }}" class="list-group-item list-group-item-action">Комментарии</a>
                                <a href="{{ route('reviews.index') }}" class="list-group-item list-group-item-action">Отзывы</a>
                                <a href="{{ route('feedback.index') }}" class="list-group-item list-group-item-action">Обратная связь</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
