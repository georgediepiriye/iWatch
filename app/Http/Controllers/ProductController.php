<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function  index(){
        $data = Product::all();
        return view('products',['products'=>$data]);

    }

    public function detail($id){
        $data= Product::find($id);
        return view('detail',['product'=>$data]);

    }

//function to add item to cart
    public function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart();
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/?status=addedSuccessfully');

        }else{
            return redirect('login?error=addtocart');
        }
        
    }

    //function to get number of items in cart added by the user
    public static function cartItem(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();

    }
}
