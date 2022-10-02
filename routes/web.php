<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\about;
use Illuminate\Support\Facades\testmodel;
use Illuminate\Support\Facades\MyController;
use App\Http\Controllers\DurasiFilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\TahunRilisController;
use App\Http\Controllers\CastingController;
use App\Http\Controllers\FrontController;

use App\Model\Post;


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


// Route::get('/about', function () {
//     return '<h1>Halo</h1>'
//           .'Selamat datang di wabApp saya<br>'
//           .'Laravel, emang keren';
// });

Route::get('/testmodel', function() {
    $query = Post::all();
    return $query;
    $post=Post::all();
    $post=Post::find();
    $post=Post::where('title,') ;
});
Route::get('/about', function() {
    $query = Post::all();
    return $query;
});
Route::get('/about', 'MyController@showAbout');

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'],
'prefix' => 'client-area'], function () {
     Route::get('/', 'HomeController@index');
});

//route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('profile', function () {
        return view('profile');
    });
    Route::resource('genre', GenreController::class);
    Route::resource('movie', MovieController::class);
    Route::resource('reviewer', ReviewerController::class);
    Route::resource('tahun_rilis', TahunRilisController::class);
    Route::resource('casting', CastingController::class);
});

Route::get('/errors', function () {
    return view('403');
});

Route::get('/admin', function(){
    return view('layouts.admin');
  
});

Route::group(['prefix'=>'user'], function(){
    Route::get('/', [FrontController::class,'home'])->name('user.home');

    Route::get('about', [FrontController::class,'about'])->name('user.about');

    Route::get('film', [FrontController::class,'film'])->name('user.film');
    Route::get('kontak', [FrontController::class,'kontak'])->name('user.kontak');
});





