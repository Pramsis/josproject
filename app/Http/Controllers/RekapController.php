<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Faceades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Masterjurnal;
use App\Models\Absen;

class RekapController extends Controller
{
    public function index()
    {
        return view('jos/rekap/rekap-dashboard');
    }

    public function rekapAbsenXrpl1()
    {

        dd('absen-xrpl1');
    }

    public function rekapAbsenXirpl1()
    {
        dd('absen-xirpl1');
    }
    public function rekapAbsenXiirpl1()
    {
        dd('absen-xiirpl1');
    }

    public function rekapJurnalXrpl1()
    {

        $Masterjurnals = Masterjurnal::withTrashed()->get()->where('kelas', 'like', 'X RPL 1');
        return view('jos/rekap/rekap-Jurnal/rekap-jurnal-xrpl1', ['Masterjurnals' => $Masterjurnals]);
    }

    public function rekapJurnalXirpl1()
    {
        $Masterjurnals = Masterjurnal::withTrashed()->get()->where('kelas', 'like', 'XI RPL 1');
        return view('jos/rekap/rekap-Jurnal/rekap-jurnal-xirpl1', ['Masterjurnals' => $Masterjurnals]);
    }

    public function rekapJurnalXiirpl1()
    {
        $Masterjurnals = Masterjurnal::withTrashed()->get()->where('kelas', 'like', 'XII RPL 1');
        return view('jos/rekap/rekap-Jurnal/rekap-jurnal-xiirpl1', ['Masterjurnals' => $Masterjurnals]);
    }
}
