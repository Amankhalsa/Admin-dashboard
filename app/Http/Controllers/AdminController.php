<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class AdminController extends Controller
{
    //


    public function admin_dashboard(){

    	$users =User::all();
    return view('backend.index',compact('users'));
}

// logout function 
public function Logout(){
    Auth::logout();
    return redirect()->route('login');
}
}
