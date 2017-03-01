<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest', ['except' => ['logout', 'destroy']]);

    }

    public function create()
    {
      return view('jos/login');
    }

    public function store()
    {
      if( Auth::guard('web')->attempt(request(['username', 'password']))) {
        return redirect('absensi');
      }
      elseif ( Auth::guard('guru')->attempt(request(['username', 'password']))) {
        return redirect('home');
      }
        return back()->with('alert-fail', 'Nama Atau Password Kamu Invalid');

    }

    public function destroy()
    {
      auth()->logout();
      return redirect('/loginjos');
    }

}
