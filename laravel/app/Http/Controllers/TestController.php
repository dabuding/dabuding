<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * 声明方法
     */
    public function request(Request $request)
    {
    	//获取请求方式
    	$method = $request->method();
    	//检测是否为指定的方式
    	$res = $request->isMethod('GET');
    	//请求路径
    	$path = $request->path();
    	//获取 请求的完整的url  //这个位置需要注意 不包含get参数
    	$url = $request->url();
    	//获取请求的ip地址
    	$ip = $request->ip();
    	//获取端口
    	$port = $request->getPort();

    	//提取参数
    	$name = $request->input('name');
    	//默认值的设置
    	$num =  $request->input('num', 20);
    	//检测参数是否存在
    	$status = $request->has('admin');
    	//获取所有的请求参数
    	$all = $request->all();

    	//提取部分参数
    	$data = $request->only(['name','admin']);
    	$data = $request->except(['name']);

    	//获取请求头信息
    	$header = $request->header('Accept');
    	$cookie = $request->header('cookie');

    }

    /**
     * 显示文件上传的表单
     */
    public function form()
    {
    	//显示模板
    	return view('upload');
    }

    /**
     * 文件上传操作
     */
    public function upload(Request $request)
    {
    	//检测文件是否有上传
    	$status = $request->hasFile('img');
    	//移动保存文件
    	$request->file('img')->move('./uploads', '1.jpg');
    	//
    	// if(has){
    	// 	move
    	// }
    }

    /**
     * cookie的操作
     */
    public function cookie(Request $request)
    {
    	//写入cookie
    	// \Cookie::queue('name','administrator', 10);//单位为秒
    	// return response('')->withCookie('uid',20, 30);//with携带

    	//读取cookie
    	// $name = \Cookie::get('name');
    	// $uid = $request->cookie('uid');

    	// dd($uid);
    }

    /**
     * 闪存操作
     */
    public function flash(Request $request)
    {
    	// dd($request->all());

    	//闪存数据
    	$request->flash();
    }

    /**
     * 获取闪存数据
     */
    public function old()
    {
    	echo (old('a'));
    }

    public function fff()
    {
    	return view('user');
    }

    public function deal(Request $request)
    {
    	// dd($request->all());

    	//闪存数据
    	// $request->flash();
    	// $request->flashOnly(['username','email','phone']);
    	// $request->flashExcept(['username']);
    	//使页面跳转
    	// return back();

    	//简便实现
    	// return back()->withInput();
    }

    public function response()
    {
    	//返回字符串
    	// return 'iloveyou';
    	//设置cookie
    	// return response('')->withCookie('id',20,10);
    	//返回json的字符串
    	// return response()->json(['a'=>100,'b'=>200]);
    	//下载文件
    	// return response()->download('./uploads/1.jpg');
    	//页面的跳转
    	// return redirect('http://baidu.com');
    	//显示模板
    	return view('response');
    }


    public function view()
    {
    	return view('user.add', [
    		'title'=>'模板的演示',
    		'username'=>'admin',
    		'pages' => '<a href="">上一页</a><a href="">下一页</a>'
    		]);
    }

    /**
     * include子模板的引入
     */
    public function listshow()
    {
    	return view('list');
    }

    /**
     * 模板继承
     */
    public function detail()
    {
    	return view('detail', ['title'=>'商品的详情']);
    }
}
