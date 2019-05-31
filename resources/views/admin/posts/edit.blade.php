@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('posts.update',$post) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT"/>
                            @csrf
                            @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="title">Введите заголовок поста</label>
                                <input id="title" required type="text" class="form-control"
                                       placeholder="Заголовок поста"
                                       value="{{ old('title',$post->title) }}"
                                       name="title">
                            </div>

                            <div class="form-group">
                                <label for="category_id">Выберите категорию поста</label>
                                <select required id="category_id" class="form-control" name="category_id">
                                    @forelse($categories as $cat)
                                        @if($cat->id == old('category_id',$post->category_id))
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
                                <label for="image">Выберите ранее загруженное изобращение</label>
                                <select id="image" required name="image"  class="form-control">
                                    @forelse($images as $img)
                                        @if($img->id == old('image',$post->image_id))
                                            <option selected value="{{$img->id}}">{{$img->name}}</option>
                                        @else
                                            <option value="{{$img->id}}">{{$img->name}}</option>
                                        @endif
                                    @empty
                                        <option value="1">test</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="anons">Введите краткую информацию о вашем посте</label>
                                <textarea required id="anons" style="height: 100px;" class="form-control"
                                          name="anons">{{ old('anons',$post->anons) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="text">Введите текст поста</label>
                                <textarea required id="text" class="form-control" style="height: 200px;" name="text">{{ old('text',$post->text) }}</textarea>
                            </div>

                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Сохранить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
