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
                    <h3 class="text-center mt-3 mb-4">Комментарии в модерации</h3>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Пост</th>
                            <th>Автор</th>
                            <th>Текст</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($comments as $comment)
                            <tr>
                                <th>{{ $comment->id }}</th>
                                <th><a href="{{ route('posts.show',$comment->post) }}">{{ $comment->post->title }}</a></th>
                                <th>{{ $comment->author }}</th>
                                <th>{!! $comment->comment !!}</th>
                                <th>
                                    <a href="{{ route('comments.edit',$comment) }}"
                                       class="btn btn-success">
                                        Разрешить
                                    </a>
                                    <a href="{{ route('comments.delete',$comment) }}"
                                       class="btn btn-danger">
                                        Отказать
                                    </a>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="5" class="text-center">Нет комментариев</th>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="5">
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
