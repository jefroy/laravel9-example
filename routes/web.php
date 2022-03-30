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

// load view based on url, about-us maps to the blade template in resources/views/about-us
Route::get('about-laravel', function () {
    return view('about-us');
});

// redirect example
Route::get('about-us', function () {
    return redirect('about-laravel');
});

// file download example
/*
 * make a dummy file in public dir (dummy.txt)
 */
Route::get('dl-dummy', function () {
    return response()->download(public_path('dummy'));
});
