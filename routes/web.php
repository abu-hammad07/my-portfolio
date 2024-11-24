<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

// Route::get('/hammad', function () {
//     return view('body');
// });



Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

// Route::get('/index', function () {
//     return view('contact');
// })->name('contact');




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Admin Portal
Route::get('/error-404', function () {
    return view('errors.error-404');
})->name('error-404');

Route::get('/error-500', function () {
    return view('errors.error-500');
})->name('error-500');


// Route::get('/admin/login', [UsersController::class, 'Login'])->name('admin.login');
// Route::get('/registeration', [UsersController::class, 'Register'])->name('registeration');
// Route::get('/admin/forgot-password', [UsersController::class, 'ForgotPassword'])->name('forgot.password');
// Route::get('/admin/email-verification', [UsersController::class, 'EmailVerification'])->name('email.verification');
// Route::get('/admin/reset-password', [UsersController::class, 'ResetPassword'])->name('reset.password');
// Route::get('/admin/two-step-verification', [UsersController::class, 'TwoStepVerification'])->name('two.step.verification');
// Route::get('/admin/success', [UsersController::class, 'Success'])->name('success');
// Route::get('/admin/lock-screen', [UsersController::class, 'LockScreen'])->name('lock.screen');
// Route::get('/admin/under-maintenance', [UsersController::class, 'UnderMaintenance'])->name('under.maintenance');
// Route::get('/admin/coming-soon', [UsersController::class, 'ComingSoon'])->name('coming.soon');


Route::middleware(['auth', 'role:0'])->group(function () {

    Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [UsersController::class, 'MyProfile'])->name('profile');

    Route::get('/users', [UserController::class, 'index'])->name('users');



    Route::get('/roles-permissions', [UsersController::class, 'RolesPermissionsList'])->name('roles.permissions');
    Route::get('/permissions', [UsersController::class, 'Permissions'])->name('permissions');
    Route::get('/delete-account', [UsersController::class, 'DeleteAccount'])->name('delete.account');


});







require __DIR__.'/auth.php';
