@extends('layout')

@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/user.index.css')}}">
@section('contets')

<header>
    <button><a href="/top">前に戻る</a></button>

</header>


<div class="main">


<section>
   <h1>会員情報</h1><br>
   <table class="row">
             @foreach($users as $user)
               <tr><th>お名前：</th><td>{{ $user->name }}</td></tr>
                <tr><th>お誕生日：</th><td>{{ $user->birth_year.'-'.$user->birth_month.'-'.$user->birth_day.'' }}</td></tr>
                <tr><th>登録日：</th><td>{{ $user->created_at }}</td></tr>




        @endforeach
           </table><br>

    <table border="1" class="sio">
     参考目塩分安量
     <tr><th>  6ヶ月-11ヶ月  </th><td>1.5g未満</td></tr>
     <tr><th>1歳-2歳　男子  </th><td>3.0g未満</td></tr>
     <tr><th>1歳-2歳　女子  </th><td>3.5g未満</td></tr>
     <tr><th>3歳-5歳  男子  </th><td>4.0g未満</td></tr>
     <tr><th>3歳-5歳　女子  </th><td>4.5g未満</td></tr>
    </table>

   <button class="btn"><a href="/logout">Logout</button></a>
   </section>
</div>
@endsection