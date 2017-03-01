<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use App\Models\Masterguru;


class GuruController extends Controller
{
  public function head()
  {

    //show data
    $Mastergurus = Masterguru::all()->where('type_guru', 'like', 'Kepala Jurusan');
    return view('jos/guru/crudhead', ['Mastergurus' => $Mastergurus]);
  }

  public function store(Request $request)
  {

    //Validation
    $this->validate($request,[
      'nip' => 'required',
      'nama' => 'required',
      'username' => 'required',
      'password' => 'required|min:6',
      'jen_kel' => 'required',
      'type_guru' => 'required',
      'mapel' => 'required',
      'level' => 'required'

    ]);


    //Create New Data
    $Masterguru = new Masterguru;
    $Masterguru->nip = $request->nip;
    $Masterguru->nama = $request->nama;
    $Masterguru->username = $request->username;
    $Masterguru->password = bcrypt($request->password);
    $Masterguru->jen_kel = $request->jen_kel;
    $Masterguru->type_guru = $request->type_guru;
    $Masterguru->mapel = $request->mapel;
    $Masterguru->level = $request->level;
    $Masterguru->save();
    return back()->with('alert-success', 'Oke Data Telap Tersimpan');
  }

  public function normative()
  {
    $Mastergurus = Masterguru::all()->where('type_guru', 'like', 'Normative');
    return view('jos/guru/crudnormative', ['Mastergurus' => $Mastergurus]);
  }

  public function productive()
  {
    $Mastergurus = Masterguru::all()->where('type_guru', 'like', 'Productive');
    return view('jos/guru/crudproductive', ['Mastergurus' => $Mastergurus]);
  }

  public function admin()
  {
    $Mastergurus = Masterguru::all()->where('type_guru', 'like', 'Staff IT');
    return view('jos/Admin/admin', ['Mastergurus' => $Mastergurus]);
  }

  public function counseling()
  {
    $Mastergurus = Masterguru::all()->where('type_guru', 'like', 'Guru Bimbingan Konseling');
    return view('jos/guru/crudcounseling', ['Mastergurus' => $Mastergurus]);
  }

  public function editguru($id)
  {
    $Masterguru = Masterguru::find($id);
    return view('jos/guru/editguru', ['Masterguru' => $Masterguru]);
  }

  public function update(Request $request, $id)
  {
    //Validation
    $this->validate($request,[
      'nip' => 'required',
      'nama' => 'required',
      'jen_kel' => 'required',
      'type_guru' => 'required',
      'mapel' => 'required'

    ]);


    //Create New Data
    $Masterguru = Masterguru::find($id);
    $Masterguru->nip = $request->nip;
    $Masterguru->nama = $request->nama;
    $Masterguru->jen_kel = $request->jen_kel;
    $Masterguru->type_guru = $request->type_guru;
    $Masterguru->mapel = $request->mapel;
    $Masterguru->save();
    return redirect()->route('manage');
  }

  public function show($id)
  {
    $Masterguru = Masterguru::where('id_guru', $id);
    return view('head', ['Masterguru' => $Masterguru])->first();
  }

  public function destroy($id, Request $request)
  {
    //delete Data
    $masterGuru = Masterguru::find($id);
    $masterGuru->delete();
    return back()->with('alert-success', 'Oke Data Telap Terhapus');
  }
}
