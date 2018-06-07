@extends('layouts.admin')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h2>Добавление постов</h2>
        <form method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Заголовок поста</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок поста">
            </div>
            <div class="form-group">
                <label>Текст поста</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Категории</label>
                <select multiple class="form-control" id="categories" name="categories[]">
                    @foreach($categories as $categori)
                        <option value="{{$categori->id}}">{{$categori->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Создать пост</button>
        </form>
    </main>
@endsection