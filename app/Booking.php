<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_booking', 'status', 'is_paid', 'seat', 'cost', 'discount', 'net',
    ];
}
