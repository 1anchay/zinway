@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">Отзывы</h1>

    @foreach ($reviews as $review)
        <div class="p-4 border-b">
            <p class="text-lg font-semibold">{{ $review->user->name }} о курсе "{{ $review->product->name }}"</p>
            <p class="text-gray-600">Оценка: ⭐ {{ $review->rating }}/5</p>
            <p class="mt-2">{{ $review->review }}</p>
        </div>
    @endforeach
</div>
@endsection
