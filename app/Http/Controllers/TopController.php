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
    public function ice(){

        return view('sevenice');
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
   
  
    public function index(){

      // 一覧の取得
        $list=UserModel::get();


        $list = UserModel::where('id',Auth::id())->get();


        return view('user.index',['users'=>$list]);
    }

}