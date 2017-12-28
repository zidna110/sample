@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
        你现在看到的是<a href="https://fsdub.com/books/laravel-essential-training-5.1">Laravel入门教程</a>的项目
        </p>
        <p>
            一切将从这里开始
        </p>
        <p>
            <a class ="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>
@stop