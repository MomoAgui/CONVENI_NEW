@extends('layout')

@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/index.css')}}">
{{-- メインコンテンツ --}}
@section('contets')


<div class="main">
    <img src="/img/login.png" alt="NOIMAGE" width="700" height="500">
        <h1>ログイン</h1>
         @if (session('front.user_register_success') == true)
                ユーザーを登録しました！！<br>
            @endif
        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif
        <form action="/login" method="post">
            @csrf
            email：<input name="email" value="{{ old('email') }}"><br>
            パスワード：<input  name="password" type="password"><br>
            <button>ログインする</button>
        </form>
        <a href="/user/register">会員登録</a><br>
</div>
@endsection