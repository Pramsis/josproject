<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
  {

    //show data
    $Admins = Admin::all();
    return view('jos/Admin/admin', ['Admin' => $Admins]);

  }

  public function store(Request $request)
  {

    //Validation
    $this->validate($request,[
      'nama' => 'required',
      'password' => 'required',
      'alamat' => 'required',
      'telepon' => 'required',

    ]);


    //Create New Data
    $Admin = new Admin;
    $Admin->nama = $request->nama;
    $Admin->password = bcrypt($request->password);
    $Admin->alamat = $request->alamat;
    $Admin->telepon = $request->telepon;
    $Admin->save();
    return back()->with('alert-success', 'Oww Yeahh!! Data Hasbeen Saved');
  }

  public function editadmin($id)
  {
    $Admin = Admin::find($id);
    return view('jos/admin/editadmin', ['Admin' => $Admin]);
  }

  public function update(Request $request, $id)
  {
    //Validation
   $this->validate($request,[
      'nama' => 'required',
      'alamat' => 'required',
      'telepon' => 'required'

    ]);


    //Create New Data
    $Admin = Admin::find($id);
    $Admin->nama = $request->nama;
    $Admin->alamat = $request->alamat;
    $Admin->telepon = $request->telepon;
    $Admin->save();
    return redirect()->route('manage');
  }

  public function show($id)
  {
    $Admin = Admin::where('id_admin', $id);
    return view('admin', ['Admin' => $Admin])->first();
  }

  public function destroy($id, Request $request)
  {
    //delete Data
    $Admin = Admin::find($id);
    $Admin->delete();
    return back();
  }

}
