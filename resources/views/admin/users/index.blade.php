@extends('layouts.admin')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h2>Пользователи</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Имя</th>
                <th scope="col">Роль</th>
                <th scope="col">Дата регистрации</th></tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>@if($user->IsAdmin) Администратор @else Пользователь @endif </td>
                    <td>{{$user->created_at->format('d.m.Y H:i')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection