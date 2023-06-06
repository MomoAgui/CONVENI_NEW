@extends('layout')

@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/famima.css')}}">

{{-- メインコンテンツ --}}
@section('contets')

<div class="main">
      <header>
        <img src="/img/famima_icon.png" width="70" height="45" >
        <h1>主食系</h1>
           <a href=/task/create>新しい食材を登録する</a>

      </header>

       

        　<h2>[無添加]　小麦香る食パン</h2><br>
        <img src="/img/famima/syokupan.png" width="250" height="200"><br>
        <p class="text">
                <br>
                <br>
               <br>
               <br>
                <br>
                </br>
　　　　</p>
　　　　



        　<h2></h2><br>
        <img src="/img/png" width="300" height="200"><br>
        <p class="text">
                <br>
                <br>
               <br>
               <br>
                <br>
                </br>
　　　　</p>


        　<h2>/h2><br>
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