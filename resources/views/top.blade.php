@extends('layout')


@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/top.css')}}">

@section('contets')
 <img src="/img/illust-top.png" width="100%">

<header>
    <div class="img">
       <img class="img_left" src="/img/toplogo.png" width="150" heigth="100">
       <a href="/user/index"><img class="img_right" src="/img/user_icon.png" width="150" height="100"></a>
    </div>
</header>



<div class="main-visual">
    

       <img src="/img/top1.png" width="600" height="350">
       <p>Everyone Smile</p>
       <p>育児をもっと気軽に</p>
    

</div>


            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif



   <div class="main-contets">
    　  @if (session('front.task_delete_success') == true)
                商品を削除しました！！<br>
        @endif

      <ul>
         <li>
             <label for="menu1"><img src="/img/seven_icon.png" width="150" height="100" ></label>
              <input type="checkbox" id="menu1">

         <div class="dropdown">
               <p><a href="/sevenice">▷▷無添加・その他</a></p><br>
                <a href=/task/create>▷▷新しい商品を登録する</a><br><br>
              
        @foreach($seven_lists as $task)
             <tr><td>{{ $task->name }}</td></tr> 
           
             <td><tr><a href="{{ route('edit', ['task_id' => $task->id]) }}">編集</a></td></tr><br>
        @endforeach       
             
         </div>
         </li>


        　<li>
                <label for="menu2"><img src="/img/famima_icon.png" width="150" height="100"></label>
                 <input type="checkbox" id="menu2">
         <div class="dropdown">
                 <p><a href="/famimaice">▷▷無添加・その他</a></p><br>
                
                  <a href=/task/create>▷▷新しい商品を登録する</a><br><br>
     @foreach($famima_lists as $task)
             <tr><td>{{ $task->name }}</td></tr> 
           
             <td><tr><a href="{{ route('edit', ['task_id' => $task->id]) }}">編集</a></td></tr><br>
        @endforeach       
               
         
                 
         </div>
          </li>

          <li>
                <label for="menu3"><img src="/img/lawson_icon.png" width="150" height="100"></label>
                <input type="checkbox" id="menu3">
            <div class="dropdown">
                  <p><a href="/lawsonice">▷▷ 無添加・その他 </a></p><br>
                 
                   <a href=/task/create>▷▷新しい商品を登録する</a><br><br>
        @foreach($lawson_lists as $task)
             <tr><td>{{ $task->name }}</td></tr> 
     
             <td><tr><a href="{{ route('edit', ['task_id' => $task->id]) }}">編集</a></td></tr><br>
        @endforeach       
          
            </div>
          </li>
      </ul>



   </div>
</div>

<br>
<br>
<br>



<footer>

あっご飯の作り置きがない！！や、<br>
今日は疲れたなぁ、と思ったときに<br>
これからご飯の支度する元気は絞りだせないときってあると思います<br>
私はよくあります<br>
そんな時、気軽にコンビニで食べれる食材があると嬉しいですよね<br>
<br>
でもコンビニって「添加物の塊」というパワーワードがあるように<br>
安心してサクッと買えずに品質表示や塩分濃度確認したり<br>
ネットで検索したり・・・と気軽になんて買えませんよね<br>
コンビニで済ませたら手抜きなのか？？そんな後ろめたさと日々葛藤<br>
周りとは比べずにもっと気軽に育児を楽しみたいと思いました<br>
<br>
そんな私の気持ちをこのサイトに込めました<br>




</footer>

 <img src="/img/illust-bottom.png" width="100%">
 
 

 
   アクセス数<span class="h1 text-danger">{{$count}}</span><br>

@endsection


