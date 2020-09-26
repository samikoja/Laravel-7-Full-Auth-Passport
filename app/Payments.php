<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price_principle', 'price_secondary',
    ];
}
