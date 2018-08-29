<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\User;

use Illuminate\Support\Facades\Auth;

use DB;

class logincontroller extends Controller
{




	public function __construct()
	{
		$this->middleware('guest');
	}
    public function show()
    {
    	return view('layouts.login');
    }

    public function login(Request $request)
    {

        $query = DB::table('users')->select('name');

        $query2 = DB::table('users')->select('email');

        $this->validate($request,[
            'email' => 'required|email',
            'password'=>'required'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password'=>$request->get('password') 
        );
        if($user_data(0) == $query && $user_data(0) == $query2)
        {
            if(Auth::attempt($user_data))
            {
                return redirect('/successlogin');
            }
            
    	}
        else
            {
                return back()->with('error','Wrong details');
            }

    }

    public function successlogin()
    {

        return view('layouts.successlogin');
    }
    
    public function logout()
    {
                Auth::logout();
                return redirect('/');
    }

    
}
