<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    /**
     * Получить все модели, обладающие commentable.
     */
    protected $fillable = ['likable_id'];
    public function likable()
    {
        return $this->morphTo();
    }
}
