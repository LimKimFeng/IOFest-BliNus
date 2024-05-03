<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderation extends Model
{
    use HasFactory;

    protected $fillable = [
        'moderator_id', 'user_id', 'room_id', 'reason', 
        'banned_at', 'unbanned_at',
    ];

    public function moderator()
    {
        return $this->belongsTo(User::class)->where('role', 'moderator');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
