@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="title">Введите заголовок новости</label>
                                <input id="title" required type="text" class="form-control"
                                       placeholder="Заголовок новости" value="{{ old('title') }}"
                                       name="title">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Выберите категорию новости</label>
                                <select required id="category_id" class="form-control" name="category_id">
                                    @forelse($categories as $cat)
                                        <option {{ old('category_id') === $cat->id ? 'checked' : '' }} value="{{$cat->id}}">{{$cat->name}}</option>
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
                                <textarea required id="anons" style="height: 100px;" maxlength="500"
                                          class="form-control" name="anons">{{ old('anons') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="text">Введите текст новости</label>
                                <textarea required id="text" style="height: 200px;" class="form-control"
                                          name="text">{{ old('text') }}</textarea>
                            </div>

                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Создать">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
