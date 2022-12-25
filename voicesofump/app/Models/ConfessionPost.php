<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfessionPost extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','content','user_id','image_path'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function addViews(){ //to add view (get into controller)
        $this->views++;
        return $this->save();
    }
}
