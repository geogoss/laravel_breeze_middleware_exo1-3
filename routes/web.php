<?php

use App\Http\Controllers\ArticleController;
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
    $users = User::all();
    return view('welcome', compact('users'));
})->middleware(['auth'])->name('home');

Route::get('/accueil', function () {
    $users = User::all();
    return view('pages.accueil', compact('users'));
})->name('accueil');


Route::resource('article', ArticleController::class)->middleware(['auth']);




Route::get('/admin', function () {
    return view('partials.backofficebackoffice');
})->middleware(['auth', 'admin'])->name('admin');

Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact('users'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



