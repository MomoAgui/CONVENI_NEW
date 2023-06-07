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
　　　　<section>
　<table class="row">

　  @foreach ($tasks as $task)

            <tr><th>商品名:</th><td>{{ $task->name }}</td></tr>
            <tr><th>画像：</th><td> <img src="{{ asset($task->path) }}"></td></tr>
            <tr><th>特定原材料:</th> <td>{{ $task->allergy }}</td></tr>
            <tr><th>熱量:</th>  <td>{{ $task->kcal }}</td></tr>
            <tr><th>糖質:</th><td>{{ $task->suger }}</td></tr>
        　　<tr><th>食塩相当量:</th><td>{{ $task->solt}}</td></tr>
        　　<tr><th>備考:</th> <td>{{$task->detail}}</td></tr>
    @endforeach

    </table><br>


</section>
        
       <button><a href="/top">前に戻る</a></button><br>

</div>



@endsection