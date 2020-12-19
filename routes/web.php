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
    return view('welcome');
});

Route::get('/{page}/index', function($page) {

    $ds_header = "<div class='bg-light p-5 my-2'> 
    <p>You are now viewing</p>
    <h1>" . $page . "</h1> </div>";
    $ds_body = "<div class='container'> This is ". $page . "'s content. </div>";

    // Footer component
    // $ds_footer = "<div class='footer mt-auto py-3 bg-light'> You've reached the end of ". $page . ". </div>";

    return view('layouts.main', compact('ds_header', 'ds_body'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
