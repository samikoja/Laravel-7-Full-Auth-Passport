<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_date', 'end_date', 'discription', 'image', 'title','is_avaliable', 'is_freez', 'seat', 'cost', 'discount', 'start_date_postpone', 'end_date_postpone', 'is_deleted',
    ];
}
