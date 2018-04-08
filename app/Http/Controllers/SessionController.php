<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DebugBar\StandardDebugBar;


class SessionController extends Controller
{
    //
	public function create(){
		return view('session.create');
	}

	public function store(Request $request){
		$credentials=$this->validate($request,[
			'email'=>'required|email|max:255',
			'password'=>'required'
		]);


//---------------------------------------------------------------
		//return redirect()->route( attempt($credentials));
		
		//$t='users.show';
		//return redirect()->route( $t,1 );

//---------------------------------------------------------------
		if( Auth::attempt(array('email' => $email, 'password' => $password)) ){
				session()->flash('success','Welcome...');
				return redirect()->route('users.show',1);
				//return redirect()->route('users.show',[Auth::user()]);

		}
		else{
				session()->flash('danger','Faile...');
				return redirect()->route('hlp');
				//return redirect()->back();
		}

	}
}
