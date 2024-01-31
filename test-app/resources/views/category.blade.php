@extends('layout.master')



@section('content')
    <div class="container">
        @forelse($categories as $category)
            <div class="card" style="width: 18rem;">
{{--                <img src="..." class="card-img-top" alt="...">--}}
                <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                    <p class="card-text">{{$category->text}}</p>
                    <a href="{{ route('products', $category->id)}}" class="btn btn-primary">Cтать китибоем</a>
                </div>
            </div>
        @empty
            {{__('нА этой странице работает китибой')}}
        @endforelse

    </div>
@endsection
