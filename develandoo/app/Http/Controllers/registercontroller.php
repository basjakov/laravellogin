<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class registercontroller extends Controller
{
    public function show()
    {
    		return view('layouts.register');
    }
    public function create(Request $request)
    {

    	//validate
    	$this->validate(request(),[

    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required'

    	]);
    	//create  save  user


    $cover = $request->file('profileimage');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

    $user = new User();

    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->age = $request->age;
    
    
    $user->filename = $cover->getFilename().'.'.$extension;
    $user->mime = $cover->getClientMimeType();
    $user->original_filename = $cover->getClientOriginalName();
    
    $user->save();

    //$user = User::create(request(['name','email','password']));

    	//sign 

    	auth()->login($user);


        return redirect('/');

    }
}
