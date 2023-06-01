@extends('layout')

@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/index.css')}}">
{{-- メインコンテンツ --}}
@section('contets')


<div class="main">
    <img src="/img/login.png" alt="NOIMAGE" width="700" height="500"><br><br>

<div class="main-contets">
        <h1>LOGIN</h1>
         @if (session('front.user_register_success') == true)
                ユーザーを登録しました<br>
            @endif
        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif

      <form class="login-form" action="/login" method="post">
         @csrf
            <input name="email" type="text" placeholder="email"/ value="{{old('email')}}"><br><br>
            <input name="password" type="password" placeholder="password"/><br><br>
            <button class="btn">login</button>
    </form><br>
        <a href="/user/register" class="btn btn-border">会員登録まだのかたはこちら</a><br>
</div>
</div>
@endsection