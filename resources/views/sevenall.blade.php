@extends('layout')
@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/seven.css')}}">
{{-- メインコンテンツ --}}
@section('contets')

<div class="main">
       
        <img src="/img/seven_icon.png" width="150" height="100" ><h1>すべて</h1><br>


        <h2>チーズ/h2><br>
        <img src="/img/png" width="300" height="200"><br>
        <p class="text">
        　　　　　<br>
                <br>
               <br>
               <br>
                <br>
                </br>
　　　　</p>
　　　　
　　　　<h2>豆腐</h2><br>
        <img src="/img/png" width="300" height="200"><br>
        <p class="text">
                <br>
                <br>
               <br>
               <br>
                <br>
                </br>
　　　　</p>
　　　　
　　　　
　　　　<h2>ゆで卵</h2><br>
        <img src="/img/png" width="300" height="200"><br>
        <p class="text">
                <br>
                <br>
               <br>
               <br>
                <br>
                </br>
　　　　</p>
　　　　
　　　　
　　　　　<h2>野菜スムージー</h2><br>
        <img src="/img/png" width="300" height="200"><br>
        <p class="text">
                <br>
                <br>
               <br>
               <br>
                <br>
                </br>
　　　　</p>


 <button><a href="/top">前に戻る</a></button><br>

</div>
@endsection