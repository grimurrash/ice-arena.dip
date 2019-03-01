@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if($message)
                <div class="alert alert-success w-100" role="alert">
                    {{$message}}
                </div>
            @endif
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header bg-light text-center">
                        <h2 class="card-title">{!! $post->title !!}</h2>
                        @auth
                            @if(Auth::user()->permission === 'admin')
                                <a href="{{ asset("posts/$post->link/edit") }}"
                                   class="btn btn-primary btn-lg btn-block">
                                    <i class="fas fa-edit"></i> Редактировать
                                </a>
                                <a href="{{ asset("posts/$post->link/delete") }}" class="btn btn-danger btn-lg btn-block">
                                    <i class="fas fa-trash-alt"></i> Удалить
                                </a>
                            @endif
                        @endauth
                    </div>
                    <div style="width: 100%;display: flex; justify-content: center;">
                       <img src="{{ asset("public/images/upload/".$post->image->link)}}"
                                                                    class="card-img-top" alt="..." style="width: auto">
                    </div>
                    <div class="card-body ">
                        <div>
                            <h4>Категория: {!! $post->category->name !!}</h4>
                        </div>
                        <div>
                            <p>{!! $post->text !!}</p>
                        </div>
                    </div>
                    <div class="card-footer row" style="margin: 0">
                        <div class="col-sm-6">
                            <small class="text-muted">{{date('H:i d.m.Y',strtotime($post->created_at))}}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
