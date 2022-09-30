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
        $categories = Category::take(6)->get();

        return view('pages.book',[
            'books' => $books,
            'categories' => $categories
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
        $categories = Category::where('name', 'like', "%" . $search . "%");
        return view('pages.book', compact('books','categories'))->with('i', (request()->input('page', 1) - 1) * 5);

	}
}
