<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //用户的添加
    public function add()
    {
    	echo '用户的添加页面....';
    }

    public function delete()
    {
    	echo '用户的删除操作....';
    }

    /**
     * 通过反射机制来获取当前方法所需要的参数
     */
    public function index($id)
    {
    	echo '当前 的用户的id为'.$id;
    }

    /**
     * 后台的设置
     */
    public function setting()
    {
    	echo '这里是后台的设置页面.....';
    }
}
