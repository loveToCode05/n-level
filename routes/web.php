<?php

use App\Models\Categories;
use App\Models\Comments;
use Illuminate\Support\Facades\Route;

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
  
    $categories =  Categories::whereNull('parent_id')->with('children')->get();
    return view('welcome',compact('categories'));

    
     
});

Route::get('/comments', function () {
    $comments =  Comments::whereNull('parent_id')->with('children')->get();
    return view('comments',compact('comments'));


    
     
});
