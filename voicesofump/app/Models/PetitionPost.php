<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetitionPost extends Model
{
    use HasFactory;
    protected $fillable = ['title','content','user_id','image_path','signature_goals'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function signs(){
        return $this->hasMany(Signature::class, 'post_id');
    }
    
    public function addViews(){ //to add view (get into controller)
        $this->views++;
        return $this->save();
    }
}
