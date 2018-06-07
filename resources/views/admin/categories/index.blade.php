@extends('layouts.admin')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h2>Категории</h2>
        <a href="{{Route ('categories.add')}}" class="btn btn-success" style="position:absolute;top: 20px;right: 30px;">+ Добавить категорию</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Дата добавления</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $categori)
                <tr>
                    <th scope="row">{{$categori->id}}</th>
                    <td>{{$categori->title}}</td>
                    <td>{{$categori->description}}</td>
                    <td>{{$categori->created_at->format('d.m.Y H:i')}}</td>
                    <td>
                        <a href="{{Route ('categories.edit', ['id' => $categori->id])}}" class="btn btn-warning">Редактировать</a>
                        <a href="javascript:;" class="delete btn btn-danger" data-id="{{$categori->id}}">Удалить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection

@section('js')
    <script>
        $(function(){
            $(".delete").on('click', function () {
                    $.ajax({
                        type: "DELETE",
                        url: "{!! Route('categories.delete') !!}",
                        data: {_token:"{{csrf_token()}}", id:$(this).attr("data-id")},
                        complete: function() {
                            alertify.success("Категория удалена");
                            location.reload();
                        }
                    });
            });
        });
    </script>
    @endsection