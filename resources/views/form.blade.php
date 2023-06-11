@extends('layout')
@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/form.css')}}">
{{-- タイトル --}}
@section('title')(新規登録画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
   <div class="main">
        <h1>お問い合わせ</h1>
       
        
     
         @if (session('front.task_register_success') == true)
                送信しました<br>
            @endif
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
　　<div class="main-contets">
            <span>*</span>は必須項目です<br>
            「備考」欄に特に記載がなければ「なし」で送信お願いします<br>
            
                
           <form action="/form/register" method="post"><br>
                @csrf
                お名前<spsn>*</spsn>：<input name="name" type="text" value="{{ old('name') }}"><br>
                email<span>*</span>:<input name="email" type="email" value="{{ old('email')}}"><br>
                お問い合わせ内容<spasn>*</spasn>:<textarea name="messgae"></textarea>
                

        </div>
                <button>送信録する</button><br>
            </form>
 
        <hr>
        <menu label="リンク">
        <a href="/top">topページに戻る</a><br>
        <a href="/logout">ログアウト</a><br>
        </menu>
    
</div>
@endsection