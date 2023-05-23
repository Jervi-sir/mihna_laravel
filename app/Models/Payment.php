<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'amount',
        'status', // for example: 'full', 'half'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
