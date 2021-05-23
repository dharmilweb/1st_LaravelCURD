<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogUser;
use App\Http\Controllers\SebUser;
use App\Http\Controllers\UserProduct;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

route::view("/","Main");
route::view("/MyLogin","LogIN");
route::view("/MySubmit","Submit");
route::view("/MyProduct","product");
route::view("/AddMyProduct","add_product");
//route::view("/DB_UpSel","Update");

Route::get("/MyLogData",function(){
    Session::forget("UserData");
    return redirect("/");
});

route::POST("/Log_Con", [ LogUser::class , "Log_Data"]);
route::POST("/Sub_Con", [ SebUser::class , "Sub_Data"]);

route::POST("/Add_Pro", [ UserProduct::class , "Pro_Data"]);
route::get("/MyProduct", [  UserProduct::class , "Pro_See"]);
route::get("/DB_Del/{id}", [  UserProduct::class , "Pro_Del"]);

Route::get("/DB_UpSel/{id}", [ UserProduct::class , "Pro_UpSel"]);
Route::post("/Update", [ UserProduct::class , "Pro_Update"]);