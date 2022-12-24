<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $table = 'replies';
    protected $fillable = [
        'comment_parent_id',
        'user_id',
        'reply',
    ];
    public function commentParent(){
        return $this->belongsTo(Comment::class, 'id', 'id');

    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');

    }
}
