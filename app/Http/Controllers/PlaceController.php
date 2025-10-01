<?php
namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Response;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return response()->json($places);
    }
}
