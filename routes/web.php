<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () {
//        $articles = DB::table('articles')->find(1);

//        $articles = DB::table('articles')->insert([
//            "id" => "3",
//            "title" => "article 3",
//            "slug" => "article-3",
//            "body" => "this vis article 3"
//            ]);

//        $articles = DB::table('articles')->where('slug' , 'article-3')->update([
//            'body'=>"this isarticle 33"
//        ]);

//        $articles = DB::table('articles')->orderBy('id' , 'desc')->get();
        $articles = DB::table('articles')->find(1);
        dd($articles);

    //        return view('index');
});

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/contact', function () {
        return view('contact');
    });
   Route::get('/welcome', function () {
        return view('welcome');
    });
