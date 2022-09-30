<?php

namespace App\Exports;
use App\User;
use Illuminate\Contracts\View\view;
use Maatwebsite\Excel\Concerns\FromView;

class UserExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
        {
            //export adalah file export.blade.php yang ada di folder views
            return view('user.index', [
                //data adalah value yang akan kita gunakan pada blade nanti
                //User::all() mengambil seluruh data user dan disimpan pada variabel data
                'item' => User::all()
            ]);
        }
}
