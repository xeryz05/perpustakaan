<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Book;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $books = Book::take(8)->get();

        
        return view('pages.home',[
            'categories' => $categories,
            'books' => $books
        ]);

    }
}
