<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
        return redirect()->route('admin.dashboard');

})->name('dashboard');




Route::prefix('admin')->group(function(){

    Route::get('/users', [AdminController::class,'Logout'])->name('user.logout');

    Route::get('/home/view', [AdminController::class,'admin_dashboard'])->name('admin.dashboard');
});