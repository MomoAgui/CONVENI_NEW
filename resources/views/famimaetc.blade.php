@extends('layout')

@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/famima.css')}}">

{{-- メインコンテンツ --}}
@section('contets')

<div class="main">
      <header>
        <img src="/img/famima_icon.png" width="70" height="45" >
        <h1>主食系</h1>

      </header>
<div class="main">
       
       　<h2>[無添加]ほっけの塩焼き</h2><br>
       <img src="/img/famima/hoke.png" width="300" height="200"><br>
        <p class="text">
                熱量：153kcal<br>
                糖質：7.7g<br>
                食塩相当量：2.46g<br>
                備考：内容量240gなので塩分考慮して半分以下程度がおすすめ<br>
                <br>
                </br>
　　　　</p>


       　<h2>[無添加]モッツァレラのさけるチーズプレーン 　</h2><br>
        <img src="/img/png" width="300" height="200"><br>
        <p class="text">
                熱量：73kcal<br>
                糖質：0.8g<br>
                食塩相当量：0.1g<br>
               <br>
                <br>
                </br>
　　　　</p>


         　<h2>[無添加]国産鶏肉のミートボール</h2><br>
        <img src="/img/png" width="300" height="200"><br>
        <p class="text">
                特定原材料：小麦・卵・乳・大豆・鶏肉<br>
                熱量：179kcal<br>
                糖質：13.6g<br>
                食塩相当量：1.4g<br>
              
                <br>
                </br>
　　　　</p>
       




        <h2>銀鮭の塩焼き</h2><br>
        <img src="/img/famima/sake.png" width="300" height="200"><br>
        <p class="text">
                原材料：銀鮭（チリ産）、食塩、砂糖、米酢、魚醤、食用植物油脂、（一部にさけ、大豆を含む）<br>
                アレルギー：さけ、大豆<br>
                内容量：1切れ60g<br>
                食塩相当量：0.7g /切<br>
                目安量：9か月ごろ～1歳ごろは約1/4切れ程度<br>
                1~3歳ごろは約1/2~2/3切れ程度</br>
　　　　</p>

       　<h2>7種具材の豚汁</h2><br>
        <img src="/img/famima/tonnziru.png" width="300" height="200"><br>
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