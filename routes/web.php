<?php

use App\Http\Controllers\Bookcontroller;
use App\Models\Book;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/books',[Bookcontroller::class,'index'])->name("books.index");
Route::get('/books/{id}/show',[Bookcontroller::class,'show'])->name('books.show');
Route::get('/books/create',[Bookcontroller::class,'create'])->name('books.create');
Route::post('/books',[Bookcontroller::class,'store'])->name('books.store');