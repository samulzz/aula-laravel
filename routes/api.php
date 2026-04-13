<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('status', function (){
    return response()->json(['status'=> 'ok']); //rota tipo get que retorna um json qnd o nome do projeto /status
}); 

Route::post ('posts', [PostController ::class, 'status']);

Route::get ('posts', [PostController ::class, 'index']);
Route::post ('posts', [PostController ::class, 'store']);
