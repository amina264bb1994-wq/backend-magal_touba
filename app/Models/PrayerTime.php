<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrayerTime extends Model
{
    protected $table = 'prayer_times';
    protected $fillable = [
        'nom', 'heure'
    ];
}
