@extends('layout')
@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/seven.css')}}">
{{-- メインコンテンツ --}}
@section('contets')

<div class="main">
      <header>
        <img src="/img/seven_icon.png" width="70" height="45" >
        <h1>主食系</h1>
            <a href="{{route('/task/edit',['seven_user_id'=>$task->id])}}">編集</a>
            <a href=/task/create">新しい食材を登録する</a>
      </header>

             @if (session('front.sevenice_delete_success') == true)
                タスクを削除しました<br>
            @endif
            @if (session('front.sevenice_completed_failure') == true)
            タスクの完了に失敗しました....<br>
            @endif


 <h2>[無添加]　北海道産小麦の金の生食パン</h2><br>
        <img src="/img/seven/kinpan.png" width="300" height="200"><br>
        　　　<p class="text">
               　　　 特定原材料：乳・小麦<br>
               　　　 熱量：269kcal<br>
               　　　 糖質：45.0g<br>
              　　　  食塩相当量：1.0g<br>
                <br>
                </br>
　　　　　　　</p>


　　　　<h2>[無添加]　金のマルゲリータ</h2><br>
        <img src="/img/seven/kinmaru.png" width="300" height="200"><br>
    　<p class="text">
          特定原材料：乳・小麦・卵<br>
          熱量：212kcal<br>
              糖質：26.9g<br>
              食塩相当量：1.1g<br>
               <br>
                </br>
　　　　　　　</p>


        <h2>[無添加]  さばの塩焼</h2><br>
        <img src="/img/seven/sevensaba.png" width="300" height="200"><br>
        <p class="text">
　　           　　　   　　   熱量：275kcal<br>
              　　　　　　　　  糖質：0.1g<br>
              　　　　　　　　  食塩相当量：1.4g/枚<br>
               　　　　　　　　 備考：塩分高めなので月齢に応じて少量に<br>
              　  </br>
　　　　</p>
　　<br>
　　<br>

　  　<p class="0">＊ここからは低糖質・塩分低めの食べ物を抜粋しています　無添加ではありません＊</p>
　　　　<h2>あん食パン</h2><br>
        <img src="/img/seven/sevenan.png" width="300" height="200"><br>
        <p class="text">
                特定原材料：乳・小麦<br>
                熱量：164kcal<br>
                糖質：31.8g<br>
                食塩相当量：0.40g<br>
                <br>
                </br>
　　　　</p>


　　　　<h2>北海道産　昆布おにぎり</h2><br>
        <img src="/img/seven/sevenkonbu.png" width="300" height="200"><br>
        <p class="text">
                特定原材料：小麦<br>
                熱量：181kcal<br>
                糖質：38.3g<br>
                食塩相当量：0.63g<br>
                <br>
                </br>
　　　　</p>


　　　　<h2>赤飯　おこわ</h2><br>
        <img src="/img/seven/sevenokowa.png" width="300" height="200"><br>
            <p class="text">
                    特定原材料：なし<br>
                    熱量：227kcal<br>
                    糖質：48.7g<br>
                    食塩相当量：0.73g<br>
                    備考：豆が大きい場合はのどに<br>詰まらないよう十分注意 <br>
                </br>
　　　    　</p>



　　　　　<h2>米粉を使ったつぶあんドーナツ　きなこ</h2><br>
        <img src="/img/seven/sevenkomeko.png" width="300" height="200"><br>
        <p class="text">
                特定原材料：卵・乳・小麦<br>
                熱量：300kcal<br>
                糖質：38.8g<br>
                食塩相当量：0.47g<br> <br>
                </br>
　　　　</p>


　　　　　<h2>オールドファッション</h2><br>

        <p class="text">
                特定原材料：卵・乳・小麦<br>
                熱量：315kcal<br>
                糖質：28.4g<br>
                食塩相当量：0.36g<br> <br>
                </br>
　　　　</p>

　　　　<h2>お店で蒸した　3種の北海道チーズ蒸しケーキ</h2><br>
        <img src="/img/seven/cheepan.png" width="300" height="200"><br>
        <p class="text">
               特定原材料：卵・乳・小麦・大豆<br>
            熱量：169kcal<br>
               糖質：25.4g<br>
               食塩相当：0.3g<br>
               備考：お店で蒸したシリーズ総3種の中で<br>最も糖質が低い（塩分は3種同等） <br>
                </br>
　　　　</p>
<section>
　<table class="row">

　  @foreach ($tasks as $task)

            <tr><th>商品名:</th><td>{{ $task->seven_name }}</td></tr>
            <tr><th>画像：</th><td> <img src="{{ asset($task->path) }}"></td></tr>
            <tr><th>特定原材料:</th> <td>{{ $task->seven_allergy }}</td></tr>
            <tr><th>熱量:</th>  <td>{{ $task->seven_kcal }}</td></tr>
            <tr><th>糖質:</th><td>{{ $task->seven_suger }}</td></tr>
        　　<tr><th>食塩相当量:</th><td>{{ $task->seven_solt}}</td></tr>
        　　<tr><th>備考:</th> <td>{{$task->seven_detail}}</td></tr>
    @endforeach

    </table><br>


</section>
 <button><a href="/top">前に戻る</a></button><br>

</div>
@endsection