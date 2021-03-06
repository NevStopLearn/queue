<?php

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
use App\User;
use App\Jobs\EmailUserNewPost;

Route::get('/', function () {

    $users = User::all();

    foreach ($users as $user){
        dispatch(new EmailUserNewPost($user));
    }

    dd('done');
});
