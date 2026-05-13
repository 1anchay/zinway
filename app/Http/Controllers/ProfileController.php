<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Метод для отображения формы редактирования профиля
    public function edit()
    {
        return view('profile.edit');
    }

    // Метод для обновления профиля
    public function update(Request $request)
    {
        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Получаем текущего пользователя
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        // Обрабатываем аватар, если он был загружен
        if ($request->hasFile('avatar')) {
            // Удаляем старый аватар, если он есть
            if ($user->avatar) {
                Storage::delete('public/' . $user->avatar);
            }

            // Загружаем новый аватар
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
        }

        // Сохраняем данные пользователя
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Профиль обновлен');
    }
}
