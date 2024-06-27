<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailStudioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileViewController;
use App\Http\Controllers\StudioAdminController;
use App\Http\Controllers\StudioController;
use App\Http\Middleware\RoleMiddleware;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SuperadminMiddleware;


Route::get('/', [HomeController::class, 'index']);
Route::get('/studio', [StudioController::class, 'studio'])->name('studio_app');
Route::get('/detailinformasi{id}', [HomeController::class, 'informasi']);
Route::get('/detail{id}', [HomeController::class,'detail']);
// routes/web.php
Route::get('/user-count', function() {
    $userCount = User::where('role', 'user')->count();
    $adminCount = User::where('role', 'admin')->count();
    return response()->json(['userCount' => $userCount, 'adminCount' => $adminCount]);
});
// Route::get('/dashboard', function () {
//     return view('dashboard.html.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware([SuperadminMiddleware::class])->group(function () {
    Route::get('/detail/studio/manageUser', [DashboardController::class, 'manageUser'])->name('manage.user');
    Route::get('/detail/studio/manageUser/delete/{id}', [DashboardController::class , 'deleteUser']);
    Route::post('/detail/studio/manageUser/edit/{id}', [DashboardController::class , 'editUser']);
    Route::post('/detail/studio/manageUser/add', [DashboardController::class , 'addUser']);
});


Route::middleware(['auth','verified'])->group(function () {
    Route::post('detail/studio/image', [DetailStudioController::class, 'image'])->name('image.upload');
    Route::get('detail/studio/data/{id}', [DetailStudioController::class, 'detail'])->name('data.detail');
    Route::get('detail/studio/data/delete/{id}', [DetailStudioController::class, 'delete'])->name('delete.detail');
    Route::post('detail/studio/data/{id}', [DetailStudioController::class, 'updatePost'])->name('data.update');
    Route::get('detail/studio', [DetailStudioController::class, 'index'])->name('detail.studio');
    Route::get('detail/studio/deleteDetail/{id}', [DetailStudioController::class, 'deleteDetail'])->name('detail.studio.delete');
    Route::get('studio/profileView', [ProfileViewController::class, 'index'])->name('studio.profile');
    Route::post('studio/profileView/edit/{name}', [ProfileViewController::class, 'editProfile'])->name('edit.profile');
    Route::get('studio/admin', [StudioAdminController::class, 'index'])->name('studio.admin');
    Route::post('studio/admin/post', [StudioAdminController::class, 'create'])->name('studio.post');
    Route::post('studio/admin/detail', [StudioAdminController::class, 'detail'])->name('studio.detail');
    Route::get('studio/admin/delete/{id}', [StudioAdminController::class, 'delete'])->name('studio.delete');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('studio/admin/edit/{id}', [StudioAdminController::class, 'editStudio'])->name('studio.edit.admin');
});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
