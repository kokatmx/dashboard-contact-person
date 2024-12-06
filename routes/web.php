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

    Route::prefix('department')->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('department.index');
        Route::get('{uuid}/employees', [DepartmentController::class, 'showEmployees'])->name('department.employees');
        Route::get('/search', [DepartmentController::class, 'search'])->name('department.search');
        Route::prefix('employees')->group(function () {
            Route::get('{uuid}/edit', [UserController::class, 'edit'])->name('user.edit');
            Route::put('{uuid}', [UserController::class, 'update'])->name('user.update');
        });
        Route::get('{uuid}/employees/search', [UserController::class, 'search'])->name('user.search');

        // Route untuk Departemen Area
        Route::prefix('area')->group(function () {
            Route::get('{uuid}/stores', [DeptAreaController::class, 'showStores'])->name('department.stores');
            Route::get('{uuid}/stores/search', [StoreController::class, 'searchStores'])->name('department.stores.search');
            Route::get('{uuid}/stores/{tokoId}/edit', [StoreController::class, 'editStore'])->name('stores.edit');
            Route::put('{uuid}/stores/{tokoId}', [StoreController::class, 'updateStore'])->name('stores.update');;
            Route::prefix('/stores')->group(function () {
                Route::get('{tokoId}/users', [StoreController::class, 'showUsersStore'])->name('stores.users');
                Route::get('{tokoId}/users/search', [StoreController::class, 'searchUsersStore'])->name('stores.users.search');
                Route::get('{tokoId}/position/{userName}', [StoreController::class, 'showPositionUser'])->name('stores.position.users');
            });
        });

        // Route::prefix('area/{uuid}/stores')->group(function () {
        //     // Rute utama untuk toko dalam departemen
        //     Route::get('/', [DeptAreaController::class, 'showStores'])->name('department.stores');
        //     Route::get('/search', [StoreController::class, 'searchStores'])->name('department.stores.search');
        //     Route::get('/{tokoId}/edit', [StoreController::class, 'editStore'])->name('stores.edit');
        //     Route::put('/{tokoId}', [StoreController::class, 'updateStore'])->name('stores.update');

        //     // Rute terkait pengguna dalam toko
        //     Route::get('/{tokoId}/users', [StoreController::class, 'showUsersStore'])->name('stores.users');
        //     Route::get('/{tokoId}/users/search', [StoreController::class, 'searchUsersStore'])->name('stores.users.search');
        //     Route::get('/{tokoId}/position/{userName}', [StoreController::class, 'showPositionUser'])->name('stores.position.users');
        // });
    });

    Route::get('/area/{area_name}', [AreaController::class, 'showAreaDetail'])->name('area.details');
});

require __DIR__ . '/auth.php';
