<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    //editar essa prora aqui
    public function index(Request $request)
    {   
        $names = DB::select("SELECT name FROM users WHERE id = '$request->id'");
        
        return view('mainpage',['names'=> $names]);
    }
    public function create(){
        return false;
    }
}
