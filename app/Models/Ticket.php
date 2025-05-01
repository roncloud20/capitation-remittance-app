<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subject',
        'message',
        'evidence_path',
        'status',
    ];

    /**
     * Ticket belongs to a user (remitter).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Ticket has many replies.
     */
    public function replies()
    {
        return $this->hasMany(TicketReply::class);
    }
}
