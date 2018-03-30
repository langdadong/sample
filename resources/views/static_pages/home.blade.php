R!-- home.blade.php -->

@extends('layouts.default')
@section('content')
<div class="jumbotron">
<p>
业精于勤而荒于嬉。行成于思而毁于随。
<br>
点滴积累，让我的青春无悔。
<br>
一切，将从这里开始。
</p>
<p>
<a href="http://www.golaravel.com/">Laravel 中文</a>
&nbsp;
<a href="https://laravel-china.org">Laravel China 首页</a>
<p><a href="https://laravel-china.org/courses">Laravel 5.5 教程</a><br/>
<a href="https://laravel-china.org/courses/laravel-essential-training-5.5">《Web 开发实战入门》</a>
&nbsp;
&nbsp;
<a href="https://laravel-china.org/courses/laravel-intermediate-training-5.5">《Web 开发实战进阶》</a>
</p>
<p>
<div>
		<a class="btn btn-lg btn-success col-xs-offset-1 col-xs-3" role="button" href="
https://laravel-china.org/courses/laravel-essential-training-5.5/584/according-to-the-users-information
				">接着上次位置看 </a>
		<a class="btn btn-lg btn-info col-xs-offset-1 col-xs-3" href="{{route('sgu')}}" >现在注册</a>
		<a class="btn btn-lg btn-danger col-xs-offset-1 col-xs-3 " href="http://v3.bootcss.com/css/" >bootstrap-中文文档</a>
</div>
</p>
<p>
<a class="btn btn-md btn-primary " href="http://www.lvyestudy.com/" >绿叶</a>
<a class="btn btn-md btn-primary " href="https://segmentfault.com/q/1010000004567615/a-1020000004569903" >view ...</a>
</p>
走过的路:
SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))
尝试：https://www.linuxidc.com/Linux/2016-07/133752.htm
正解：https://segmentfault.com/a/1190000008416200

</div>
@stop
