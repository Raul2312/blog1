<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('posts')->insert([
            "title"=>'Como cuidar las suculentas',
            "description"=>'Aprende com cuidar y como regarlas',
            'img'=>'default.jpg',
            'content'=>'Contenido del post',
            'likes'=>0,
            'slug'=> 'como-cuidar-suculentas',
            'user_id'=>1,
            'categorias_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);

         DB::table('posts')->insert([
            "title"=>'Como tener un pasto verde',
            "description"=>'Aprende a siempre tener tu pasto verde',
            'img'=>'default.jpg',
            'content'=>'Contenido del post',
            'likes'=>0,
            'slug'=> 'como-tener-pasto-verde',
            'user_id'=>1,
            'categorias_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
    }
}
