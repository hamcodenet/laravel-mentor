<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::middleware(AuthMiddleware::class)
    ->group(function () {

        Route::get('blog', [PostController::class, 'index'])->name('blog');
        Route::get('post/{id}', [PostController::class, 'view'])->name('blog.view');
        Route::get('blog/create', [PostController::class, 'create'])->name('blog.create');
        Route::post('blog/create', [PostController::class, 'save'])->name('blog.save');
        Route::get('blog/{id}/delete', [PostController::class, 'delete'])->name('blog.delete');
        Route::get('blog/{id}/edit', [PostController::class, 'edit'])->name('blog.edit');
        Route::post('blog/{id}/edit', [PostController::class, 'update'])->name('blog.update');

        Route::get('blog/{post}/detach_tag/{tag}', [PostController::class, 'detachTag'])->name('blog.detach_tag');

        Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');

        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    });

Route::prefix('auth')
    ->middleware(GuestMiddleware::class)
    ->controller(AuthController::class)
    ->name('auth.')
    ->group(function () {
        Route::view('register', 'auth.register')->name('register');
        Route::post('register', 'register')->name('save_register');

        Route::view('login', 'auth.login')->name('login');

        Route::post('login', 'login')->name('do_login');

    });

Route::get('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');



Route::get('mail', function () {

    $user = User::first();

    $url = "https://hamcode.net";

    Mail::to($user)->send(new TestMail($url));
});
