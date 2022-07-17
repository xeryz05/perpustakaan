<?php

namespace App\Http\Controllers;

use App\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $favorites = Favorite::with(['book', 'user'])->where('users_id', Auth::user()->id)->get();

        return view('pages.favorite',[
            'favorites' => $favorites
        ]);
    }

    public function delete(Request $request, $id)
    {
        $favorite = Favorite::findOrFail($id);

        $favorite->delete();

        return redirect()->route('favorite');
    }

    public function success()
    {
        return view('pages.success');
    }
}
