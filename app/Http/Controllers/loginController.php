<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {
        $pend = false;
        $auth = false;
        $data = array('pend' => $pend, 'auth' => $auth);
        return view('login')->with('data', $data);
    }

    public function auth(Request $request)
    {
        $users = DB::table('users')->select()->get();
        foreach ($users as $user) {
            $username = $user->username;
            $pass = $user->Pass;
            if (
                $username == $request->input('email') &&
                password_verify($request->input("pass"), $pass)
            ) {
                if ($user->role == 'pending') {
                    $pend = true;
                    $auth = false;
                    $data = array('pend' => $pend, 'auth' => $auth);
                    return view('login')->with('data', $data);
                }
                $request->session()->put('userID', $user->id);
                return redirect('user');
            }
        }
        $pend = false;
        $auth = true;
        $data = array('pend' => $pend, 'auth' => $auth);
        return view('login')->with('data', $data);
    }
}
