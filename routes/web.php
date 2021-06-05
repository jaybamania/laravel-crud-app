<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersForm;
use App\Http\Controllers\MembersDisplay;

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
Route::get('/admin', function () {
    return view('admin');
});
// Route::get('/add', function () {
//     return view('add');
// });
// Route::view('admin','admin');
Route::view('add', 'add');

Route::post('add',[MembersForm::class,'add']);

//Showing Members from DB
Route::get('admin',[MembersDisplay::class,'showData']);

//Update Data
Route::get('edit/{id}',[MembersForm::class,'editData']);
Route::post('edit/',[MembersForm::class,'update']);

//Delete Data
Route::get('delete/{id}',[MembersForm::class,'deleteData']);
