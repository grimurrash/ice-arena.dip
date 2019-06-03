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
                    <h3 class="text-center mt-3 mb-4">Отзывы</h3>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Автор</th>
                            <th>Текст</th>
                            <th>Статус</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($reviews as $review)
                            <tr>
                                <th>{{ $review->id }}</th>
                                <th>{{ $review->author }}</th>
                                <th>{!! $review->comment !!}</th>
                                <th>
                                    @if($review->publish === 1)
                                        <span class="badge badge-success"
                                              style="font-size: 100% ;">Прошел модерацию</span>
                                    @else
                                        <span class="badge badge-danger"
                                              style="font-size: 100% ;">Не прошёл модерацию</span>
                                    @endif
                                </th>
                                <th>
                                    @if($review->publish === 0)
                                        <a href="{{ route('reviews.edit',$review) }}"
                                           class="btn btn-success">
                                            Разрешить
                                        </a>
                                    @endif
                                    <a href="{{ route('reviews.delete',$review) }}"
                                       class="btn btn-danger">
                                        Удалить
                                    </a>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="5" class="text-center">Нет отзывов</th>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="5">
                                {{ $reviews->links() }}
                            </th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
