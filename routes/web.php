<?php

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
    return view('welcome');
});

Route::get('/readContact','App\Http\Controllers\c1@getContact');

Route::post('/saveAjoute','App\Http\Controllers\c1@insertData');

Route::get('/ajouter',function (){
    return view('ajouterContact');
});

Route::post('/saveAjoute','App\Http\Controllers\c1@insertContact');

Route::get('/modifier/{c}','App\Http\Controllers\c1@modifyContact');

Route::post('/saveModifier','App\Http\Controllers\c1@saveData');

Route::get('/supprimer/{c}','App\Http\Controllers\c1@deleteContact');
