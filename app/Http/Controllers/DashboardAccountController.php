<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardAccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('pages.my-profile.profile.dashboard-profile',[
            'user' => $user
        ]);
    }

    public function account()
    {
        $user = Auth::user();

        return view('pages.my-profile.dashboard-account',[
            'user' => $user
        ]);
    }

    public function setting()
    {
        $user = Auth::user();

        return view('pages.my-profile.dashboard-account',[
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();


        $item = Auth::user($id);

        $data['avatar'] = $request->file('avatar')->store('assets/user', 'public');

        $item->update($data);

        return redirect()->route('dashboard-profile');
    }

}
