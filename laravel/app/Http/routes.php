<?php

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

Route::get('/', function () {
    return '这里是网站的首页';
});

Route::get('/test', function(){
	return 'this is atest';
});



//
Route::get('/uadd', function(){
	// return '这就是用户的添加操作....';
	//显示表单
	return view('useradd');
});

Route::post('/uadd', function(){
	return '这里是用户的插入操作....';
});


Route::get('/a-{id}', function($id){
	echo '文章的id为'.$id;
});

Route::get('/user/delete/{id}', function($id){
	echo '当前要删除的用户的id为'.$id;
});

//带参数的路由规则
Route::get('/{id}.html', function($id){
	echo '当前请求的商品的id值为'.$id;
})->where('id','\d+');

//在路由规则中创建多个参数
Route::get('/user/{action}-{id}', function($action, $id){
	echo $action;
	echo '<hr>';
	echo $id;
})->where('id','\d+');

//给路由规则设置 别名
Route::get('/admin/user/delete', [
	'as'=>'udelete',
	'uses'=> function(){
		// echo '这里是用户的删除操作';
		//获取指定路由名称的url地址
		$url = route('udelete');//route函数用来通过别名获取完整的url形式
		echo $url;
	}
	]);

//路由组的设置
Route::group([], function(){

	Route::get('/login', function(){
		echo '这里是网站的登陆页面....';
	});

});

// Route::get('/add', 'UserController@add');

Route::get('/admin', [
	'middleware'=>'login',
	'uses' => function(){
		echo '这里是网站的后台页面.....';
	}
	]);

/**
 * 创建session的写入路由
 */
Route::get('/session', function(){
	session(['id'=>100]);
});

// __callStatic
Route::get('/useradd', 'UserController@add');

//占位获取
Route::get('/user/{id}', 'UserController@index');
//原生的get参数传递
Route::get('/article', 'ArticleController@index');

//别名的设置
Route::get('/admin/article/edit', [
	'as'=>'aedit',
	'uses' => 'ArticleController@edit'
	]);

//中间件的控制
Route::get('/admin/setting', [
	'middleware'=>'login',
	'uses'=>'UserController@setting'
	]);

//另一种中间件的设置
Route::get('/admin/test', 'UserController@test')->middleware('login');

//隐式控制器   所有的请求路径为goods的 都由GoodsController来完成
Route::controller('goods', 'GoodsController');

//restful 控制器是一个简便操作..
// Route::resource('Info', 'InfoController');

//请求的操作
Route::get('/request', 'TestController@request');

//创建表单
Route::get('/form', 'TestController@form');

Route::post('/upload', 'TestController@upload');

Route::get('/cookie', 'TestController@cookie');

Route::get('/flash', 'TestController@flash');

Route::get('/old', 'TestController@old');

Route::get('/fff', 'TestController@fff');

Route::post('/deal', 'TestController@deal');

Route::get('/response', 'TestController@response');


Route::get('/view', 'TestController@view');

Route::get('/list', 'TestController@listshow');

Route::get('/detail', 'TestController@detail');


