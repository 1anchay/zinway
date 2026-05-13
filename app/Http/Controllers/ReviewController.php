<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Получение всех отзывов
    public function index()
    {
        // Получаем все отзывы с их пользователями и продуктами
        $reviews = Review::with('user', 'product')->get();
        
        // Возвращаем Blade шаблон с отзывами
        return view('reviews.index', compact('reviews'));
    }

    // Показ формы для создания отзыва
    public function create()
    {
        // Получаем список продуктов (если пользователь может выбирать продукт)
        $products = Product::all();
        
        // Возвращаем форму для создания отзыва
        return view('reviews.create', compact('products'));
    }

    // Создание нового отзыва
    public function store(Request $request)
    {
        // Валидация входных данных
        $request->validate([
            'product_id' => 'required|exists:products,id',   // Продукт должен существовать
            'review' => 'required|string',                     // Отзыв обязателен
            'rating' => 'required|integer|min:1|max:5',        // Оценка от 1 до 5
        ]);

        // Сохраняем новый отзыв (пользователь ID будет взят из сессии)
        Review::create([
            'user_id' => Auth::id(), // ID текущего авторизованного пользователя
            'product_id' => $request->product_id,
            'review' => $request->review,
            'rating' => $request->rating,
        ]);

        // Перенаправляем назад с успешным сообщением
        return redirect()->route('reviews.index')->with('success', 'Ваш отзыв успешно добавлен!');
    }
}
