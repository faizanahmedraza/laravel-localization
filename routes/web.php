<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
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

Route::get('/',function (){
   return view('welcome');
});

Route::get('/{locale}',function ($locale){
    return redirect($locale.'/home');
});
Route::get('/{locale}/home', [LangController::class,'index']);
Route::post('/lang',[LangController::class,'changeLang']);

/*For Auth User
use middleware('lang')
*/