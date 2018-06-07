@extends('layouts.admin')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h2>Редактирование статьи</h2>
        <form method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Название статьи</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label>Содержание статьи</label>
                <textarea class="form-control" id="content" name="content" rows="3" >{!! $post->content !!}</textarea>
            </div>
            <div class="form-group">
                <label>Категории</label>
                <select multiple class="form-control" id="categories" name="categories[]">
                    @foreach($categories as $categori)
                        <option value="{{$categori->id}}" @if(in_array($categori->id, $arrCat)) selected @endif>{{$categori->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Редактировать статью</button>
        </form>
    </main>
@endsection