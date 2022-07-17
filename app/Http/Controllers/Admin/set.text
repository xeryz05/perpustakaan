<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\BookAsset;
use App\Book;
use App\BookPDF;
use App\Http\Requests\Admin\BookAssetRequest;

use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BookAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = BookAsset::with(['book']);

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
                                    <form action="' . route('book-asset.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->editColumn('pdfs', function ($item) {
                    return $item->pdfs ? '<iframe src"' . Storage::url($item->pdfs) . '" style="max-height: 80px;"></iframe>' : '';
                })
                ->rawColumns(['action','pdfs'])
                ->removeColumn('id')
                ->addIndexColumn()
                ->make();
        }

        return view('pages.admin.book-asset.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();

        return view('pages.admin.book-asset.create',[
            'books' => $books
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookAssetRequest $request)
    {
        $data = $request->all();

        $data['pdfs'] = $request->file('pdfs')->store('assets/pdf', 'public');

        BookAsset::create($data);

        return redirect()->route('book-asset.index');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookAssetRequest $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = BookAsset::findorFail($id);
        $item->delete();

        return redirect()->route('book-asset.index');

    }

}
