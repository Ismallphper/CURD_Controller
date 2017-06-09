<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\User;
use DB;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/31 0031
 * Time: 下午 4:50
 */
//3746492952

class MyController extends Controller {
    public function test()
    {
        $user = User::orderby('id','asc')->get(); //定义$user模型实例
//        $user = DB::table('user')->paginate(5);
        return view('test',['user'=>$user]);   //返回指定的视图模版

    }

    public function show($id)
    {
        $user = User::where('id', '=', $id)->get();
        return view('show', ['user' => $user]);
    }

    public function edit()
    {
//        echo 1111;
        if (isset($id)) {
            $user = User::find($id);
        } else {
            $user = new User();
        }
        return view('edit')->with('user', $user);
    }

    public function save(Request $request,$id=NULL)
    {
        //echo 111;
        if (isset($id)) {
            User::updateOrCreate(['id' => $id], $request->input());
        } else {
            User::create($request->input());
        }
        return  redirect('test');
    }

    public function delete(Request $request,$id=NULL)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('test');
    }

    //Search
//    public function search()
//    {
//        $users = DB::table('user_table')->where('class', 'like', '%3%')->get();
//        return view('test');
//    }
//

}
