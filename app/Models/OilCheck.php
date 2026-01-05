<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OilCheck extends Model
{
    protected $fillable = [
        'current_odometer',
        'previous_change_date',
        'previous_change_odometer',
        'is_due',
    ];
}
