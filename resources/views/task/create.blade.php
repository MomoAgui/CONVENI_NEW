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
              

           <form action="/task/register" method="post" enctype="multipart/form-data">
                @csrf
                商品名:<input name="name" value="{{ old('name') }}"><br>
                画像：<input type="file" name="image"> <br>
                特定原材料:<input name="allergy"　value="{{ old('allergy')}}" ><br>
                熱量:<input name="kcal" value="{{ old('kcal')}}" ><br>
                糖質:<input name="suger" value="{{ old('sugaer')}}"><br>
                食塩相当量：<input name="solt" value="{{ old('solt')}}"><br>
                備考：<textarea name="detail" type="text" value="{{ old('detail')}}"></textarea><br>
                
               
                どのコンビニの商品を登録しますか？:
                   
                 セブンイレブン:<label><input name="conveni_num" type="checkbox"　value="1"></label>
                ファミリーマート:<label><input name="conveni_num" type="checkbox" value="2"></label>
                ローソン:<label><input name="conveni_num" type="checkbox" value="3"></label>
               <br>
                <button>新しい食材を登録する</button><br>
            </form>

        <hr>
        <menu label="リンク">
        <a href="/top">topページに戻る</a><br>
        <a href="/logout">ログアウト</a><br>
        </menu>
@endsection