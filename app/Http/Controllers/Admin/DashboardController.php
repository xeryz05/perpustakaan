<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\User;
use App\Category;
use App\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $akun = user::count();
        // $item = Statistic::orderByDesc('tanggal')->limit('4')->get();
        $users = User::where('roles','user')->count();
        $admins = User::where('roles','admin')->count();

        // $roles = User::where('users_id',$roles->id)->count();
        $book = book::count();
        $category = category::count();
         $visitor = Pengunjung::count();
        return view('pages.admin.dashboard',[
            'users' => $users,
            'admins' => $admins,
            'book' => $book,
            'category' => $category,
            'totalPengunjung' => $visitor
        ]);
    }
}
