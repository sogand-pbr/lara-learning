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

    Route::get('/articles/{article}', function ($article) {
        return view('index', [
//        storage->framework->views-> blade ha dr inja b soorat asamihash shode /tbdil template bleade be tag php qabel khoondn bra php
            'title'=>$article,
            'body'=>"<script>console.log('hello')</script>"

    ]);

});

