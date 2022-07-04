<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[Apicontroller::class,"getdata"]);
Route::get("list",[Apicontroller::class,"list"]);
Route::post("add",[Apicontroller::class,"add"]);
Route::put("update",[Apicontroller::class,"update"]);
Route::delete("delete/{id}",[Apicontroller::class,"delete"]);
Route::get("search/{name}",[Apicontroller::class,"search"]);



