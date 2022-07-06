<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\City;

class LocationController extends Controller
{
    public function Provinces()
    {
        return Province::all();
    }

    public function Regencies($province_id)
    {
        return Regency::where('province_id', $province_id)->get();
    }

}
