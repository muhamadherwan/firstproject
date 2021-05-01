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

// route that send back a view
Route::get('/', function () {
    return view('home');
});


// route that send back a string
// Route::get('/users', function() {
//     return 'welcome to user page';
// });

// route to users - array(JSON) 
// Route::get('/users', function(){
//     return ['PHP', 'HTML', 'LARAVEL'];
// });

// route to users - JSON object
// Route::get('users/', function(){
//     return response()->json([
//         'name' => 'CodeNinja',
//         'course' => 'daigo saito',
//     ]);
// });

// // route to users - function
// Route::get('users/', function () {
//     return redirect('/');
// });

