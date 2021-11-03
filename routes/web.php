<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
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

Route::get('/', function () {
return view('welcome');
});

Route::get('about', function () {
$name=
request('name');

return view('about',compact('name'));

});
Route::get('/store', function () {

$name=request('name');
return view('about',compact('name'));
});

Route::get('tasks', function () {
$tasks=['eamd'=>'EMAD',
'ahmed'=>'AHMED',
'ese'=>'ESE'];
return view('tasks' , compact('tasks'));
});
Route::get('show/{$id}', function ($id) {

    $tasks=['eamd'=>'EMAD',
    'ahmed'=>'AHMED',
    'ese'=>'ESE'];
$tasks=$tasks[$id];
return view('show',compact('tasks'));
});


Route::get('user',[user::class , 'index'] );
Route::get('posts' , [PostController::class , 'index']);
Route::get('create' , [PostController::class , 'create']);
Route::post('store/{id}' , [PostController::class , 'store']);








