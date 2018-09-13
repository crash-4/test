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
    //         return view('autorisation');

   // Route::get('/posts','PostsController@posts')->name('posts');
   
   Route::post('/regUser','RegistrationController@regUser');
   Route::post('/add-post','PostsController@addPost');
   Route::get('/posts','PostsController@posts')->middleware('users');
   Route::post('/logout','RegistrationController@logout');
   Route::get('/registration', function () {
    return view('registration');
    });

    Route::put('/updatePost','PostsController@updatePost')->name('updatePost');
    Route::get('/post-edit/{id}','PostsController@editPost');
    Route::delete('/post-delete/{id}','PostsController@deletePost')->name('deletePost');
    Route::get('/get-post/{id}','PostsController@getPost');
    Route::get('/get-post-by-id/{id}','PostsController@getPostById');


//Route::post('/authReg','RegistrationController@authReg')->name('authReg');

// Route::post('/authReg', function () {
//     dd(\Session::get('authReg'));
//     })->middleware('registration')->name('authReg');

//     Route::get('/set-test', function () {
//         \Session::put('registration','1');
//         });
