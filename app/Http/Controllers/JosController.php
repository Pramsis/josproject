<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Mastersiswa;
use App\Models\Absen;

class JosController extends Controller
{

  public function index()
  {

   return view('jos/home');
  }

  public function absensi()
  {
    return view('jos/absensi');
  }

  public function store(Request $request)
  {
  // $users = Auth::user()->id_siswa;
  //  if (is_array($users)) {
  //
  //   foreach ($users as $user) {
       $this->validate($request,[
        'id_siswa' => 'required',
        'status' => 'required'

          ]);
      //   }
      //
      // }
    //Create New Data
    $Absen = new Absen;
    $Absen->id_siswa = $request->id_siswa;
    $Absen->status = $request->status;
    $Absen->save();
    return redirect('home')->with('alert-success', 'Oww Yeahh!! Data Hasbeen Saved');

    }


    public function kelas()
    {
      return view('jos/kelas');
    }

    public function jurnal()
    {
      return view('jos/jurnal');
    }

    public function xrpl1()
    {
      $Mastersiswas = Mastersiswa::all()->where('kelas', 'like', 'X RPL 1');
      return view('jos/siswa/xrpl1', ['Mastersiswas' => $Mastersiswas]);
    }

    public function xirpl1()
    {
      $Mastersiswas = Mastersiswa::all()->where('kelas', 'like', 'XI RPL 1');
      return view('jos/siswa/xirpl1', ['Mastersiswas' => $Mastersiswas]);
    }

    public function xiirpl1()
    {
      $Mastersiswas = Mastersiswa::all()->where('kelas', 'like', 'XII RPL 1');
      return view('jos/siswa/xiirpl1', ['Mastersiswas' => $Mastersiswas]);
    }

    public function manage()
    {
      return view('jos/manage');
    }

    public function about()
    {
      return view('jos/about');
    }


}
