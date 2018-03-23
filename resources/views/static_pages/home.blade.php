<!-- home.blade.php -->

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
<a class="btn btn-lg btn-success" role="button" href="
https://laravel-china.org/courses/laravel-essential-training-5.5/582/summary
">接着上次位置看 </a>
</p>
<p>
<a class="btn btn-lg btn-info" href="{{route('sgu')}}" >现在注册</a>
<a class="btn btn-lg btn-danger" href="{{route('sgu')}}" >btn-danger</a>
</p>
<a class="btn btn-md btn-primary " href="http://www.lvyestudy.com/" >绿叶</a>

</div>
@stop
