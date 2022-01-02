<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'subscription_start',
        'subscription_end'
    ];

    /**
     * Get the user subscriptions status
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
