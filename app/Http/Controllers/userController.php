<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(Request $request)
    {
        return ($request->session()->has('userID')) ? view('user')->with('data', $this->registered()) : redirect('login');
    }

    private function registered()
    {
        $students = DB::table('registered_students')->select()->get();
        return $students;
    }
}
