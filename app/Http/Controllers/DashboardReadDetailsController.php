<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardReadDetailsController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.my-profile.dashboard-read-details');
    }
}
