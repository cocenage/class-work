|@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">описание постика }}</label>
                <input type="text" value="{{ $post->title }}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">постик</label>
                <input type="text" value="{{ $post->text }}" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">изображение постика</label>
                <input type="file"  name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <img src="/images/{{ $post-> image }}" width="150px" height="150px" alt="">
            <button type="submit" class="btn btn-primary"> сохранить</button>
        </form>
    </div>
@endsection
