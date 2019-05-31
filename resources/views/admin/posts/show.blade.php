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
                    <div style="width: 100%;">
                        <img src="{{ asset("public/images/upload/".$post->image->link)}}"
                             class="card-img-top" alt="..." style="width: auto; max-width: 100%; margin: 0 auto">
                    </div>
                    <div class="card-body ">
                        <div>
                            <h4>Категория: {!! $post->category->name !!}</h4>
                        </div>
                        <div>
                            <p>{!! $post->text !!}</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-sm-between" style="margin: 0">
                        <div class="col-sm-6">
                            <small class="text-muted">{{date('H:i d.m.Y',strtotime($post->created_at))}}</small>
                        </div>
                        <div class="d-flex">
                            <a href="{{ route('posts.edit',$post) }}"
                                class="btn btn-primary ">
                                Редактировать
                            </a>
                            <a href="{{ route('posts.delete',$post) }}" class="btn btn-danger ml-3">
                                Удалить
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
