<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function likes()
    {
        return $this->morphMany('App\Models\Like', 'likable');
    }
}
