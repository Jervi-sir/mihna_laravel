<?php

namespace App\Models;

use App\Models\User;
use App\Models\Wilaya;
use App\Models\Booking;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'min_seats',
        'coach_id',
    ];

    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
