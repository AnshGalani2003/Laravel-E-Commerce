<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    Seeder Single Product 
        // DB::table('products')->insert([
        //     'name'=>'LG Mobile',
        //     'price'=>'10000',
        //     'description'=>'Smart Phone With 4GB Ram and much more feature',
        //     'category'=>'mobile',
        //     'gallery'=>'https://m.media-amazon.com/images/I/819sWoSDFRL._AC_UY327_FMwebp_QL65_.jpg',
        // ]);

        // Seeder multiple Prodict
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
                'price'=>'15000',
                'description'=>'Smart Phone With 6GB Ram and 64GB Rom and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/61Wb7LEqswL._AC_UY327_FMwebp_QL65_.jpg',
            ],
            [
                'name'=>'LG TV',
                'price'=>'25000',
                'description'=>'Smart Tv With 4GB Ram and much more feature',
                'category'=>'tv',
                'gallery'=>'https://m.media-amazon.com/images/I/71fs+A1rUyL._AC_UY327_FMwebp_QL65_.jpg',
            ],
            [
                'name'=>'Svmsung Tv',
                'price'=>'30000',
                'description'=>'Smart Svamsung TV  With 6GB Ram and much more feature',
                'category'=>'tv',
                'gallery'=>'https://m.media-amazon.com/images/I/71S8iUPW9bL._SX679_.jpg',
            ],
            [
                'name'=>'Sony Tv',
                'price'=>'35000',
                'description'=>'Smart Sony TV With 12GB Ram and much more feature',
                'category'=>'tv',
                'gallery'=>'https://m.media-amazon.com/images/I/717oSOB4hCL._SX679_.jpg',
            ],
            [
                'name'=>'Power Bank',
                'price'=>'1000',
                'description'=>'Power Bank With 10000MH Bettery and much more feature',
                'category'=>'powerbank',
                'gallery'=>'https://m.media-amazon.com/images/I/41kqKsOdGsL._SX_QL70_FMwebp_.jpg',
            ]
        ]);
    }
}
