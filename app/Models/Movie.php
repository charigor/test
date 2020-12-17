<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    /**
     * Получить все комментарии видео.
     */
    protected $fillable = ['name'];
    public function likes()
    {
        return $this->morphMany('App\Models\Like', 'likable');
    }
}
