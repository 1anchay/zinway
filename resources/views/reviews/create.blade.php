@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">Оставить отзыв о курсе</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded-md mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('reviews.store') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Поле для имени -->
        <div>
            <label for="user_id" class="block text-sm font-medium text-gray-700">Ваше имя</label>
            <select name="user_id" id="user_id" class="w-full p-2 border rounded-md">
                @foreach(App\Models\User::all() as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Поле для выбора курса -->
        <div>
            <label for="product_id" class="block text-sm font-medium text-gray-700">Выберите курс</label>
            <select name="product_id" id="product_id" class="w-full p-2 border rounded-md">
                @foreach(App\Models\Product::all() as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Поле для отзыва -->
        <div>
            <label for="review" class="block text-sm font-medium text-gray-700">Ваш отзыв</label>
            <textarea id="review" name="review" rows="4" class="w-full p-2 border rounded-md"></textarea>
        </div>

        <!-- Оценка -->
        <div>
            <label for="rating" class="block text-sm font-medium text-gray-700">Оценка</label>
            <select name="rating" id="rating" class="w-full p-2 border rounded-md">
                <option value="5">5 - Отлично</option>
                <option value="4">4 - Хорошо</option>
                <option value="3">3 - Нормально</option>
                <option value="2">2 - Плохо</option>
                <option value="1">1 - Ужасно</option>
            </select>
        </div>

        <!-- Кнопка отправки -->
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">
            Отправить отзыв
        </button>
    </form>
</div>
@endsection
