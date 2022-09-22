<?php

namespace App\Http\Controllers;

use App\Book;

use App\User;
use App\Category;
use App\Pengunjung;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Pengunjung $pengunjung)
    {
        $categories = Category::take(6)->get();
        $books = Book::all();
        $user = User::all();

        $userAgent = Request::server('HTTP_USER_AGENT');
        $cekUserAgent = $pengunjung::where('user_agent', $userAgent)->first();
        if($cekUserAgent == null){
            $pengunjung::create([
                'user_agent' => $userAgent
            ]);
        }
        // ddd($cekUserAgent);

        return view('pages.home',[
            'categories' => $categories,
            'books' => $books,
            'user' => $user
        ]);

    }
}
