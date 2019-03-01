@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ asset("posts/$post->link/update") }}" method="POST" enctype="multipart/form-data">
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
                                       value="{{$post->title}}"
                                       name="title">
                            </div>

                            <div class="form-group">
                                <label for="сategory_id">Выберите категорию поста</label>
                                <select required id="сategory_id" class="form-control" name="сategory_id">
                                    @forelse($categories as $cat)
                                        @if($cat->id == $post->categor_id)
                                            <option selected value="{{$cat->id}}">{{$cat->name}}</option>
                                        @else
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endif
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
                                <textarea required id="anons" class="form-control"
                                          name="anons">{{$post->anons}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="text">Введите текст поста</label>
                                <textarea required id="text" class="form-control" name="text">{{$post->text}}</textarea>
                            </div>

                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Сохранить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
