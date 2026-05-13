<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller {
    // Метод для сохранения комментария
    public function store(Request $request) {
        // Валидация данных
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        // Создание комментария
        Comment::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        // Перенаправление обратно с сообщением об успехе
        return back()->with('success', 'Комментарий добавлен!');
    }

    // Метод для отображения комментариев
    public function index()
    {
        // Получаем комментарии с пользователями (Eager Loading)
        $comments = Comment::with('user')->paginate(10);  // Пагинация с 10 комментариями на странице

        // Возвращаем в view
        return view('comments', compact('comments'));
    }
}

