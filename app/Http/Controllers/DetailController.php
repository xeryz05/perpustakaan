<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Read;
use Illuminate\Support\Facades\Auth;
class DetailController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $book = Book::with(['author','category'])->where('slug', $id)->firstOrFail();

        return view('pages.detail',[
            'book' => $book,

        ]);
    }
}
