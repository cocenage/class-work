|@extends('layout.master')

@section('content')
    <div class="container" style="display: flex; justify-content: center; align-items: center;">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
        <div class="row" style="width: 300px; height: 300px">
            <img width="150px" height="150px" src="/images/{{$article->image}}" alt="">
            <h4 style="text-align: center">{{$article->title}}</h4>
            <p style="text-align: center">{{$article->text}}</p>
            <a href="{{ route('Article.index') }}" class="btn btn-primary"> 😂назад в гулаг😔</a>
        </div>
    </div>

@endsection
