<?php
use App\Task;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
//Route::get('test',function()
//{
//    return 'get test';
//});
//Route::post('test',function()
//{
//    return 'post test';
//});
//Route::any('test',function()
//{
//    return 'any test';
//});
//Route::get('/about','MyController@getAbout');
//
//Route::get('test',function()
//{
////    $data = [
////        'name' => 'xiaoli',
////        'age'  => '20'
////    ];
//    $people = [
//        'tom',
//        'bob',
//        'jack',
//        'rose'
//    ];
//    return view('test',compact('people'));
//});
//Route::get('index','MyController@index');

//Route::get('test',function(){
//
//    $user = new App\User();
//    $user->userDelete();
//    return $user->userTest();
//});


//函数测试
//Route::get('test',function(){
//
////    $arr = ['one','two','three'];
////    $collection = collect($arr);
//////    return $collection->all();
////    $first = head($arr);//取数组中的第一个，同理last取最后一个
////    dump($first);
////    $path =app_path();//获取app文件夹的完整路径
////    dump($path);
////    $camel =camel_case('aa_sd');//中间必须有下划线才可以转为驼峰命名法
////    dump($camel);
////    echo e('<html>foo</html>');   //暂且没有起作用
////    $data = ends_with('this is a page','cc');  //判断指定字符串结尾是否是给定的值   是返回true   否返回false  相反  函数starts_with判断指定字符串开始处是否是给定的值
////    dump($data);
////    $snake = snake_case('fffsff');//把指定字符串转换为蛇形命名法   注：指定字符串中间必须得有大写字母
////    dump($snake);
////    $value = str_limit('i am a phper',4);
////    dump($value);
////
////    $value = str_finish('app\Http','\\'); //注：如果要使结果为\   则应使用\\
////    dump($value);
////    $value = str_random(23); //生成指定长度的随机字符串
////    dump($value);
//    $user = new App\User();
//    $user->userAdd();
//    return $user->userTest();
//  $sss = file_get_contents("https://lvwenhan.com/laravel/400.html");
//  dump($sss);
//});
Route::get('test','MyController@test');
Route::get('/show/{id}','MyController@show');
Route::get('/edit/{id?}','MyController@edit');
Route::get('/save/{id?}','MyController@save');
Route::get('/delete/{id?}','MyController@delete');
Route::get('/add','MyController@edit');