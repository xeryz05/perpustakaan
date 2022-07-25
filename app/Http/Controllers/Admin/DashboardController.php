<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Book;
use App\Category;
use Illuminate\Support\Facades\DB;

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
        $users = User::where('roles','user')->count();
        $admins = User::where('roles','admin')->count();

        // $roles = User::where('users_id',$roles->id)->count();
        $book = book::count();
        $category = category::count();
        return view('pages.admin.dashboard',[
            'users' => $users,
            'admins' => $admins,
            'book' => $book,
            'category' => $category
        ]);
    }
}
