<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //editar essa prora aqui
    public function index()
    {
        return view('mainpage');
    }
    public function create(){
        return false;
    }
}
