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
                    <h3 class="text-center mt-3 mb-4">Заявки на обратную связь</h3>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>Email</th>
                            <th>Текст</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($feedbacks as $feedback)
                            <tr>
                                <td>{{ $feedback->id }}</td>
                                <td>{{ $feedback->name }}</td>
                                <td>{{ $feedback->phone }}</td>
                                <td>{{ $feedback->email }}</td>
                                <td style="max-width: 180px; word-wrap: break-word">{{ $feedback->comment }}</td>
                                <td><a href="{{ route('feedback.edit',$feedback) }}"
                                       class="btn btn-primary">Ответил</a></td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="6" class="text-center">Нет заявок</th>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="6">
                                {{ $feedbacks->links() }}
                            </th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
