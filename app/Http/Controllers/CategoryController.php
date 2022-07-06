<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
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

        return view('pages.category',[
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

        return view('pages.category',[
            'categories' => $categories,
            'books' => $books
        ]);
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    	// mengambil data dari table pegawai sesuai pencarian data
		$categories = Book::table('category')
		->where('name','like',"%".$search."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['category' => $categories]);
 
	}
}
