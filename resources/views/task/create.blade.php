@extends('layout')

{{-- タイトル --}}
@section('title')(新規登録画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
        <h1>新規食材登録</h1>
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
              画像：<form method="POST" action="/task/create" enctype="multipart/form-data">
                          @csrf
                          <input type="file" name="image">
                          <button>アップロード</button>
                      </form>

           <form action="/task/register" method="post">
                @csrf
                商品名:<input name="name" value="{{ old('name') }}"><br>
                特定原材料:<input name="allergy"　value="{{ old('allergy')}}" ><br>
                熱量:<input name="kcal" value="{{ old('kcal')}}" ><br>
                糖質:<input name="suger" value="{{ old('sugaer')}}"><br>
                食塩相当量：<input name="solt" value="{{ old('solt')}}"><br>
                備考：<textarea name="detail" type="text" value="{{ old('detail')}}"></textarea><br>
                <button>新しい食材を登録する</button>
            </form>

        <hr>
        <menu label="リンク">
        <a href="/sevenice">セブン主食ページに戻る</a><br>
        <a href="/logout">ログアウト</a><br>
        </menu>
@endsection