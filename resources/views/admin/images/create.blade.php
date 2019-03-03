@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($error)
                                <div class="alert alert-danger w-100" role="alert">
                                    {{$error}}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="title">Название картинки</label>
                                <input id="title" required type="text" class="form-control"
                                       placeholder="Введите название картинки"
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
            </div>
        </div>
    </div>
@endsection
