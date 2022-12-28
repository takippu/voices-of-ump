<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'user_id',
    ];
    
    public function confessionPost(){
        return $this->belongsTo(ConfessionPost::class, 'post_id');

    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

    public function opinions(){
        return $this->hasOne(Opinion::class, 'signature_id', 'id');
    }
}
