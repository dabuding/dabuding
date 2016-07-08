<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<body>
	<header style="height:100px;background:orange"></header>
	@section('content')
	<section style="height:400px;background:pink"></section>
	@show
	<footer style="height:100px;background:yellowgreen"></footer>
</body>
</html>