@extends('layout')

@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/user.register.css')}}">
@section('title')@endsection


@section('contets')
<header>
    <button><a href="/top">前に戻る</a></button>
    <p>Sign up</p>
</header>

<div class="main">
   
      @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif
        <form action="/user/register" method="post">
            @csrf
        <input name="name" type="text" placeholder="Name"><br>
        <input name="email" type="text" placeholder="Email"/ value="{{old('email')}}"><br>
        <input name="password" type="password" placeholder="Password"/><br>
        <input name="password_confirmation" type="password" placeholder="Password again">
        @livewire('birthday')<br>

         <button class="btn">登録する</button><br>
        </form>
</div>        
@endsection
