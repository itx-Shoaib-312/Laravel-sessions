<?php

use GuzzleHttp\Psr7\Request;
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
Route::get('get-method-form', function () {
    return view('get-method-form');
})->name('get-method-form');

Route::get('post-method-form', function () {
    return view('post-method-form');
})->name('post-method-form');

Route::get('/patch-method-form', function () {
    return view('patch-method-form');
})->name('patch-method-form');

Route::get('/put-method-form', function () {
    return view('put-method-form');
})->name('put-method-form');

Route::get('/delete-method-form', function () {
    return view('delete-method-form');
})->name('delete-method-form');

Route::match(['get'], 'process-form/{name}', function ($name) {
    return "This is from get method  $name";
})->whereAlpha('shoaib')->name('processForm');

Route::match(['post'], 'process-form/{age}', function ($age) {
    return "This is from post method $age";
})->whereNumber(19)->name('processForm');
Route::match(['put'], 'process-form/{gender}', function ($gender) {
    return "This is from put method $gender";
})->whereIn('gender', ['male', 'female'])->name('processForm');
Route::match(['delete'], 'process-form/{gender }{age}', function ($gender, $age) {
    return "This is from delete method $gender, $age";
})->whereAlphaNumeric('male ', 20)->name('processForm');
Route::match(['patch'], 'process-form', function () {
    return "This is from patch method ";
})->name('processForm');
