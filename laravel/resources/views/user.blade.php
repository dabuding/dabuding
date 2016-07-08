<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户的添加</title>
</head>
<body>
	<form action="/deal" method="post">
		用户名: <input type="text" name="username" value="{{old('username')}}"><br>
		密码 <input type="password" name="password" value="{{old('password')}}"><br>
		邮箱: <input type="text" name="email" value="{{old('email')}}"><br>
		手机号: <input type="text" name="phone" value="{{old('phone')}}"><br>
		<button>点击注册</button>
	</form>
</body>
</html>