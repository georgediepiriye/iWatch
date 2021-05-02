<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
  
    public function login(Request $req){


        $user = User::where(['email'=>$req->email])->first();
        //checks if user doesnt exist in database or password isnt correct
        if(!$user || !Hash::check($req->password, $user->password)){
            return redirect('/login?error=wrongcredentials');
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }

       
    }
}
