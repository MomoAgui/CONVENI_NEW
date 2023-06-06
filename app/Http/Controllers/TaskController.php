<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRegisterPost;
use Illuminate\Support\Facades\Auth;
use App\Models\Task as TaskModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Image as ImageModel;



use Symfony\Component\HttpFoundation\StreamedResponse;

      


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

          $task =TaskModel::where('user_id',Auth::id())->get();

        return view('sevenice',['tasks'=>$task]);
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
        
        return view('task.create');
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
        
         // ディレクトリ名
        $dir = 'sample';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);
       



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
    
   

}