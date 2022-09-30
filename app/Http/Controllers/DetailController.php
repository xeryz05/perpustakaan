<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Comment;
use App\Favorite;
use App\User;
use App\BookAsset;
use App\Pengunjung;
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
        $books = Book::with(['author','category'])->where('slug', $id)->firstOrFail();
        $comment = Comment::where('books_id',$books->id)->with('user')->get();
        $user = Auth::user();

        // dd($comment);
        // dd($comment);
        return view('pages.detail',[
            'book' => $books,
            'comment' => $comment,
            'user' => $user,
            'totalPengunjung' => Pengunjung::count(),
        ]);
    }

    public function read(Request $request, $id)
    {
        $books = Book::with(['author','category'])->where('slug', $id)->firstOrFail();
        return view('pages.read',[
            'book' => $books,
        ]);
    }
}
