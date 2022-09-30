<?php

namespace App\Http\Controllers;

use App\Tamu;
use App\User;
use App\Book;
use App\Pengunjung;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\UserRequest;


class TamuController extends Controller
{


   public function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
    }


    public function index()
    {

        $user = Auth::user();
        return view('pages.tamu',[
            'user' => $user,
            'totalPengunjung' => Pengunjung::count()
        ]);
    }

public function store(Tamu $tamu, Request $request)
    {

        $idUser = User::where('NIS', $request->nis)->first(); //variable $idUser akan cek  nis yang diinput user ke database, jika data yang dicari tidak ada maka akan bernilai null

        if($idUser == null){// pada line ini jika $idUser bernilau null maka nis yang di input salah
                return \response()->json('NIS Yang Kamu Masukan Salah');
                exit;
        }elseif($idUser != null){// pada line ini jika $idUser tidak null
            if($idUser->id !== Auth::id()){//maka ambil id user nya lalu cocokan dengan id user saat login. Jika id tidak sama maka sudah dipastikan nis tersebut bukan milik dia
                return \response()->json('NIS Ini Bukan Punya kamu');
                exit;
            }
        }



        $cekUserId = $tamu::where('users_id', Auth::id())->first(); //variable $cekUserId akan cek  nis yang diinput user ke database, jika data yang dicari tidak ada maka akan bernilai null

        if($cekUserId  !== null && !empty($cekUserId)){//cek jika $cekUserId tidak null dan tidak kosong, maka masuk ke validasi dibawah nya
                if($tamu::where('tgl_absen', date('Y-m-d'))->where('users_id', Auth::id())->latest()->first() == null ){//cek jika null berati dia bekum absen lalu buat data absesn nya
                            Tamu::create([
                                'users_id' => Auth::id(),
                                'status_absen' => 1,
                                'tgl_absen' => date('Y-m-d')
                            ]);

                            return \response()->json('Terimakasih Anda Sudah Berhasil Absen');
                            exit;
                    }else{
                        //jika data diatas tidak null berati sudah absesn
                            return \response()->json('Anda Sudah Absen');
                            exit;
                    }
        }
        
        else{
            Tamu::create([
                'users_id' => Auth::id(),
                'status_absen' => 1,
                'tgl_absen' => date('Y-m-d')
            ]);
            return \response()->json('Terimakasih Anda Sudah Berhasil Absen');
            exit;
        }
    }
}
