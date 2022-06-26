<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAccountController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.my-profile.dashboard-account');
    }
}
