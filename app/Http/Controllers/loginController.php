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

    public function auth(){
        
    }

}
