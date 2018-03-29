@extends('layouts.default')
@section('title', $user->name)
@section('content')
<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <div class="col-md-12">
      <div class="col-md-offset-2 col-md-8">
        <section class="user_info">
          @include('icons._user_info', ['user' => $user])
				 {{	$user->name}}
				<h2>	{{$user->email}} </h2>
        </section>
      </div>
    </div>
  </div>
</div>
@stop
