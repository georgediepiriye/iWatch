<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Coperate Men Wrist Watch-Rose Gold',
                'price'=>'N40,000',
                'category'=>'Male',
                'image'=>'https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/29/757466/1.jpg?1414'
                
            ],
            [
                'name'=>'Watch Around The Circle PU Ladies Watch Female Models Ladies',
                'price'=>'N35,000',
                'category'=>'Female',
                'image'=>'https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/36/338295/1.jpg?1769'
                
            ],
            [
                'name'=>'Fashion Exquisite Wristwatch Women Elegant Waterproof',
                'price'=>'N45,000',
                'category'=>'Female',
                'image'=>'https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/02/614016/1.jpg?4053'
                
            ],
            [
                'name'=>"Fngeen Men's Watch Golden Dragon Luxury Stainless Steel Watch",
                'price'=>'N75,000',
                'category'=>'Male',
                'image'=>'https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/18/038374/1.jpg?2353'
                
            ],
            [
                'name'=>'Stainless Silver Band PAIDU Quartz Wrist Watch Black Turntable Dial Mens Gift',
                'price'=>'N20,000',
                'category'=>'Male',
                'image'=>'https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/16/020046/1.jpg?6127'
                
            ]
        ]);
    }
}
