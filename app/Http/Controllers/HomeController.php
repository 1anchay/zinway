<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Создание нового экземпляра контроллера.
     *
     * @return void
     */
    public function __construct()
    {
        // Использование middleware
        $this->middleware('auth');  // Применяем стандартное middleware для авторизации
    }

    /**
     * Показать главное приложение.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main');  // Отображаем представление "main"
    }
}

