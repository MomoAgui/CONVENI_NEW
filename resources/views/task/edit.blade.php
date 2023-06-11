@extends('layout')
@yield('link')<link rel="stylesheet" href="{{secure_asset('/CSS/edit.css')}}">
{{-- タイトル --}}
@section('title')(編集画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
<div class="main">
        <h1>編集画面</h1>
    　  @if (session('front.task_edit_success') == true)
            商品を編集しました！！<br>
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
            「備考」欄に特に記載がなければ「なし」で送信お願いします<br><br><br>
            
            
           <form action="{{ route('edit_save', ['task_id' => $task->id]) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method("PUT")
                商品名<span>*</span>:<input name="name" value="{{ old('name') ?? $task->name}}"><br>
                画像<span>*</span>：<input type="file" name="image" value="{{old('image') ?? $task->image}}"> <br>
                特定原材料<span>*</span>:<input name="allergy"　value="{{ old('allergy') ?? $task->allergy}}" ><br>
                熱量<span>*</span>:<input name="kcal" value="{{ old('kcal') ?? $task->kcal}}" ><br>
                糖質<span>*</span>:<input name="suger" value="{{ old('sugaer') ?? $task->suger}}"><br>
                食塩相当量<span>*</span>：<input name="solt" value="{{ old('solt') ?? $task->solt}}"><br>
                備考<span>*</span>：<textarea name="detail" type="text" value="{{ old('detail') ?? $task->detail}}"></textarea><br>
                
                 コンビニ選択<span>*</span>:

                 セブンイレブン:<label><input name="conveni_num" type="radio" value="1"></label>
                ファミリーマート:<label><input name="conveni_num" type="radio" value="2"></label>
                ローソン:<label><input name="conveni_num" type="radio" value="3"></label>
               <br>
   </div>
                  <button>編集する</button>
            </form>      
                <hr>
        <form action="{{ route('delete', ['task_id' => $task->id]) }}" method="post">
            @csrf
            @method("DELETE")
            <button onclick='return confirm("この商品を削除します(削除したら戻せません)。よろしいですか？");'>商品を削除する</button>
        </form>
        <hr>
        <menu label="リンク">
        <a href="/top">topページに戻る</a><br>
        <a href="/logout">ログアウト</a><br>
        </menu>
    </div>
</div>
@endsection