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
    //return 'welcome';
    return view('welcome');
});
//Route::get('/user/{user}/comment/{comment}', function ($user_id, $comment_id) {
    //
//    return 'User '.$user_id.'Comment '.$comment_id;
//});
Route::get('/user/{id}', function ($id) {
    return 'User #'.$id;
});
