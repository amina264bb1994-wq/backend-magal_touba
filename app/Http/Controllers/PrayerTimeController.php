<?php
namespace App\Http\Controllers;

use App\Models\PrayerTime;
use Illuminate\Http\Response;

class PrayerTimeController extends Controller
{
    public function index()
    {
        $prayerTimes = PrayerTime::all();
        return response()->json($prayerTimes);
    }
}
