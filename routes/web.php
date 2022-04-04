<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

// Post routes
// list all
Route::get('/', [PostController::class, 'list']);
// create
Route::post('/create', [PostController::class, 'store']);
Route::get('/create', [PostController::class, 'create']);
// update/read
Route::post('/posts/{post}', [PostController::class, 'update']);
Route::get('/posts/{post}', [PostController::class, 'edit']);
// delete
Route::delete('/posts/{post}', [PostController::class, 'destroy']);

// load view based on url, about-us maps to the blade template in resources/views/about-us
//Route::get('about-laravel', function () {
//    return view('about-us');
//});
//Route::get('about-laravel', AboutUsController::class); // instead, call controller class, this will call __invoke
//
//// redirect example
//Route::get('about-us', function () {
//    return redirect('about-laravel');
//});
//
//// file download example
///*
// * make a dummy file in public dir (dummy.txt)
// */
//Route::get('dl-dummy', function () {
//    return response()->download(public_path('dummy'));
//});
//
//
//// model route examples
///*
// * return a user object
// */
//Route::get('createjohn', function () {
//    $user = \App\Models\User::create([
//        'name' => 'john',
//        'email' => 'john@jon.com',
//        'password' => \Illuminate\Support\Facades\Hash::make('password')
//    ]);
//    return $user;
//});
///*
// * return all users
// */
//Route::get('allusers', function () {
//    dump(\App\Models\User::all());
//});
///*
// * find user model given id 1
// */
//Route::get('getuser1', function () {
//    dump(\App\Models\User::find(1)); // 1 is the user id at 1
//});
//

