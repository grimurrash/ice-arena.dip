@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session()->has('message'))
                    <div class="alert alert-success mb-3" role="alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{ route('posts.search')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="search">Поиск:</label>
                                <input id="search" required type="text" class="form-control"
                                       placeholder="Текст для поиска" value="{{old('search')}}"
                                       name="search">
                            </div>
                            <input type="submit" class="btn btn-success btn-lg btn-block" value="Искать">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div style="position:relative;">
                        <h3 class="text-center mt-3 mb-4">Посты</h3>
                        <a href="{{ route('posts.create') }}" class="btn btn-primary"
                           style="position:absolute; top: 15px; right: 15px">Создать новый пост</a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Изображение</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <th>{!!  $post->id !!}</th>
                                <th><a href="{{route('posts.show',$post)}}">{!! $post->title !!} </a></th>
                                <th>{!! $post->category->name !!}</th>
                                <th>
                                    <a href="{{route('posts.show',$post)}}">
                                        <img src="{{ asset("public/images/upload/".$post->image->link)}}"
                                             style="width: 150px" alt=" {{$post->image->name }}">
                                    </a>
                                </th>
                                <th>
                                    <a href="{{ route('posts.edit',$post) }}"
                                       class="btn btn-primary ">
                                        Редактировать
                                    </a>
                                    <a href="{{ route('posts.delete',$post) }}" class="btn btn-danger ml-3">
                                        Удалить
                                    </a>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="5" class="text-center">Нет постов</th>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="5">
                                {{ $posts->links() }}
                            </th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
