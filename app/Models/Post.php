<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Дозволені для масового заповнення поля
    protected $fillable = ['title', 'content', 'user_id'];

    // Зв'язок "один до багатьох" з моделлю User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Зв'язок "один до багатьох" з моделлю Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

