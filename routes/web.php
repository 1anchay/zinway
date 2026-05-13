<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ITCourseController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\HomeController;

// Главная страница
Route::get('/', function () {
    return view('main');
})->name('main');

// Авторизация
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->post('logout', [LoginController::class, 'logout'])->name('logout');

// Основные страницы
Route::get('/main', [MainController::class, 'index'])->name('main.page');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/my_page', [MyPlaceController::class, 'index'])->name('my_page');

Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/curs', function () {
    return view('curs');
})->name('curs');

Route::get('/tailwind-demo', function () {
    return view('tailwind-demo');
})->name('tailwind-demo');

// Курсы
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/it-courses', [ITCourseController::class, 'index'])->name('it.courses');

Route::get('/first-steps', function () {
    return view('first-steps');
})->name('first.steps');

// Отзывы
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews-page', [ReviewController::class, 'index'])->name('reviews.page');

// Сообщения
Route::post('/messages', [MessageController::class, 'store']);
Route::get('/admin/messages', [MessageController::class, 'getMessages']);

// Комментарии
Route::get('/comments-page', function () {
    return view('comments');
})->name('comments.page');

Route::get('/comments', [CommentController::class, 'index'])->name('comments');

Route::middleware('auth')->group(function () {
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
});

// Профиль
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/password/edit', [PasswordController::class, 'edit'])->name('password.edit');

    Route::post('/email/verify', function () {
        if (Auth::user() && !Auth::user()->hasVerifiedEmail()) {
            Auth::user()->sendEmailVerificationNotification();
        }

        return response()->json(['message' => 'Письмо для подтверждения отправлено.']);
    })->name('verification.send');
});