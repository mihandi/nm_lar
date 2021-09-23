@extends('layouts.main-layout')

@section('title', 'Page')

@section('content')
    <div class="error-box">
        <div class="error-body text-center">
            <h1 class="text-danger">404</h1>
            <h3>Страница не найдена!</h3>
            <p class="text-muted m-t-30 m-b-30">Cтраница уже удалена либо ещё не создана </p>
            <a href="/" class="btn btn-danger btn-rounded m-b-40">Вернуться Домой</a> </div>
    </div>
@endsection()
