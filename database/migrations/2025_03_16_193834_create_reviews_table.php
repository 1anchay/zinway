<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Уникальный ID
            $table->unsignedBigInteger('user_id'); // ID пользователя
            $table->unsignedBigInteger('product_id'); // ID товара
            $table->text('review'); // Текст отзыва
            $table->unsignedTinyInteger('rating'); // Оценка от 1 до 5
            $table->timestamps(); // created_at и updated_at

            // Связи
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};

