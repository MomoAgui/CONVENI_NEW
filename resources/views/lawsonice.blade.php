@extends('layout')
@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/lawson.css')}}">
{{-- メインコンテンツ --}}
@section('contets')

<div class="main">
 <header>
        <img src="/img/lawson_icon.png" width="70" height="45" >
        <h1>無添加・その他</h1><br>
          

      </header>

<section>
　<table class="row">

　  @foreach ($tasks as $task)

            <tr><th><h2>{{ $task->name }}</h2></th><td></td></tr>
            <tr> <th><img src="{{ asset($task->path) }}" width="300" height="200"  ></th></tr>
            <tr><th>特定原材料:&emsp; {{ $task->allergy }}</th></tr>
            <tr><th>熱量:&emsp;&emsp;{{ $task->kcal }}kcal</th>  <td></td></tr>
            <tr><th>糖質:&emsp;&emsp;{{ $task->suger }}g</th><td></td></tr>
        　　<tr><th>食塩相当量:&emsp;{{ $task->solt}}</th><td></td></tr>
        　　<tr><th>備考:&emsp;{{$task->detail}}</th> <td></td></tr>
        　　<tr><th><br><br><br><br><br><br></th></tr>
    @endforeach

    </table><br>


</section>

 <button><a href="/top">前に戻る</a></button><br>

</div>
@endsection