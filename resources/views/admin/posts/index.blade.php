@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header bg-light text-center">
                        <h2 class="card-title">{{$post->title}}</h2>
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
                    <div style="width: 100%;display: flex;justify-content: center;">
                        <a href="{{asset("posts/$post->link")}}"><img src="{{ asset("public/images/upload/".$post->image->link)}}"
                                                                    class="card-img-top" alt="..."></a>
                    </div>
                    <div class="card-body ">
                        <div>
                            <h4>Категория: {{ $post->category->name }}</h4>
                        </div>
                        <div>
                            <p>{{ $post->text }}</p>
                        </div>
                        <hr>
                        <div>
                            <h4>Комментарии</h4>
                            @forelse($post->comments as $comment)
                                <div class="card bg-light mb-3">
                                    <div class="card-header row" style="margin: 0">
                                        <div class="col-sm-6 text-left ">
                                            <h5 class="text-muted">{{ $comment->user->name }}</h5>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <small class="text-muted">{{date('H:i d.m.Y',strtotime($comment->created_at))}}</small>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $comment->comment}}</p>
                                    </div>
                                </div>
                            @empty
                                Комментариев нет
                            @endforelse
                        </div>
                        <hr>
                        @auth
                            <div>
                                <form action="{{asset("posts/{$post->link}/comments")}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="comment">Написать комментарий:</label>
                                        <textarea required id="comment" class="form-control" name="comment"></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Создать">
                                </form>
                            </div>
                        @endauth
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
