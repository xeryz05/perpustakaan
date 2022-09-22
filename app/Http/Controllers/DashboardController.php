<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Category;
use App\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $akun = user::count();
        $book = book::count();
        $category = category::count();
       
        return view('pages.my-profile.dashboard',[
            'akun' => $akun,
            'book' => $book,
            'category' => $category,
         
        ]);
    }
}
