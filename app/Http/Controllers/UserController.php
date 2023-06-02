<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterPost;
use Illuminate\Support\Facades\Hash;
use App\Models\User as UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 登録画面 を表示する
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('user./register');
    }
    /**
     * 入力値を受け取る
     *
     * */

     public function register(UserRegisterPost $request){

          // validate済

        // データの取得


        $datum=$request->validated();




        // テーブルにINSERT
        try{
             UserModel::create([
                'name' => $datum['name'],
                'email'=>$datum['email'],
                'password'=>$datum['password'],
                'birth_year' => $datum['birth-year'],
                'birth_month' => $datum['birth-month'],
                'birth_day' => $datum['birth-day'],
                'password' => Hash::make($datum['password']),
        ]);
           }catch(\Throwable $e){
               echo $e->getMessage();
               exit;
           }


        // ユーザー登録成功
        $request->session()->flash('front.user_register_success', true);

          return redirect('/');

     }

}

