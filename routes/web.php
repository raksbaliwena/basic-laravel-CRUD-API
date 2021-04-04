<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;

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



Route::get('/home', 'HomeController@index');

Auth::routes();


Route::get('/posts', 'PostsController@index');



// Route::get('/', function () {
//         return view('layouts.app');
//     });



    // Route::get('/posts', function () {
    //     return view('posts.index');
    // });


// Route::get('/insert', function () {

//     DB::insert('insert into posts(title, body) values(?, ?)', ['My story', 'My name is Rakim Unruly and I love Football']);


// });

// Route::get('/read', function (){

//     $results = DB::select('select * from posts where id=?', [1]);

//     return var_dump($results);

//     // foreach ($results as $posts ){



//     //     return $posts-> title;
//     // }

// });


// Route::get('/update', function () {

//      $updated = DB::update('update posts set title = "update title" where id=?', [1]);

// });


// Route::get('/delete', function () {

//     $deleted = DB::delete('delete from posts where id=?', [1]);

//     return $deleted;
// });


//one to one rel--- ONE user has ONE post

// Route::get('/user/{id}/post', function($id){

//     return User::find($id)->post;



// });


// //inverse of one to one rel-----ONE post belongs to ONE user
// Route::get('/post/{id}/user', function($id){

//     return Post::find($id)->user;


// });

//Route::resource('/posts', 'PostsController');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
