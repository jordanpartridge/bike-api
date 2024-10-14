<?php

namespace App\Models;

use Database\Factories\RideStatFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RideStat extends Model
{
    /** @use HasFactory<RideStatFactory> */
    use HasFactory;

    public const TYPES = [
        'distance' => 'Distance',
        'speed' => 'Speed',
        'duration' => 'Duration',
    ];
}
