<?php
/**
 * Created by PhpStorm.
 * User: 王胜利
 * Date: 2018/10/25
 * Time: 21:32
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index()
    {
        $data = DB::table('met_product')->get();
        return view('index',['data'=>$data]);
    }
}