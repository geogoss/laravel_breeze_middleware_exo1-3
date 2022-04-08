<?php

use App\Models\Article;
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
})->middleware(['auth'])->name('home');

Route::get('/accueil', function () {
    $users = User::all();
    return view('pages.accueil', compact('users'));
})->name('accueil');

Route::get('/article', function () {
    $articles = Article::all();
    return view('partials.articleArticle', compact('articles'));
})->middleware(['auth'])->name('article');

Route::get('/admin', function () {
    return view('partials.backofficebackoffice');
})->middleware(['auth', 'admin'])->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
