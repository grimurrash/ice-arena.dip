@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{asset('posts/search')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="search">Поиск:</label>
                                <input id="search" required type="text" class="form-control"
                                       placeholder="Текст для поиска" value="{{$search}}"
                                       name="search">
                            </div>
                            <input type="submit" class="btn btn-success btn-lg btn-block" value="Искать">
                        </form>
                    </div>
                </div>
                @forelse($posts as $post)
                    <div class="card mb-3">
                        <div style="width: 100%;display: flex;justify-content: center;">
                            <a href="{{asset("posts/$post->link")}}"><img
                                        src="{{ asset("public/upload/",$post->image->link)}}"
                                        class="card-img-top" alt=" {{$post->image->name }}"></a>
                        </div>
                        <div class="card-body">
                            <a href="{{asset("posts/$post->id")}}"><h4 class="card-title">{!! $post->title !!}</h4></a>
                            <h5>
                                Категория: {!! str_replace($search, "<mark>{$search}</mark>", $post->category->name) !!}
                            </h5>
                            <p class="card-text">{!! $post->anons !!}</p>
                        </div>
                        <div class="card-footer row" style="margin: 0">
                            <div class="col-sm-6">
                                <small class="text-muted">{{date('H:i d.m.Y',strtotime($post->created_at))}}</small>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>На сайте нет постов</h3>
                @endforelse
            </div>
        </div>
    </div>
@endsection
