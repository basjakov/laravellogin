<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\user;

use DB;

use Image;

class homecontroller extends Controller
{
    public function show()
    {
    	return view('layouts.index');
    }


    public function changepassword(Request $request)
    {
    	$updatepassword = $request->get('password');
  	
    	DB::table('users')->where("password", '=',  $updatepassword);
    	return redirect('/');
    }

  	public function activateactivate($token = null)
    {
        $user = User::where('token', $token)->first();

        if (empty($user)) {
            return redirect()->to('/')
                ->with(['error' => 'Failed.']);
        }

        $user->update(['token' => null, 'active' => User::ACTIVE]);

        return redirect()->route('login')
            ->with(['success' => 'congratulations.']);
    }

    public function showimage()
    {
       return view('profile', array('user' => Auth::user()) );
    }
    
}
