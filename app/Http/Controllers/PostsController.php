<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
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
            $post = DB::table('users')
                ->leftJoin('posts', 'users.id', '=', 'posts.user_id')->where('users.id','=',$request->id)
                ->get();
            return view('mainpage',['names'=> $names, 'posts' => $post]);
        }
    }

    public function create(array $data, string $id)
    {
      return Post::create([
        'title' => $data['title'],
        'content' => $data['content'],
        'user_id'=> $id,
      ]);
    }  

    public function store(Request $request){

        $request->validate([
            'title' => 'required|max: 30',
            'content' => 'required|max:255',
        ]);
        
        $data = $request->all();
        $check = $this->create($data, $request->id);

        return $this->index($request);
    }
    
    
}
