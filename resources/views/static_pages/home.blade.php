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
https://laravel-china.org/courses/laravel-essential-training-5.5/592/the-session
				">接着上次位置看 </a>
		<a class="btn btn-lg btn-info col-xs-offset-1 col-xs-3" href="{{route('sgu')}}" >现在注册</a>
		<a class="btn btn-lg btn-danger col-xs-offset-1 col-xs-3 " href="http://v3.bootcss.com/css/" >bootstrap-中文文档</a>
</div>
</p>
<p>
<a class="btn btn-md btn-primary " href="http://www.lvyestudy.com/" >绿叶</a>
<a class="btn btn-md btn-primary " href="https://segmentfault.com/q/1010000004567615/a-1020000004569903" >view ...</a>
<a class="btn btn-md btn-primary " href="
http://laravelacademy.org/post/2774.html
" >DEBUG</a>
<a class="btn btn-md btn-primary " href="
https://www.cnblogs.com/coolworld/p/5602610.html
" >vim php IDE </a>
<a class="btn btn-md btn-primary " href="
https://blog.csdn.net/jack__cj/article/details/52671312
" >vim 	plug</a>
<a class="btn btn-md btn-primary " href="
http://www.runoob.com/try/color.php?color=Black
" >vim 	color</a>
</p>
走过的路:
SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))
尝试：https://www.linuxidc.com/Linux/2016-07/133752.htm
正解：https://segmentfault.com/a/1190000008416200
---
php artisan config:cache
<p>
装了个ctags 和 taglist  

用法：

在主目录

ctsgs -R  递归创建链接

然后在 ~/.vimrc

中要加入

 10 "设置tags搜索路径
 11 set tags=s./tags,./../tags,../../tags
 12 "开关tag窗口
 13 map <f9> :TlistToggle<CR>
 14 "imap <A-t> <Esc> <A-t>i
 15 "使用左侧窗口
 16 let Tlist_Use_Left_Window=1

然后就可以使用：

从ctrl + ] 和 ctrl + o 进行查找，还有F9 ，ctrl + 双w调出list 和切换窗口
</p>

</div>
@stop
