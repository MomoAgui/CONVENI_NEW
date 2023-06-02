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

}