@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($message)
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="title">Введите заголовок новости</label>
                                <input id="title" required type="text" class="form-control"
                                       placeholder="Заголовок новости"
                                       name="title">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Выберите категорию новости</label>
                                <select required id="category_id" class="form-control" name="category_id">
                                    @forelse($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @empty
                                        <option value="1">test</option>
                                        <option value="2">test</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="anons">Загрузите изобращение новости</label>
                                <input required type="file" class="form-control-file" name="image"
                                       placeholder="Укажите путь к изобращению">
                            </div>

                            <div class="form-group">
                                <label for="anons">Введите краткую информацию о вашей новости</label>
                                <textarea required id="anons" maxlength="150" class="form-control" name="anons"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="text">Введите текст новости</label>
                                <textarea required id="text" class="form-control" name="text"></textarea>
                            </div>

                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Создать">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
