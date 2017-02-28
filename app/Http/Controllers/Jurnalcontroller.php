<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use App\Models\Masterjurnal;

class JurnalController extends Controller
{
  public function jurnalxrpl1()
  {
    $Masterjurnals = Masterjurnal::all()->where('kelas', 'like', 'X RPL 1');
    return view('jos/jurnal/jurnalxrpl1', ['Masterjurnals' => $Masterjurnals]);
  }

  public function store(Request $request)
  {

    //Validation
    $this->validate($request,[
      'date' => 'required',
      'kelas' => 'required',
      'todo' => 'required|max:25',
      'nama_guru' => 'required',

    ]);


    //Create New Data
    $Masterjurnal = new Masterjurnal;
    $Masterjurnal->date = $request->date;
    $Masterjurnal->kelas = $request->kelas;
    $Masterjurnal->todo = $request->todo;
    $Masterjurnal->nama_guru = $request->nama_guru;
    $Masterjurnal->save();
    return back()->with('alert-success', 'Data Jurnal Telah Disimpan');
  }


  public function jurnalxirpl1()
  {
    $Masterjurnals = Masterjurnal::all()->where('kelas', 'like', 'XI RPL 1');
    return view('jos/jurnal/jurnalxirpl1', ['Masterjurnals' => $Masterjurnals]);
  }

  public function jurnalxiirpl1()
  {
    $Masterjurnals = Masterjurnal::all()->where('kelas', 'like', 'XII RPL 1');
    return view('jos/jurnal/jurnalxiirpl1', ['Masterjurnals' => $Masterjurnals]);
  }


}
