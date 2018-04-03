<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;


class SessionController extends Controller
{
    //
		public function create(){
				return view('session.create');
		}
		public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

				if (Auth::attempt($credentials)) {
           // 登录成功后的相关操作
				} else {
           // 登录失败后的相关操作
				}
       return;
    }
}
