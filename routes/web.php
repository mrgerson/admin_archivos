<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;

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


//Route::resource('/files', 'FilesController', [ 'except' => [ 'create', 'edit', 'update' ] ]);
Route::resource('/files', FilesController::class, [ 'except' => [ 'create', 'edit', 'update' ] ]);

//Route::resource('cursos', CursoController::class);
