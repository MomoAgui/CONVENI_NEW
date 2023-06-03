<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRegisterPost;
use Illuminate\Support\Facades\Auth;
use App\Models\Task as TaskModel;
use Illuminate\Support\Facades\DB;
use App\Models\Image as ImageModel;


use Symfony\Component\HttpFoundation\StreamedResponse;

use Illuminate\Http\Request;



class TaskController extends Controller
{
     /**
     * 一覧用の Illuminate\Database\Eloquent\Builder インスタンスの取得
     */
    protected function getListBuilder()
    {
        return TaskModel::where('user_id', Auth::id())
                     ->orderBy('created_at');

    }
      public function ice(){
         $task=TaskModel::get();
         $task = TaskModel::where('user_id',Auth::id())->get();
         

         return view('sevenice', ['tasks' => $task]);

    }
    public function sevenetc(){
        return view('sevenetc');
    }
    public function all(){
        return view('sevenall');
    }
    public function famiice(){
        return view('famimaice');
    }
    public function famimaetc(){
        return view('famimaetc');
    }
    public function famiall(){
        return view('famimaall');
    }
     public function lawsonice(){
        return view('lawsonice');
    }
     public function lawsonetc(){
        return view('lawsonetc');
    }
     public function lawsonall(){
        return view('lawsonall');
    }


    /**
     *
     * 商品の登録画面を表示
     *
     * */

    public function create(){

          // 一覧の取得
        $task = TaskModel::where('user_id',Auth::id())->get();
        //
        return view('task.create', ['task' => $task]);

    }
    public function upload(){
    return view('upload');
}


    /**
     * タスクの新規登録
     */
    public function register(TaskRegisterPost $request)
    {
        // validate済みのデータの取得
        $datum = $request->validated();
        //
        //$user = Auth::user();
        //$id = Auth::id();
        //var_dump($datum, $user, $id); exit;

        // user_id の追加
        $datum['user_id'] = Auth::id();

        // テーブルへのINSERT
        try {
             TaskModel::create($datum);
        } catch(\Throwable $e) {
            // XXX 本当はログに書く等の処理をする。今回は一端「出力する」だけ
            echo $e->getMessage();
            exit;
        }

        // タスク登録成功
        $request->session()->flash('front.task_register_success', true);

        //
        return redirect('/task/create');
    }

    /**
     * タスクの編集画面表示
     */
    public function edit($task_id)
    {
        // task_idのレコードを取得する(引数で取得)
        // テンプレートに「取得したレコード」の情報を渡す
        return $this->singleTaskRender($task_id, 'task.edit');
    }

    /**
     * 「単一のタスク」Modelの取得
     */
    protected function getTaskModel($task_id)
    {
        // task_idのレコードを取得する
        $task = TaskModel::find($task_id);
        if ($task === null) {
            return null;
        }
        // 本人以外のタスクならNGとする
        if ($task->user_id !== Auth::id()) {
            return null;
        }
        //
        return $task;
    }

    /**
     * 「単一のタスク」の表示
     */
    protected function singleTaskRender($task_id, $template_name)
    {
        // task_idのレコードを取得する
        $task = $this->getTaskModel($task_id);
        if ($task === null) {
            return redirect('/task/list');
        }

        // テンプレートに「取得したレコード」の情報を渡す
        return view($template_name, ['tasks' => $task]);
    }

    /**
     * タスクの編集処理
     */
    public function editSave(TaskRegisterPost $request, $task_id)
    {
        // formからの情報を取得する(validate済みのデータの取得)
        $datum = $request->validated();

        // task_idのレコードを取得する
        $task = $this->getTaskModel($task_id);
        if ($task === null) {
            return redirect('/sevenice');
        }

        // レコードの内容をUPDATEする
        $task->name = $datum['name'];
        $task->period = $datum['period'];
        $task->detail = $datum['detail'];
        $task->priority = $datum['priority'];

        // レコードを更新
        $task->save();

        // タスク編集成功
        $request->session()->flash('front.task_edit_success', true);
        // 詳細閲覧画面にリダイレクトする
        return redirect(route('detail', ['task_id' => $task->id]));
    }
    /**
     * 削除処理
     */
    public function delete(Request $request, $task_id)
    {
        // task_idのレコードを取得する
        $task = $this->getTaskModel($task_id);

        // タスクを削除する
        if ($task !== null) {
            $task->delete();
            $request->session()->flash('front.task_delete_success', true);
        }

        // 一覧に遷移する
        return redirect('/sevenice');
    }


}