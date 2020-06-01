<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function index(){
        return view('main.login');
    }

    public function store(Request $request){

        $username = $request->username;
        $password = $request->password;

        $user = DB::table('user')->where('username', $request->username)->first();
        
        if($user){
            if(Hash::check($user->password,Hash::make($request->password))){
                $role = DB::table('user')->where('username', '=', $request->username)->value('type_user');
                if($role=='admin'){
                    return redirect('/admin');
                } else if($role == 'tutor'){
                    return redirect('/tutor');
                } else if($role == 'siswa'){
                    return redirect('/student');
                } else {
                    return redirect('/');
                }
            }
            else{
                return redirect('/login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function destroy($v)
    {
        redirect('/');
    }
}
