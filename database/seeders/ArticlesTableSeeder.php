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
        $faker = \Faker\Factory::create();
        foreach (range(1,10)as $item){
            DB::table('articles')->insert([
                'title'=>$faker->text(50),
                'slug'=>$faker->slug(50),
                'body'=>$faker->paragraph(rand(5,20)),
                'created-at'=>now(),
                'updated-at'=>now(),

            ]);
        }
    }
}
