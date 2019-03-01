@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('categories.store')}}" method="POST">
                            @csrf
                            @if($message)
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="name">Введите название категории</label>
                                <input id="name" required type="text" class="form-control"
                                       placeholder="Название категории"
                                       name="name">
                            </div>

                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Создать">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
