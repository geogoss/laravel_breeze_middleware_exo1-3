<?php

use App\Models\User;
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
    return view('welcome');
})->name('home');

Route::get('/accueil', function () {
    $users = User::all();
    return view('pages.accueil', compact('users'));
})->name('accueil');

Route::get('/article', function () {
    return view('partials.articleArticle');
})->middleware(['auth'])->name('article');

Route::get('/admin', function () {
    return view('partials.backofficebackoffice');
})->middleware(['auth'])->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';