<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [PostController::class, 'index'])->name('posts.index');
/*ON A BESOIN DE SAUTHENTIFIER AVANT DE CONTINUER*/
Route::middleware(['auth'])->group(function(){
    Route::resource('post', PostController::class)->except('index');
    Route::get('/dashboard', function () {
        return view('dashboard');}
    )->name('dashboard');
});



require __DIR__.'/auth.php';
