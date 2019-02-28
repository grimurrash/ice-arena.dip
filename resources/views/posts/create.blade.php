@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{asset('posts')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($message)
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="title">Введите заголовок поста</label>
                                <input id="title" required type="text" class="form-control"
                                       placeholder="Заголовок поста"
                                       name="title">
                            </div>
                            <div class="form-group">
                                <label for="сategor_id">Выберите категорию поста</label>
                                <select required id="сategor_id" class="form-control" name="сategor_id">
                                    @forelse($cats as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @empty
                                        <option value="1">test</option>
                                        <option value="2">test</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="anons">Загрузите изобращение поста</label>
                                <input required type="file" class="form-control-file" name="image"
                                       placeholder="Укажите путьь к изобращению">
                            </div>

                            <div class="form-group">
                                <label for="anons">Введите краткую информацию о вашем посте</label>
                                <textarea required id="anons" class="form-control" name="anons"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="text">Введите текст поста</label>
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
