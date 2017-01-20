<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
// First Route method – Root URL will match this method
Route::get('/', function () {
    return view('holder');
});
// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
   echo "Name: ".$name;
});
Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);

