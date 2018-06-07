@extends('layouts.admin')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h2>Добавление категории</h2>
        <form method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Название категории</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Название категории">
            </div>
            <div class="form-group">
                <label>Описание категории</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Создать категорию</button>
        </form>
    </main>
@endsection