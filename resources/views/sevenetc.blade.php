@extends('layout')
@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/seven.css')}}">
{{-- メインコンテンツ --}}
@section('contets')

<div class="main">

        <img src="/img/seven_icon.png" width="150" height="100" ><h1>タンパク質・ビタミンその他/h1><br>


        <h2>[無添加] のむヨーグルトプレーン 900g/h2><br>
        <img src="/img/seven/nomu.png" width="300" height="200"><br>
        <p class="text">
        　　　特定原材料：乳　　<br>
            　熱量：124kcal<br>
               糖質：25.0g<br>
               食塩相当量：0.2g<br>
                <br>
                </br>
　　　　</p>

　　　　<h2>[無添加]  国産木綿　とうふ</h2><br>
        <img src="/img/png" width="300" height="200"><br>
        <p class="text">
                　特定原材料：大豆　　<br>
            　熱量：99kcal<br>
               糖質：3.0g<br>
               食塩相当量：0g<br>
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