<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
  $labels = ['Крипта сына <br> маминой подруги', 'биткоен <br> уровня б', 'вложи последние <br> деньги', '(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧	'];
  $labels = ['Крипта сына маминой подруги', 'биткоен <br> уровня б ', 'вложи последние деньги', '(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧	'];
  return view('welcome', ['label' => $labels[array_rand($labels)]]);
});

Route::resource('posts', PostController::class);
