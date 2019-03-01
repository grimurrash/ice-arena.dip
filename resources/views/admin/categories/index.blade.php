@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <h3 class="text-center" style="margin-top: 30px;">Категории</h3>
                    @forelse($categories as $cat)
                        <ul class="list-group" >
                            <li class="list-group-item">
                                <h5 class="card-title">{{$cat->name}}</h5>
                            </li>
                        </ul>
                    @empty
                        <h3>На сайте нет категориев</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
