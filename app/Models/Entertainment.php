<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entertainment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'genre',
        'img',
        'category',
    ];
    public function rating()
    {
        return $this->HasMany('App\Models\Rating');
    }
}
