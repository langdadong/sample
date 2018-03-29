<!---->
<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', '首页') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')

    <div class="zo-px">
<!--  <div class="col-md-offset-1 col-md-10 col-sm-offset-2 col-md-8">-->
      <div class="col-md-offset-1 col-md-10"> 
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
  </body>
</html>
