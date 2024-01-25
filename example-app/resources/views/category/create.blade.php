@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">название категории</label>
                <input type="name" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">описание категории</label>
                <textarea name="text" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <select name="is_active" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="0">Не актив</option>
                        <option value="1">Пассив</option>
                    </select>
                </div>
            </div>
            <button  type="submit" class="btn btn-primary"> сохранить</button>
        </form>
    </div>
@endsection
