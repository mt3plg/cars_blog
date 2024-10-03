<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Дозволені для масового заповнення поля
    protected $fillable = ['body', 'post_id', 'user_id'];

    // Зв'язок "багато до одного" з моделлю Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Зв'язок "багато до одного" з моделлю User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
