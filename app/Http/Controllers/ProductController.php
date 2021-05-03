<?php

namespace App\Http\Controllers;
use App\Models\Product;

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
}
