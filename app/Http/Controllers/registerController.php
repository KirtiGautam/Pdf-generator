<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    public function index()
    {
        $flag=false;
        return view('register')->with('flag', $flag);
    }

    public function register(Request $request)
    {
        DB::insert('insert into users(username, Pass, name, role) values( ?, ?, ?, ? )', [
            $request->input('email'),
            password_hash($request->input('pass'), PASSWORD_BCRYPT), $request->input('name'),
            'pending'
        ]);
        $flag=true;
        return view('register')->with('flag', $flag);
    }
}
