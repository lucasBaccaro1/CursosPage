<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AdminController;

use App\Mail\ContactanosMailable;
use App\Mail\WelcomeNewsletter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/', HomeController::class)->name('home');

/*Route::get('cursos',[CursoController::class,'index'])->name('cursos.index');

Route::get('cursos/create',[CursoController::class,'create'])->name('cursos.create');

Route::post('cursos',[CursoController::class,'store'])->name('cursos.store');

Route::get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');

Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');
*/

Route::resource('cursos',CursoController::class);

Route::get('cursos/create',[CursoController::class,'create'])->middleware('can:cursos.create')->name('cursos.create');

Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->middleware('can:cursos.edit')->name('cursos.edit');

Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->middleware('can:cursos.destroy')->name('cursos.destroy');

Route::view('nosotros','nosotros')->name('nosotros');

Route::get('contactanos',function(){

    Mail::to('lucasbaccaro@hotmail.com')->send(new WelcomeNewsletter());

    return "Correo enviado";
});


Auth::routes();

// Route::get('/admin', [AdminController::class, 'index'])
//     ->middleware('auth.admin')
//     ->name('admin.index');


