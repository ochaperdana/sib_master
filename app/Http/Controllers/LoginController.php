<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function index(){
        return view('main.login');
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $user = DB::table('user')->where('username',$request->input('username'))->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($user->password,$request->password)){
                return redirect('/admin');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }
}
