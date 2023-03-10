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
        $token = DB::select("SELECT remember_token FROM users WHERE id = '$request->id'");
        if($request->token != $token[0]->remember_token)
            return view('welcome');
        else{
            $names = DB::select("SELECT name FROM users WHERE id = '$request->id'");
            
            return view('mainpage',['names'=> $names]);
        }
    }
    public function create(){
        return false;
    }
}
