<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


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

    //gets the details of products in users cart
    public function cartList(){
        $user_id = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id', '=' ,'products.id')
        ->where('cart.user_id',$user_id)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('/cartlist',['products'=>$products]);

    }

    //deletes product from cart
    public function deleteFromCart($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }

    //gets the total sum of all items in user's cart 
    public function order(){
        $user_id = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');
        return view('/order',['total'=>$total]);
    }


//saves all orders in cart in database and clears cart items
    public function orderpay(Request $req){
        $user_id = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$user_id)->get();
        
        foreach($allCart as $cart){
            $order = new Order();
            $order->product_id = $cart->product_id;
            $order->user_id = $user_id;
            $order->status = 'pending';
            $order->payment_method= $req->payment;
            $order->address= $req->address;
            $order->payment_status= 'pending';
            $order->save();
            Cart::where('user_id',$user_id)->delete();


        }
        return redirect('/');

      
        
    }
}
