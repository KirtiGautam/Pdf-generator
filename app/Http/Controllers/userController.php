<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('userID')) {
            $user = DB::table('users')->select()->where('id', '=', $request->session()->get('userID'))->get();
            if($user[0]->role!='admin')
                return redirect('regstu');
            $users = DB::table('users')->select()
            ->where('role', '!=', 'admin')
            ->get();
            $dat = array('users' => $users, 'user' => $user);
            return  view('user/user')->with('dat', $dat);
        }
        return redirect('login');
    }
    public function registered(Request $request)
    {
        if ($request->session()->has('userID')) {
            $user = DB::table('users')->select()->where('id', '=', $request->session()->get('userID'))->get();
            $students = DB::table('registered_students')->select()->get();
            $dat = array('students' => $students, 'user' => $user);
            return  view('user/regstu')->with('dat', $dat);
        }
        return redirect('login');
    }

    public function changerole(Request $request)
    {
        if ($request->session()->has('userID')) {
            $user = DB::table('users')->select()->where('id', '=', $request->get('id'))->get();
            return view('mod')->with('user', $user);
        }
        return redirect('login');
    }

    public function changed(Request $request)
    {
        DB::update('Update users set role=? where id=?', [
            $request->input('changed'), $request->get('id')
        ]);
        return redirect('user');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('userID');

        $request->session()->flush();

        return redirect('login');
    }
}
