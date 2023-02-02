<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecruitmentController;

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

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/user', [UserController::class, 'index']);

Route::get('/admin/recruitment/category', [RecruitmentController::class, 'index']);
Route::get('/admin/recruitment/category/add', [RecruitmentController::class, 'add']);
Route::get('/admin/recruitment/category/edit/{slug}', [RecruitmentController::class, 'edit']);
Route::get('admin/recruitment/category/view/{slug}', [RecruitmentController::class, 'view']);
Route::post('/admin/recruitment/category/submit', [RecruitmentController::class, 'insert']);
Route::post('/admin/recruitment/category/update', [RecruitmentController::class, 'update']);
Route::get('/admin/recruitment/category/softdelete/{slug}', [RecruitmentController::class, 'softdelete']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
