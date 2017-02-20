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
        $Masterjurnals = Masterjurnal::all()->where('kelas', 'like', 'X RPL 1');
        return view('jos/rekap/rekap-absen/rekap-absen-xrpl1', ['Masterjurnals' => $Masterjurnals]);
    }

    public function rekapAbsenXirpl1()
    {
        $Masterjurnals = Masterjurnal::all()->where('kelas', 'like', 'XI RPL 1');
        return view('jos/rekap/rekap-absen/rekap-absen-xirpl1', ['Masterjurnals' => $Masterjurnals]);
    }

    public function rekapAbsenXiirpl1()
    {
        $Masterjurnals = Masterjurnal::all()->where('kelas', 'like', 'XII RPL 1');
        return view('jos/rekap/rekap-absen/rekap-absen-xiirpl1', ['Masterjurnals' => $Masterjurnals]);
    }
}
