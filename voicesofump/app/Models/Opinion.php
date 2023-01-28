<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'user_id',
        'signature_id',
        'opinion',
        'anon',
        
    ];
    public function signature(){
        return $this->belongsTo(Signature::class, 'signature_id', 'id');
    }
}
