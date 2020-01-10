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

// Route::get('/', function () {
//     $name = request('name');
    
//     return view('test', [
//         'name' => $name
//     ]);
// });

// Route::get('/posts/{posts}', function ($post) {
//     $posts = [
//         '123' => 'abd',
//         'abc' => '123'
//     ];

//     if (! array_key_exists($post, $posts)){
//         abort(404, "post not found");
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });


Route::get('/posts/{post}', 'PostsController@show');

