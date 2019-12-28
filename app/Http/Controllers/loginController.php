<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request){
        $users = DB::table('users')->select()->get();
        foreach($users as $user)
            $username=$user->username;
            $pass=$user->Pass;
            if($username==$request->input('email') && 
                password_verify($request->input("pass"), $pass) ){
                $request->session()->put('userID', $user->id);
                return redirect('form');
            }
        return redirect('login');
    }

}
