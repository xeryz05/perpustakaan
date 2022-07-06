<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Book;
use App\Category;

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
            'category' => $category
        ]);
    }
}
