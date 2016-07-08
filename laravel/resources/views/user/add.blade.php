<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
</head>
<body>
	<!-- 调用函数 -->
	{{date('Y-m-d H:i:s')}}

	{{$username or 'guest'}}

	<!-- 显示html标签 -->
	{!!$pages!!}

</body>
</html>