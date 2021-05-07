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

    public function register(Request $req){
        if(empty($req->name) || empty($req->email) || empty($req->password) || empty($req->retype_password)){
            return redirect('/register?error=emptyfield');
            
        }else{
            if($req->password!==$req->retype_password){
                return redirect('/register?error=passwordsdontmatch');

            }else{
                $user = new User();
                $user->name = $req->name;
                $user->email = $req->email;
                $user->password = Hash::make($req->password);
                $user->save();
                return redirect('/login');

            }
        }
  


    }
}
