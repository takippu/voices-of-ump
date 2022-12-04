<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetitionPost extends Model
{
    use HasFactory;
    protected $fillable = ['title','content','user_id','image_path'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
