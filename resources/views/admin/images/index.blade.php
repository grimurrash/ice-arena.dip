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
                        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="title">Название картинки</label>
                                <input id="title" required type="text" class="form-control"
                                       placeholder="Введите название картинки" value="{{ old('name') }}"
                                       name="name">
                            </div>

                            <div class="form-group">
                                <label for="anons">Путь к изобращение</label>
                                <input required type="file" class="form-control-file" name="image"
                                       placeholder="Укажите путь к изобращению">
                            </div>

                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Создать">
                        </form>
                    </div>
                </div>
                <div class="card">
                    <h3 class="text-center mt-3 mb-4" >Категории</h3>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                            <th>Изображение</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($images as $image)
                            <tr>
                                <th>{{ $image->id }}</th>
                                <th>{{ $image->name }}</th>
                                <th>
                                    <a href="{{ asset("/public/images/upload/$image->link")}}">
                                        <img src="{{ asset("/public/images/upload/$image->link")}}" style="width: 100px;" alt="{{$image->name}}">
                                    </a>
                                </th>
                                <th>
                                    <a href="{{ route('images.delete',$image) }}" class="btn btn-danger">Удалить</a>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4" class="text-center">Нет изображений</th>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="4">
                                {{ $images->links() }}
                            </th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
