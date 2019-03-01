@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if($message)
                <div class="alert alert-success w-100" role="alert">
                    {{$message}}
                </div>
            @endif
            @forelse($images as $image)
                <div class="card justify-content-center" style="width: 18rem; margin: 20px;">
                    <img src="{{ asset("/public/images/upload/$image->link")}}" class="card-img-top" alt="{{$image->name}}">
                </div>
            @empty
                <h3>На сайте нет изобращений</h3>
            @endforelse
        </div>
    </div>
@endsection
