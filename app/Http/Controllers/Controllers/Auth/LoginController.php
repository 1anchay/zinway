<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Где перенаправлять пользователей после логина.
     *
     * @var string
     */
    protected $redirectTo = '/main';

    /**
     * Создание нового контроллера
     */
    public function __construct()
    {
        // В этом случае middleware уже применяется автоматически через trait AuthenticatesUsers
        // Не нужно явно прописывать middleware здесь
    }

    /**
     * Перенаправление после аутентификации
     */
    public function redirectTo()
    {
        // Проверяем роль пользователя
        if (Auth::user()->is_admin) {
            // Если админ, перенаправляем на панель администратора
            return '/admin/dashboard'; // Укажите ваш маршрут для админ панели
        }

        // В противном случае, перенаправляем на обычную домашнюю страницу
        return '/main';
    }
}
