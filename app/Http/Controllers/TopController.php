<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
    public function bread(){
        return view('sevenbread');
    }
    public function all(){
        return view('sevenall');
    }
    public function famiice(){
        return view('famimaice');
    }

}