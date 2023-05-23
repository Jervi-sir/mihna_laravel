<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use App\Models\Training;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'training_id',
        'status', // for example: 'confirmed', 'pending'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
