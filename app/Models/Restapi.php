<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restapi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'device',
        'created_at',
        'snr',
        'station',
        'data',
        'avgSnr',
        'lat',
        'lng',
        'rssi',
        'seqNumber',
    ];
}
