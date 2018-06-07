@extends('layouts.admin')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h2>Посты</h2>
        <a href="{{Route ('posts.add')}}" class="btn btn-success" style="position:absolute;top: 20px;right: 30px;">+ Добавить пост</a>
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
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->created_at->format('d.m.Y H:i')}}</td>
                    <td>
                        <a href="{{Route ('posts.edit', ['id' => $post->id])}}" class="btn btn-warning">Редактировать</a>
                        <a href="javascript:;" class="delete btn btn-danger" data-id="{{$post->id}}">Удалить</a>
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
                        url: "{!! Route('posts.delete') !!}",
                        data: {_token:"{{csrf_token()}}", id:$(this).attr("data-id")},
                        complete: function() {
                            alertify.success("Статья удалена");
                            location.reload();
                        }
                    });
            });
        });
    </script>
    @endsection