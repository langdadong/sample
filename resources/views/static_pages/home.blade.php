<!-- home.blade.php -->
<!-- 
<!DOCTYPE html>
<html>
<head>
  <title>Sample App</title>
</head>
<body>
  <h1>主页</h1>
</body>
</html> -->

@extends('layouts.default')
@section('title','主页-标题')
@section('replace_content')
	<h1>主页1</h1>
@section('replace')
	<a href="about">关于</a>
@stop