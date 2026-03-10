<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/consultar',function(){
    return view("aprendices");
});

Route::get('/insertar',function(){
    $user = App/Model/User::class;

    return dd($user); 
});