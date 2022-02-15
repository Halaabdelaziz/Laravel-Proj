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
    return view('posts.index ');
});


Route::get('/posts',function (){
    $data = [[
        "id"=>1,
        "name"=>"hala",
        "body"=>"junior Web developer",
        "title"=>"PHP Laravel"
    ],[
        "id"=>2,
        "name"=>"hepa",
        "body"=>" Web developer",
        "title"=>"PHP "
    ],[
        "id"=>3,
        "name"=>"lina",
        "body"=>"senior Web developer",
        "title"=>"PHP Laravel"
    ],[
        "id"=>4,
        "name"=>"aya",
        "body"=>"lead Web developer",
        "title"=>" Laravel"
    ]];
    return view("posts.index",["data"=>$data]);
});
Route::get('/create',function(){
    return view("posts.create");
});


Route::post('update',function (){
    return "updated";
});
Route::post('/store',function (){
    return "stored";
});

Route::get('/show/{id}',function ($id){
    $data = [
        "id"=>$id,
        "name"=>"hala",
        "body"=>"junior Web developer",
        "title"=>"PHP Laravel"
    ];
    return view("posts.show",$data);
})->where('id', '[0-9]+');

Route::get('/edit/{id}',function ($id){
    $data = [
        "id"=>$id,
        "name"=>"hala",
        "body"=>"junior Web developer",
        "title"=>"PHP Laravel"
    ];
    return view("posts.edit",$data);
})->where('id', '[0-9]+');