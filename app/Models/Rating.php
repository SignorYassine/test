<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'entertainment_id',
        'user_id',
        'rating'
    ];
    public function entertainment()
    {
        return $this->belongsTo('App\Models\Entertainment');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
