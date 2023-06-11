@extends('layout')
@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/create.css')}}">
{{-- タイトル --}}
@section('title')(新規登録画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
   <div class="main">
        <h1>新規商品登録</h1>
       
        
     
         @if (session('front.task_register_success') == true)
                商品を登録しました！！<br>
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
            
                
           <form action="/task/register" method="post" enctype="multipart/form-data"><br>
                @csrf
                商品名<span>*</span>:<input name="name" value="{{ old('name') }}"><br>
                画像<span>*</span>：<input type="file" name="image" value="{{ old('image')}}"> <br>
                特定原材料<span>*</span>:<input name="allergy"　value="{{ old('allergy')}}" ><br>
                熱量<span>*</span>:<input name="kcal" value="{{ old('kcal')}}" ><br>
                糖質<span>*</span>:<input name="suger" value="{{ old('sugaer')}}"><br>
                食塩相当量<span>*</span>：<input name="solt" value="{{ old('solt')}}"><br>
                備考<span>*</span>：<textarea name="detail" type="text" value="{{ old('detail')}}"></textarea><br>


                コンビニ選択<span>*</span>:

                 セブンイレブン:<label><input name="conveni_num" type="radio" value="1"></label>
                ファミリーマート:<label><input name="conveni_num" type="radio" value="2"></label>
                ローソン:<label><input name="conveni_num" type="radio" value="3"></label>
               <br>
        </div>
                <button>新しい食材を登録する</button><br>
            </form>
 
        <hr>
        <menu label="リンク">
        <a href="/top">topページに戻る</a><br>
        <a href="/logout">ログアウト</a><br>
        </menu>
    
</div>
@endsection