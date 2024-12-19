<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DeptAreaController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserAccess;
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

    // Rute untuk Department
    Route::prefix('department')->name('department.')->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('index');
        Route::get('{departmentUuid}/employees', [DepartmentController::class, 'showEmployees'])->name('employees');
        Route::get('/search', [DepartmentController::class, 'search'])->name('search');

        // Rute untuk pengguna (employees) di department
        Route::prefix('{departmentUuid}/employees')->name('employees.')->group(function () {
            Route::get('{userUuid}/edit', [UserController::class, 'edit'])->name('edit');
            Route::put('{userUuid}', [UserController::class, 'update'])->name('update');
            Route::get('/search', [UserController::class, 'search'])->name('search');
        });

        // Rute untuk department Area
        Route::prefix('area')->name('area.')->group(function () {

            // Route untuk store di dalam department area
            Route::prefix('{departmentUuid}/stores')->name('stores.')->group(function () {
                Route::get('/', [DeptAreaController::class, 'showStores'])->name('index');
                Route::get('/search', [StoreController::class, 'searchStores'])->name('search');
                Route::get('/{tokoId}/edit', [StoreController::class, 'editStore'])->name('edit');
                Route::put('/{tokoId}', [StoreController::class, 'updateStore'])->name('update');

                Route::prefix('{tokoId}/employees')->name('users.')->group(function () {
                    Route::get('/', [StoreController::class, 'showUsersStore'])->name('index');
                    Route::get('/search', [StoreController::class, 'searchUsersStore'])->name('search');
                    Route::get('{userUuid}/edit', [StoreController::class, 'userStoreEdit'])->name('edit');
                    Route::put('{userUuid}', [StoreController::class, 'userStoreUpdate'])->name('update');
                    Route::get('/position/{userName}', [StoreController::class, 'showPositionUser'])->name('position');
                    Route::get('/position/{userName}/edit', [StoreController::class, 'userPositionEdit'])->name('position.edit');
                    Route::put('/position/{userName}', [StoreController::class, 'userPositionUpdate'])->name('position.update');
                });
            });
        });
    });

    Route::get('/area/{area_name}', [AreaController::class, 'showAreaDetail'])->name('area.details');
});

require __DIR__ . '/auth.php';
