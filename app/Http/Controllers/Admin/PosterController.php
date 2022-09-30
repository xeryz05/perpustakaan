<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Poster;
use App\Http\Requests\Admin\PosterRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Poster::query();

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
                                    <a class="dropdown-item" href="' . route('poster.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('poster.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->editColumn('photo_poster', function($item) {
                    return $item->photo_poster ? '<image src="' . Storage::url($item->photo_poster) .'" style="max-height: 80px;"/>' : '' ;
                })

                ->rawColumns(['action','photo_poster'])
                ->removeColumn('id')
                ->addIndexColumn()
                ->make();
        }

        return view('pages.admin.poster.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.poster.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PosterRequest $request)
    {
        $data = $request->all();

        $data['photo_poster'] = $request->file('photo_poster')->store('assets/poster','public');

        Poster::create($data);

        return redirect()->route('poster.index');
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
        $item = Poster::findOrFail($id);
        return view('pages.admin.poster.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PosterRequest $request, $id)
    {
        $data = $request->all();

        $data['photo_poster'] = $request->file('photo_poster')->store('assets/poster', 'public');

        $item = Poster::findOrFail($id);

        $item->update($data);

        return redirect()->route('poster.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Poster::findOrFail($id);
        $item->delete();

        return redirect()->route('poster.index');
    }
}
