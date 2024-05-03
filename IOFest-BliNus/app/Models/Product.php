<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'description',
        'rating', 'price', 'stock', 'comments', 
        'image'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
