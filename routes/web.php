<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	if(auth()->user()){


if(auth()->user()->is_admin==1){
    return redirect('/admin');
}}
else{
	return redirect('/home');
}
});
Route::get('/seerooms',[App\Http\Controllers\HomeController::class,'seerooms']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/roombook/{room_id}', [App\Http\Controllers\RoombookController::class, 'create'])->name('roombook');

Route::post('/roombook/store', [App\Http\Controllers\RoombookController::class, 'store']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'dashboard']);
Route::post('/createroom', [App\Http\Controllers\AdminController::class, 'createroom']);
Route::post('/createmessage',[App\Http\Controllers\MessageController::class, 'createmessage']);
Route::get('/showmessage',[App\Http\Controllers\MessageController::class, 'show']);
Route::get('/history',[App\Http\Controllers\RoombookController::class, 'history']);
Route::post('botman', function(){
app('botman')->listen();

});
