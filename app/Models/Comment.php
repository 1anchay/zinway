<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    use HasFactory;

    protected $fillable = ['user_id', 'content'];

    public function user() {
        // Эта строка добавит "заглушку", если пользователь не найден
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Аноним',
            'avatar' => null,
        ]);
    }
}
