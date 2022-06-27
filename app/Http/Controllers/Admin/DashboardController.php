<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        return view('pages.admin.dashboard',[
            'akun' => $akun,
            'book' => $book,
            'category' => $category
        ]);
    }
}
