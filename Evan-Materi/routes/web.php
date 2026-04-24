<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    echo "hello evan";
});

Route::get('/profil', function () {
    echo "nama : evan <br>";
    echo "NPM : 2529250005 <br>";
});

Route::get('/profil/{nama}/{npm}', function ($nama, $npm) {
    echo "nama : " . $nama . "<br>";
    echo "NPM : " . $npm . " <br>";
});