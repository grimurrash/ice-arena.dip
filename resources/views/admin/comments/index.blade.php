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
            </div>
            <div class="col-md-10">
                <div class="card">
                    <h3 class="text-center mt-3 mb-4">Комментарии</h3>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Пост</th>
                            <th>Автор</th>
                            <th>Текст</th>
                            <th>Статус</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($comments as $comment)
                            <tr>
                                <th>{{ $comment->id }}</th>
                                <th><a href="{{ route('posts.show',$comment->post) }}">{{ $comment->post->title }}</a>
                                </th>
                                <th>{{ $comment->author }}</th>
                                <th>{!! $comment->comment !!}</th>
                                <th>
                                    @if($comment->publish === 1)
                                        <span class="badge badge-success"
                                              style="font-size: 100% ;">Прошел модерацию</span>
                                    @else
                                        <span class="badge badge-danger"
                                              style="font-size: 100% ;">Не прошёл модерацию</span>
                                    @endif
                                </th>
                                <th>
                                    @if($comment->publish === 0)
                                        <a href="{{ route('comments.edit',$comment) }}"
                                           class="btn btn-success">
                                            Разрешить
                                        </a>
                                    @endif
                                    <a href="{{ route('comments.delete',$comment) }}"
                                       class="btn btn-danger">
                                        Удалить
                                    </a>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="6" class="text-center">Нет комментариев</th>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="6">
                                {{ $comments->links() }}
                            </th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
