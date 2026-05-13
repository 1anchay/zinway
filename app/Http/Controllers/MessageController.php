<?php
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Метод для получения всех сообщений
    public function getMessages()
    {
        // Получаем все сообщения из базы данных
        $messages = Message::all();

        // Возвращаем их в формате JSON
        return response()->json($messages);
    }

    // Метод для сохранения сообщений
    public function store(Request $request)
    {
        // Валидируем входящие данные
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        // Создаем новое сообщение и сохраняем его в базу данных
        $message = Message::create([
            'content' => $request->input('content'),
        ]);

        // Возвращаем созданное сообщение в формате JSON
        return response()->json($message, 201);
    }
}
