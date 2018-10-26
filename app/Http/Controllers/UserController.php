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
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function insert()
    {
        if (request()->isMethod('post')){
            $data = $_POST;
            $info = DB::table('xinxi')->insert($data);
            if ($info){
                return redirect('read');
            }
        }else{
            return view('insert');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function read()
    {
        $res = DB::table('xinxi')->get();
        return view('index',['list'=>$res]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $data = DB::table('xinxi')->delete($id);
        if ($data){
            return redirect('read');
        }
    }

    public function update($id)
    {
        if (request()->isMethod('post')){
            $data = $_POST;
            $info = DB::table('xinxi')->where('id',$id)->update($data);
            if ($info){
                return redirect('read');
            }
        }else{
            $data = DB::table('xinxi')->where('id',$id)->first();
            return view('update',['data'=>$data]);
        }
    }

}