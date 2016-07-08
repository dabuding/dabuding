--配置虚拟主机的流程

1.修改apache配置文件  将该行代码前的#去掉
	# Virtual hosts  虚拟主机的子配置文件
	Include conf/extra/httpd-vhosts.conf

2.打开httpd-vhosts.conf
	<VirtualHost *:80>
	    ServerAdmin webmaster@dummy-host2.example.com
	    DocumentRoot "D:/wamp/www/class/lamp144/laravel/laravel/public"  #网站的根目录
	    ServerName baidu.com  #域名 自定义
	    ErrorLog "logs/dummy-host2.example.com-error.log"
	    CustomLog "logs/dummy-host2.example.com-access.log" common
	</VirtualHost>

3.修改hosts文件  (位置 : C:\Windows\System32\drivers\etc\hosts)
	技巧: 文件上右键->发送到->桌面快捷方式
	//在该文件中添加 对应关系
	127.0.0.1   baidu.com

	//针对hosts文件无法修改保存的情况
	1.必须使用管理员用户登陆路
	2.将只读属性去掉
	3.右键文件->安全->选中Users->点中下面的完全控制

4.重启apache
	

--多人开发时 关于key的操作
	A用户第一个的时候将代码提交版本库
	B用户在clone代码的没有.env,修改env.example ->  .env  然后再运行php artisan key:generate
	   使用composer install 安装composer.json所指明的类包

//使用post方式请求服务器的时候 可以先将http/kernel.php 中的第20行代码注释掉.


5.运行artisan命令的时候 要保证当前脚本不能有报错.

6.隐式控制器    /goods/add   调用GoodsController类下边的 getAdd方法

7.restful 简洁的api控制器  是一种简便的操作(封装好了默认的请求方式), 该方式可以对文件进行相关的处理

8.请求行中的第二段内容是域名之后的 文件路径.

9.初级目标   使用框架能够使用路由和控制器来完成对指定请求的响应

10.如果页面在加载过程中,一直左上角在旋转, 意味着页面还没有加载完毕, 如果时间很长还是没有停止.
	这个时候 应该控制台->网络  检测哪个请求有问题

11.闪存是用来存储请求参数.