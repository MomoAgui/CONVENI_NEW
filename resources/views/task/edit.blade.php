@extends('layout')

{{-- タイトル --}}
@section('title')(編集画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
        <h1>編集画面</h1>
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
           <form action="{{ route('edit_save', ['task_id' => $task->id]) }}" method="post">
                @csrf
                @method("PUT")
                商品名:<input name="name" value="{{ old('name') }}"><br>
                特定原材料:<input name="allergy"　value="{{ old('allergy')}}" ><br>
                熱量:<input name="kcal" value="{{ old('kcal')}}" ><br>
                糖質:<input name="suger" value="{{ old('sugaer')}}"><br>
                食塩相当量：<input name="solt" value="{{ old('solt')}}"><br>
                備考：<textarea name="detail" type="text" value="{{ old('detail')}}"></textarea><br>

                  <button>編集する</button>
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
@endsection