<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $fillable = [
        'rate',
        'visit_id',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function visit(){
        return $this->belongsTo(Visit::class);
    }
}

