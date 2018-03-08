<!-- help.blade.php -->

<!-- 
<!DOCTYPE html>
<html>
<head>
  <title>Sample App</title>
</head>
<body>
  <h1>帮助页</h1>
</body>
</html>
 -->
 @extends('layouts.default')
 @section('title','帮助-标题')
 @section('content')
 <h1>帮助页1</h1>
 <p>{{　}} 是在 HTML 中内嵌 PHP 的 Blade 语法标识符，表示包含在该区块内的代码都将使用 PHP 来编译运行。route() 方法由 Laravel 提供，通过传递一个具体的路由名称来生成完整的 URL
 </p>
 @stop
