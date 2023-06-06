<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User as UserModel;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * トップページ を表示する
     *
     * @return \Illuminate\View\View
     */
    public function top()
    {
        return view('top');
    }
  
    public function index(){

      // 一覧の取得
        $list=UserModel::get();


        $list = UserModel::where('id',Auth::id())->get();


        return view('user.index',['users'=>$list]);
    }
    /**
     * タスクの詳細閲覧
     */
    public function detail($task_id)
    {
        var_dump($task_id); exit;
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
            return redirect('/top');
        }

        // テンプレートに「取得したレコード」の情報を渡す
        return view($template_name, ['task' => $task]);
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
            return redirect('/top');
        }

        // レコードの内容をUPDATEする
        $task->name = $datum['name'];
        $task->allergy = $datum['allergy'];
        $task->kcal = $datum['kcal'];
        $task->suger = $datum['suger'];
        $task->solt = $datum['solt'];
        $task->detail = $datum['detail'];

        // レコードを更新
        $task->save();

        // タスク編集成功
        $request->session()->flash('front.task_edit_success', true);
        // 詳細閲覧画面にリダイレクトする
        return redirect(route('top', ['task_id' => $task->id]));
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
        return redirect('/top');
    }



}