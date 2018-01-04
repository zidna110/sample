@extends('layouts.default')
@section('title', '登陆')

@section('content')
    <div class="panel-body">
        @include('shared._errors')

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">邮箱:</label>
                <input type="text" name="email" class="form-control" value="{{ old('email') }}">
            </div>


            <div class="form-group">
                <label for="email">密码:</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>

            <div class="checkbox">
                <label><input type="checkbox" name="remember">记住我</label>
            </div>

            <button type="submite" class="btn btn-primary">提交</button>
        </form>

        <hr>

        <p>还没账号？<a href="{{ route('signup') }}">现在注册!</a></p>
    </div>
@stop