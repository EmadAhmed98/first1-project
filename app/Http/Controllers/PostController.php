<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
       $posts = DB::table('posts')->get();

       return view('post' , compact('posts'));

    }

    public function create()
    {

        return view('create');
    }

    public function store(request $request)
    {
        $titil = $request->input('titil');
        $content = $request->input('content');
        $data=array('titil'=> $titil,"content"=>$content);
        DB::table('posts')->insert($data);
        echo "Record inserted successfully.<br/>";

    }
}
