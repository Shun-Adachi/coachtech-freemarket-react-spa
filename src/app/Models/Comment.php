<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'item_id',
    ];

    //CommentとUserのリレーション
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
