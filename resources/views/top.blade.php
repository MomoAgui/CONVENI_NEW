@extends('layout')

@section('contets')


<header>
    <img src="/img/user_icon.png" width="100" height:"50"></a><br>

</header>


<div class="main-visual">
     <h1>コンビニでこどもご飯</h1>

   <div class="main-contets">

      <ul>
         <li>
             <label for="menu1"><img src="/img/seven_icon.png" width="200" height:"100" ></label>
              <input type="checkbox" id="menu1">

         <div class="dropdown">
               <p><a href="/seven_ice">冷蔵系</a></p><br>
               <p><a href="/seven_bread">パン</a></p><br>
               <p><a href="/seven_all">すべて</a></p><br>
         </div>
         </li>


        　<li>
                <label for="menu2"><img src="/img/famima_icon.png" width="200" height:"100"></label>
                 <input type="checkbox" id="menu2">
         <div class="dropdown">
                 <p><a href="/famima_ice">冷蔵系</a></p><br>
                 <p><a href="/famima_bread">パン</a></p><br>
                 <p><a href="/famima_all">すべて</a></p><br>
         </div>
          </li>

          <li>
                　<label for="menu3"><img src="/img/lawson_icon.png" width="200" height:"100"></label>
                  <input type="checkbox" id="menu3">
            <div class="dropdown">
                  <p><a href="/lawson_ice">冷蔵系</a></p><br>
                  <p><a href="/lawson_bread">パン</a></p><br>
                  <p><a href="/lawson_all">すべて</a></p><br>
            </div>
          </li>
      </ul>


      </div>
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
<br>
そんな私の気持ちをこのアプリに込めました<br>

</footer>


@endsection
