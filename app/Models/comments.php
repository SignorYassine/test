<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'entertainment_id',
        'user_name',
        'user_id',
        'comment'
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
