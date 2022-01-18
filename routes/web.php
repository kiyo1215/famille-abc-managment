<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Usercontroller::class, 'cast'])->name('cast');
Route::get('/bill', [Usercontroller::class, 'bill'])->name('bill');
Route::get('/atte', [Usercontroller::class, 'atte'])->name('atte');
Route::get('/parsonal', [Usercontroller::class, 'parsonal'])->name('parsonal');
