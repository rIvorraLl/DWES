<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
    ];

    public function postC() {
        return $this->belongsTo(Post::class);
    }

    public function userC()
    {
        return $this->belongsTo(User::class);
    }
}
