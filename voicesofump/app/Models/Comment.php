<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'post_id',
        'user_id',
        'comment',
    ];
    public function confessionPost(){
        return $this->belongsTo(ConfessionPost::class, 'post_id', 'id');

    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');

    }
    public function replies(){
        return $this->hasMany(Reply::class, 'comment_parent_id', 'id');
    }
}
