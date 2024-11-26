<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DeptAreController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarehouseController;
use App\Http\Middleware\CheckUserAccess;
use App\Http\Middleware\CheckUserDivDeptPos;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth', 'verified', CheckUserAccess::class])->group(function () {
    // Akses hanya untuk role store
    Route::get('/store', [DashboardController::class, 'index'])->name('store.dashboard');

    // Akses hanya untuk role office
    Route::get('/office', [DashboardController::class, 'index'])->name('office.dashboard');

    // Akses hanya untuk role warehouse
    Route::get('/warehouse', [DashboardController::class, 'index'])->name('warehouse.dashboard');

    Route::prefix('department')->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('department.index');
        Route::get('{uuid}/employees', [DepartmentController::class, 'showEmployees'])->name('department.employees');
        Route::get('/search', [DepartmentController::class, 'search'])->name('department.search');
        Route::prefix('employees')->group(function () {
            Route::get('{uuid}/edit', [UserController::class, 'edit'])->name('user.edit');
            Route::put('{uuid}', [UserController::class, 'update'])->name('user.update');
        });
        Route::get('{uuid}/employees/search', [UserController::class, 'search'])->name('user.search');
        Route::get('{uuid}/area', [DeptAreController::class, 'deptAreaShow'])->name('department.area');
    });

    Route::get('/area/{area_name}', [AreaController::class, 'showAreaDetail'])->name('area.details');
});

require __DIR__ . '/auth.php';
