<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index(Request $request)
    {
    	echo '文章的获取';
    	//获取id参数
    	$id = $request->input('id');
    	echo $id;

    }

    public function edit()
    {
    	// echo '这里是文章的修改操作....';
    	echo route('aedit');
    	echo '<hr>';
    	echo route('udelete');
    }
}
