|@extends('layout.master')

@section('content')
    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
        <div class="row"><a href="{{route('article.create')}}" class="button button-primary">{{__('новый постик мяу кишмиш')}}</a></div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">название поста кошкодевочки</th>
                    <th scope="col">описание поста кошкодевочки</th>
                    <th scope="col">изображение кошкадевочки</th>
                    <th scope="col">действие кошкадевочки}}}</th>
                </tr>
                </thead>
                <tbody>
                @forelse($articles as $article)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->title}}</td>
                        <td>{{$article->text}}</td>
                        <td><img width="150px" height="150px" src="/images/{{$article->image}}" alt=""></td>
                        <td>
                            <a href="{{route('article.edit', $article->id)}}" class="btn btn-success">Редактировать</a>
                            <a href="{{route('article.show', $article->id)}}" class="btn btn-warning">Подробнее</a>
                            <form action="{{route('article.delete', $article->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Удалить кошкопост
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                {{__('данные ликвидированы')}}

                @endforelse

                </tbody>
            </table>
        </div>
    </div>

@endsection
