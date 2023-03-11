<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use DB;

class UserAuth extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $id = DB::select("SELECT id FROM users WHERE email = '$request->email'");
            DB::table('users')
                ->where('id', $id[0]->id)
                ->update([
                    'remember_token' => $request->_token,
                ]);
            $request->session()->flash('success', 'Sucesso ao fazer login');
            return redirect('mainpage/'.$id[0]->id.'/'.$request->_token);
        }
        else{
            return redirect("/")->withSuccess('Login details are not valid');
        }
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        
        $id = DB::select("SELECT id FROM users WHERE email = '$request->email'");
        DB::table('users')
            ->where('id', $id[0]->id)
            ->update([
                'remember_token' => $request->_token,
            ]);
        $request->session()->flash('success', 'Sucesso ao cadastrar');
        return redirect('mainpage/'.$id[0]->id.'/'.$request->_token);
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('mainpage');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        //Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}
