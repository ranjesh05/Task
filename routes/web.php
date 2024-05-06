<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Category;
use App\Livewire\Admin\Product;
use App\Livewire\User\Dashboard as UserDashboard;
use App\Http\Controllers\Controller;

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
    return view('auth.login');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/logout', [Controller::class, 'logout'])->name('logout');


Route::prefix('super-admin')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'SuperAdmin'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('super-admin.dashboard');
    Route::get('/category-list', Category::class)->name('super-admin.category_list');
    Route::get('/product-list', Product::class)->name('super-admin.product_list');


});
Route::prefix('user')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'User'])->group(function () {
    Route::get('/dashboard', UserDashboard::class)->name('user.dashboard');


});