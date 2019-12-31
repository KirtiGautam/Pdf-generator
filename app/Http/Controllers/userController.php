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
            $students = $this->registered();
            $users = $this->users();
            $dat = array('students' => $students, 'user' => $user, 'users' => $users);
            return  view('user')->with('dat', $dat);
        }
        return redirect('login');
    }

    private function users()
    {
        return DB::table('users')->select()
            ->where('role', '!=', 'admin')
            ->get();
    }
    private function registered()
    {
        $students = DB::table('registered_students')->select()->get();
        return $students;
    }

    public function changerole(Request $request)
    {
        if($request->session()->has('userID')){
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
