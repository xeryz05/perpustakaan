<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookRequest;

use App\Book;
use App\Category;
use App\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Exports\BookExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Book::with(['category']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('book.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('book.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->editColumn('photo', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 80px;"/>' : '';
                    return $item->pdf ? '<iframe src="' . Storage::url($item->pdf) . '" style="max-height: 80px;"/>' : '';
                })

                ->rawColumns(['action','photo','pdf'])
                ->removeColumn('id')
                ->addIndexColumn()
                ->make();
        }

        return view('pages.admin.book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.admin.book.create',[
            'categories' => $categories
        ]);
    }

    public function comment(Request $request)
    {

        // dd($request->all());
        Comment::create([
            'users_id' => request()->users_id,
            'books_id' => request()->books_id,
            'comment' => request()->comment,
        ]);

        $books = Book::with(['author'])->findOrFail(request()->books_id);
        return redirect()->route('detail',$books->slug)->with('success','Komentar Success !!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $data = $request->all();

        // dd($data);

        // Log::info($data); // will show in your log

        // var_dump($data);

        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/book', 'public');
        $data['pdf'] = $request->file('pdf')->store('assets/pdf', 'public');

        Book::create($data);

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Book::with(['category'])->findOrFail($id);
        $categories = Book::all();

        return view('pages.admin.book.edit',[
            'item' => $item,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/book', 'public');
        $data['pdf'] = $request->file('pdf')->store('assets/pdf', 'public');

        $item = Book::findOrFail($id);

        $item->update($data);

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Book::findorFail($id);
        $item->delete();

        return redirect()->route('book.index');

    }

    public function export()
    {
        return Excel::download(new BookExport, 'book.xlsx');
    }
}
