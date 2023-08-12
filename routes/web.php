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
    use App\Article;
//Route::prefix('posts')->name('post.')->group(
//    function () {
//        Route::get('/', [\App\Http\Controllers\PostController::class,'index'])->name('index');
//        Route::get('/create', [\App\Http\Controllers\PostController::class,'create'])->name('create');
//        Route::get('/show/{post}', [\App\Http\Controllers\PostController::class,'show'])->name('show');
//        Route::get('/edit/{post}', [\App\Http\Controllers\PostController::class,'edit'])->name('edit');
//        Route::post('/store', [\App\Http\Controllers\PostController::class,'store'])->name('store');
//        Route::post('/update/{post}', [\App\Http\Controllers\PostController::class,'update'])->name('update');
//        Route::get('/delete/{post}', [\App\Http\Controllers\PostController::class,'destroy'])->name('delete');
//    });

Route::get('/', function () {
        $articles =\App\Models\Article::all();
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
//        $articles = DB::table('articles')->find(1);
//        dd($articles);

            return view('index');
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


Route::prefix('admin')->group(function (){
       Route::get('/article/create' , function (){

            return view('admin.articles.create');
       });
    Route::post('/article/create' , function (){
        dd($_POST);

    });

         });












