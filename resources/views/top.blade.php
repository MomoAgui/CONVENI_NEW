@extends('layout')


@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/top.css')}}">

@section('contets')


<header>
    <div class="img">
       <img class="img_left" src="/img/toplogo.png" width="150" heigth="100">
       <a href="/user/index"><img class="img_right" src="/img/user_icon.png" width="150" height="100"></a>
    </div>
</header>



<div class="main-visual">
     <img src="/img/illust-top.png">

       <img src="/img/top1.png" width="600" height="350">
       <p>Everyone Smile</p>
       <p>育児をもっと気軽に</p>
     <img src="/img/illust-bottom.png">

</div>



   <div class="main-contets">

      <ul>
         <li>
             <label for="menu1"><img src="/img/seven_icon.png" width="150" height="100" ></label>
              <input type="checkbox" id="menu1">

         <div class="dropdown">
               <p><a href="/sevenice">主食系</a></p><br>
               <p><a href="/sevenetc">タンパク質・ビタミンその他</a></a></p><br>
               <p><a href="/sevenall">すべて</a></p><br>
             
         </div>
         </li>


        　<li>
                <label for="menu2"><img src="/img/famima_icon.png" width="150" height="100"></label>
                 <input type="checkbox" id="menu2">
         <div class="dropdown">
                 <p><a href="/famimaice">主食系</a></p><br>
                 <p><a href="/famimaetc">タンパク質・ビタミンその他</a></p><br>
                 <p><a href="/famimaall">すべて</a></p><br>
                 
         </div>
          </li>

          <li>
                <label for="menu3"><img src="/img/lawson_icon.png" width="150" height="100"></label>
                <input type="checkbox" id="menu3">
            <div class="dropdown">
                  <p><a href="/lawsonice">主食系</a></p><br>
                  <p><a href="/lawsonetc">タンパク質・ビタミンその他</a></p><br>
                  <p><a href="/lawsonall">すべて</a></p><br>
                
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
コンビニで済ませたら手抜きなのか？？なんて愚問<br>
周りとは比べずにもっと気軽に育児を楽しみたいと思いました<br>
<br>
そんな私の気持ちをこのサイトに込めました<br>

</footer>


@endsection


