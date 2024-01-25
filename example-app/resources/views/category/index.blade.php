@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('category.create') }}" class="btn btn-primary">новые категории</a>
        </div>
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
                @forelse($categories as $category)
                        <tr>
                            <th>
                                {{$category-> id}}
                            </th>
                            <td>
                                {{$category-> name}}
                            </td>
                            <td>
                                {{$category-> text}}
                            </td>
                            <td>
                                @if($category-> is_active == 0)
                                    {{__('ythn')}}
                                @else

                                    {{__('frfre')}}
                                @endif
                            </td>
                        </tr>
                @empty
                    категории ликвидированы
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
