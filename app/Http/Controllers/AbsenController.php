<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Mastersiswa;
use App\Models\Absen;

class AbsenController extends Controller
{
    public function store(Request $request)
      {
      // $users = Auth::user()->id_siswa;
      //  if (is_array($users)) {
      //
      //   foreach ($users as $user) {
           $this->validate($request,[
            'id_siswa' => 'required',
            'kelas' => 'required',
            'kedatangan' => 'required',
            'status' => 'required'

              ]);
          //   }

          // }
        //Create New Data
        $Absen = new Absen;
        $Absen->id_siswa = $request->id_siswa;
        $Absen->kelas = $request->kelas;
        $Absen->kedatangan = $request->kedatangan;
        $Absen->status = $request->status;
        $Absen->save();
        return back();

        }
}
