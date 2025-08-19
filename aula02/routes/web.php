<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
    Route::get ( '/eduzika/teste', function (){
        return view(view:'teste');
    });
