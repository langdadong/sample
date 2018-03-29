<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
	public function home()
	{
		return view('static_pages/home');
	}
	public function hlp()
	{
		//return '帮助页';
		return view('static_pages/hlp');
	}
	public function about()
	{
		//return '关于页';
		return view('static_pages/about');
	}
}
