<?php

/**
 * --------------------------------------------------------------------------
 * Web Routes
 * --------------------------------------------------------------------------
 *
 * Here is where you can register web routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * contains the "web" middleware group. Now create something great!
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', function () {
    return view('counter.index');
});

Route::get('/data-binding', function () {
    return view('data-binding.index');
});

Route::get('/triggering-actions', function () {
    return view('triggering-actions.index');
});

Route::get('/contact-form', function () {
    return view('contact-form.index');
});

Route::get('/posts', function () {
    return view('posts.index');
});
