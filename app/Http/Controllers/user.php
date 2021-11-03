<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class user extends Controller
{
    public function index(){

        $user = DB::table('users')->get();
        return view('user' , compact('user'));
    }
}
