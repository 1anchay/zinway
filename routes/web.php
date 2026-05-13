<?php
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ITCourseController;
use App\Http\Controllers\CommentController;

// Главная страница
Route::get('/', function () {
    return view('main'); 
})->name('main');

// Маршруты для аутентификации (доступны только гостям)
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

// Маршрут для выхода (доступен только аутентифицированным пользователям)
Route::middleware('auth')->post('logout', [LoginController::class, 'logout'])->name('logout');

// Страница my_page
Route::get('/my_page', [MyPlaceController::class, 'index'])->name('my_page');
Route::get('/mission', function () {
    return view('mission'); 
})->name('mission');
// Страница командыvb
Route::get('/team', function () {
    return view('team'); 
})->name('team');

// Страница истории
Route::get('/history', function () {
    return view('history');
})->name('history');
Route::get('/curs', function () {
    return view('curs');
})->name('curs');
// Страница для демонстрации Tailwind CSS
Route::get('/tailwind-demo', function () {
    return view('tailwind-demo');
})->name('tailwind-demo');

// Дополнительные маршруты контроллера Main
Route::get('/main', [MainController::class, 'index'])->name('main');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');

// Маршруты для отзывов
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');  
// Страница IT-курсов
Route::get('/it-courses', [ITCourseController::class, 'index'])->name('it.courses');
Route::get('/first-steps', function () {
    return view('first-steps');
})->name('first.steps');


// Для пользователей (отправка сообщений)
Route::post('/messages', [MessageController::class, 'store']);

// Для администраторов (чтение сообщений)
Route::get('/admin/messages', [MessageController::class, 'getMessages']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// routes/web.php
Route::get('/comments-page', function () {
    return view('comments'); // resources/views/comments.blade.php
})->name('comments.page');

// Маршрут для страницы с отзывами
Route::get('/reviews-page', [ReviewController::class, 'index'])->name('reviews.page');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');


Route::get('/comments', [CommentController::class, 'index'])->name('comments'); // доп. alias
// Маршруты для комментариев (нужен middleware auth для защиты)
Route::middleware(['auth'])->group(function () {
    // Маршрут для добавления нового комментария
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    // Маршрут для просмотра комментариев
    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
});
use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    // Страница редактирования профиля
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    
    // Обновление данных профиля
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});
Route::post('/email/verify', function () {
    // Отправляем запрос на подтверждение email, если email не подтвержден
    if (Auth::user() && !Auth::user()->hasVerifiedEmail()) {
        Auth::user()->sendEmailVerificationNotification();
    }

    return response()->json(['message' => 'Письмо для подтверждения отправлено.']);
})->name('verification.send');
use App\Http\Controllers\PasswordController; // Убедитесь, что контроллер существует

// Маршрут для страницы редактирования пароля
Route::get('/password/edit', [PasswordController::class, 'edit'])->name('password.edit');
Auth::routes(['verify' => true]);
