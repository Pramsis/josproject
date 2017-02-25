<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\Models\Mastersiswa;

class siswaController extends Controller
{
  public function crudxrpl1()
  {

    $Mastersiswas = Mastersiswa::all()->where('kelas', 'like', 'X RPL 1');
    return view('jos/updatesiswa/crudxrpl1', ['Mastersiswas' => $Mastersiswas]);
  }

  public function store(Request $request)
  {
      //Validation
      $this->validate($request,[
        'nisn' => 'required',
        'nama' => 'required',
        'password' => 'required|min:6',
        'jen_kel' => 'required',
        'kelas' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'agama' => 'required',
        'level' => 'required'

      ]);

      //Create New Data
      $Mastersiswa = new Mastersiswa;
      $Mastersiswa->nisn = $request->nisn;
      $Mastersiswa->nama = $request->nama;
      $Mastersiswa->password = bcrypt($request->password);
      $Mastersiswa->jen_kel = $request->jen_kel;
      $Mastersiswa->kelas = $request->kelas;
      $Mastersiswa->tanggal_lahir = $request->tanggal_lahir;
      $Mastersiswa->alamat = $request->alamat;
      $Mastersiswa->telepon = $request->telepon;
      $Mastersiswa->agama = $request->agama;
      $Mastersiswa->level = $request->level;
      $Mastersiswa->save();
      return back()->with('alert-success', 'Oww Yeahh!! Data Hasbeen Saved');

  }

  public function crudxirpl1()
  {
    $Mastersiswas = Mastersiswa::all()->where('kelas', 'like', 'XI RPL 1');
    return view('jos/updatesiswa/crudxirpl1', ['Mastersiswas' => $Mastersiswas]);
  }

  public function crudxiirpl1()
  {
    $Mastersiswas = Mastersiswa::all()->where('kelas', 'like', 'XII RPL 1');
    return view('jos/updatesiswa/crudxiirpl1', ['Mastersiswas' => $Mastersiswas]);
  }

  public function editguru($id)
  {
    $Mastersiswa = Mastersiswa::find($id);

    return view('jos/updatesiswa/editsiswa', ['Mastersiswa' => $Mastersiswa]);
  }

  public function update(Request $request, $id)
  {
    //Validation
    $this->validate($request,[
      'nisn' => 'required',
      'nama' => 'required',
      'jen_kel' => 'required',
      'kelas' => 'required',
      'tanggal_lahir' => 'required',
      'alamat' => 'required',
      'telepon' => 'required',
      'agama' => 'required',


    ]);

    //Create New Data
    $Mastersiswa = Mastersiswa::find($id);
    $Mastersiswa->nisn = $request->nisn;
    $Mastersiswa->nama = $request->nama;
    $Mastersiswa->jen_kel = $request->jen_kel;
    $Mastersiswa->kelas = $request->kelas;
    $Mastersiswa->tanggal_lahir = $request->tanggal_lahir;
    $Mastersiswa->alamat = $request->alamat;
    $Mastersiswa->telepon = $request->telepon;
    $Mastersiswa->agama = $request->agama;
    $Mastersiswa->save();
    return redirect()->route('manage');
  }

  public function show($id)
  {
    $Mastersiswa = Mastersiswa::where('id_siswa', $id);
    return view('manage.xrpl1', ['Mastersiswa' => $Mastersiswa])->first();
  }

  public function destroy($id, Request $request)
  {
    //delete Data
    $masterSiswa = Mastersiswa::find($id);
    $masterSiswa->delete();
    return back();
  }

}
