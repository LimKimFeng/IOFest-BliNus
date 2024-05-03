<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'created_by'
    ];

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }

    public function moderation()
    {
        return $this->hasMany(Moderation::class);
    }
}
