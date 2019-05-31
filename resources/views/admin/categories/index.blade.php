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
                        <form action="{{ route('categories.store')}}" method="POST">
                            @csrf
                            @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="name">Введите название категории</label>
                                <input id="name" required type="text" class="form-control"
                                       placeholder="Название категории" value="{{ old('name') }}"
                                       name="name">
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
                               <th>Кол-во постов</th>
                               <th>Действия</th>
                           </tr>
                           </thead>
                           <tbody>
                           @forelse($categories as $cat)
                           <tr>
                               <th>{{ $cat->id }}</th>
                               <th>{{ $cat->name }}</th>
                               <th>{{ $cat->posts->count() }}</th>
                               <th>
                                   <a href="{{ route('categories.delete',$cat) }}" class="btn btn-danger">Удалить</a>
                               </th>
                           </tr>
                           @empty
                               <tr>
                                   <th colspan="4" class="text-center">Нет категорий</th>
                               </tr>
                           @endforelse
                           </tbody>
                           <tfoot>
                           <tr>
                               <th colspan="4">
                                   {{ $categories->links() }}
                               </th>
                           </tr>
                           </tfoot>
                       </table>
                </div>
            </div>
        </div>
    </div>
@endsection
