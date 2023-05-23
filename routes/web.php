<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', fn() => User::first());

Route::get('/create', function () {
    $user = new User;

    $user -> name = 'yudha';
    $user -> email ='yudhaaryo.2021@student.uny.ac.id';
    $user -> password = '1234567890';
    $user -> save();

    return'OK';
});;