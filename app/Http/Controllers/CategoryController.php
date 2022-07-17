<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $books = Book::paginate(16);

        return view('pages.book',[
            'books' => $books
        ]);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function detail(Request $request, $slug)
    {

        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $books = Book::where('categories_id', $category->id)->paginate(32);

        return view('pages.book',[
            'categories' => $categories,
            'books' => $books
        ]);
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;

        $books = Book::where('name', 'like', "%" . $search . "%")->paginate(5);
        return view('pages.book', compact('books'))->with('i', (request()->input('page', 1) - 1) * 5);

	}
}
