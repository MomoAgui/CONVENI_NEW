@extends('layout')

{{-- タイトル --}}
@section('title')(詳細画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
        <h1>タスク詳細閲覧</h1>
        @if (session('front.task_edit_success') == true)
            タスクを編集しました！！<br>
        @endif

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
            <button onclick='return confirm("このタスクを削除します(削除したら戻せません)。よろしいですか？");'>タスクを削除する</button>
        </form>
        <hr>
        <menu label="リンク">
        <a href="/task/list">タスク一覧</a><br>
        <a href="/logout">ログアウト</a><br>
        </menu>
@endsection