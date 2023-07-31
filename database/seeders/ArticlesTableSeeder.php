<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class  ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1,10)as $item){
            DB::table('articles')->insert([
                'title'=>"article $item",
                'slug'=>"article-$item",
                'body'=>"this is article $item",
                'created-at'=>now(),
                'updated-at'=>now(),

            ]);
        }
    }
}
